<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Galery;
use App\Models\Option;
use App\Models\Product;
use App\Models\SKU;
use App\Models\Variant;
use Hamcrest\Arrays\IsArray;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\TryCatch;

class C_Product extends Controller
{
    protected $product;
    protected $sku;
    protected $galery;

    public function __construct()
    {
        $this->product = new Product;
        $this->sku = new SKU;
        $this->galery = new Galery;
    }
    public function index()
    {
        $products = $this->product->paginate(20);
        $categories = Category::all();
        $template = "admin.products.index";
        return view('admin.master', compact('template', 'products', 'categories'));
    }
    public function generateVariant(array $input): array
    {
        if (!count($input)) return []; // kiểm tra mảng có trống

        $result = [[]]; // khởi tạo mảng

        foreach ($input as $key => $values) { //vòng lặp này sẽ chạy với số lượng option
            $append = []; // khởi tạo mảng con
            foreach ($values as $value) { // vòng lặp này sẽ chạy với số lượng option_value theo từng option
                foreach ($result as $data) { // vòng lặp này sẽ gán từng option_value vào mảng con đã khởi tạo
                    $append[] = $data + [$key => $value];
                }
            }
            $result = $append; // gán mảng con vào mảng lớn
        }

        return $result;
    }
    public function getValueOption(): array //trả về mảng gồm các giá trị của từng thuộc tính
    // vd: optionValue = [
    //     [s,m,l],
    //     [xanh,đỏ,đen]
    // ]
    {
        $options = Option::get(); // lấy tất cả thuộc tính

        $optionValue = []; //khởi tạo mảng trống

        for ($i = 0; $i < $options->count(); $i++) {
            $optionValues = $options[$i]->optionValues; //lấy chủng loại của từng thuộc tính
            if ($optionValues) { //kiểm tra có null ko 
                array_push($optionValue, $optionValues); //ghép vào mảng
            }
        }
        return $optionValue;
    }

    public function create()
    {
        $optionValue = $this->getValueOption();
        // dd($optionValue);

        $variantName = $this->generateVariant($optionValue);
        // dd($variantName);

        $categories = Category::where('deleted', '0')->get();

        $template = 'admin.products.create';

        return view('admin.master', compact('template', 'categories', 'variantName'));
    }
    public function store(Request $request)
    {
        $optionValues = $this->getValueOption();

        $variants = $this->generateVariant($optionValues);

        // kiểm tra có tồn tại ảnh
        if ($request->hasFile('image')) {
            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $upload = $request->file('image')->storeAs('imageProduct', $filename, 'public');
        } else {
            $upload = 'hihi.png';
        }
        $product_data = [
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image' => $upload
        ];
        try {
            $product = $this->product->createProduct($product_data); //thực hiện insert vào bảng product
        } catch (\Throwable $th) {
            return back()->with('error', 'Thêm sản phẩm thất bại');
        }



        // kiểm tra có tồn tại file ảnh không 
        if ($request->hasFile('images')) {
            $galery = [];
            foreach ($request->images as $img) {
                $galery[] = [
                    'thumbnail' => time() . '_' . $img->getClientOriginalName(),
                    'product_id' => $product->id
                ];
                $img->storeAs('galeryProduct', time() . '_' . $img->getClientOriginalName(), 'public');
            }
            try {
                $product->galery()->createMany($galery); // thực hiện insert album ảnh vào bảng galery
            } catch (\Throwable $th) {
                return back()->with('error', 'Thêm album sản phẩm thất bại');
            }
        }


        $sku = []; //khởi tạo mảng chống
        foreach ($variants as $key => $va) {
            $name = '';
            foreach ($va as $v) {
                $name .= $v->value . ' | ';
            }
            //kiểm tra giá tiền với hàng tồn có null không
            if ($request->price[$key] !== null && $request->stock[$key] !== null) {
                $sku[$key] = [
                    'name' => substr($name, 0, -3),
                    'price' => $request->price[$key],
                    'stock' => $request->stock[$key],
                    'product_id' => $product->id
                ];
            } else {
                unset($variants[$key]); //xóa các variants tại key có price và stock = null
            }
        }
        $variants = array_values($variants); //sắp xếp lại key trong mảng
        try {
            $skus = $product->skus()->createMany($sku); //thực hiển insert vào bảng skus
        } catch (\Throwable $th) {
            return back()->with('error', 'Thêm các biến thể thất bại');
        }



        $variant = [];
        foreach ($variants as $key => $var) {
            $sk = $skus[$key]; // Lấy sku tương ứng với key hiện tại

            foreach ($var as $v) {
                $variant[] = [
                    'option_id' => $v->option_id,
                    'option_value_id' => $v->id,
                    'sku_id' => $sk->id,
                    'product_id' => $product->id
                ];
            }
        }
        try {
            $product->variants()->createMany($variant); //thực hiện insert vào bảng variants
        } catch (\Throwable $th) {
            return back()->with('error', 'Thêm các variant thất bại');
        }

        return back()->with('success', 'Thêm sản phẩm thành công');
    }

    public function edit($id)
    {
        $product = $this->product::find($id);

        $categories = Category::where('deleted', '0')->get();

        $optionValue = $this->getValueOption();
        // dd($optionValue);

        $variantName = $this->generateVariant($optionValue);

        $template = 'admin.products.update';

        return view('admin.master', compact('product', 'categories', 'variantName', 'template'));
    }
    public function update(Request $request, $id)
    {
        $optionValues = $this->getValueOption();

        $variants = $this->generateVariant($optionValues);

        $product = $this->product->find($id);
        // if ($request->hasFile('image')) {
        //     $filename = time() . $request->file('image')->getClientOriginalName();
        //     $uploadFileName = $request->file('image')->storeAs('imageProduct', $filename, 'public');
        //     Storage::delete('/public/' . $product->image);
        // } else {
        //     $uploadFileName = $product->image;
        // }
        // $product = $this->product->where('id', $id)->update([
        //     'title' => $request->input('title'),
        //     'short_description' => $request->short_description,
        //     'description' => $request->description,
        //     'image' => $uploadFileName,
        //     'category_id' => $request->category_id
        // ]);


        // if ($request->hasFile('images')) {
        //     $galery = [];
        //     foreach ($request->images as $img) {
        //         $galery[] = [
        //             'thumbnail' => time() . '_' . $img->getClientOriginalName(),
        //             'product_id' => $id
        //         ];
        //         $img->storeAs('galeryProduct', time() . '_' . $img->getClientOriginalName(), 'public');
        //     }
        //     try {
        //         $product->galery()->createMany($galery); // thực hiện insert album ảnh vào bảng galery
        //     } catch (\Throwable $th) {
        //         return back()->with('error', 'Thêm album sản phẩm thất bại');
        //     }
        // }
        $skus = $product->skus()->pluck('name')->toArray();
        $sku = []; //khởi tạo mảng chống
        foreach ($variants as $key => $va) {
            $name = '';
            foreach ($va as $v) {
                $name .= $v->value . ' | ';
            }
            //kiểm tra giá tiền với hàng tồn có null không
            if ($request->price[$key] !== null && $request->stock[$key] !== null) {
                $sku[$key] = [
                    'name' => substr($name, 0, -3),
                    'price' => $request->price[$key],
                    'stock' => $request->stock[$key],
                    'product_id' => $id
                ];
            } else {
                unset($variants[$key]); //xóa các variants tại key có price và stock = null
            }
        }
        $sku = array_values($sku);
        $sku_new = [];
        $variants = array_values($variants); //sắp xếp lại key trong mảng

        foreach ($sku as $key => $sk) {
            if (in_array($sk['name'], $skus)) {
                $this->sku->where('name', $sk['name'])->where('product_id', [$id])->update($sk);
            } else {
                $sku_new[] = $this->sku->create($sk);
            }
            // Lấy tất cả các 'name' từ mảng $sku

        }
        $allSkuNames = collect($sku)->pluck('name')->all();

        // Xác định các 'name' cần xóa (không nằm trong mảng $skus)
        $namesToDelete = array_diff($skus, $allSkuNames);

        // Nếu có 'name' cần xóa, thực hiện xóa đồng loạt
        if (!empty($namesToDelete)) {
            $this->sku->where('product_id', $id)
                ->whereIn('name', $namesToDelete)
                ->delete();
        }
        $variant = [];
        foreach ($sku_new as $sk) {
            foreach($variants as $var){
                $name = '';
                foreach ($var as $v) {
                    $name .= $v->value . ' | ';
                }
                $name = substr($name,0 , -3);
                if($sk->name == $name){
                    foreach($var as $v){
                        $variant[] = [
                            'option_id' => $v->option_id,
                            'option_value_id' => $v->id,
                            'sku_id'=>$sk->id,
                            'product_id' => $id
                        ];
                    }
                }
            }
        }
        try {
            $product->variants()->createMany($variant); //thực hiện insert vào bảng variants
        } catch (\Throwable $th) {
            return back()->with('error', 'Thêm các variant thất bại');
        }
        return redirect()->route('product.index')->with('success', 'Thêm sản phẩm thành công');
    }
}

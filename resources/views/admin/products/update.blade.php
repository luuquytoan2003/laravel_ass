<div class="page-header">
    <h3 class="page-title"> Quản lí Sản Phẩm </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Quản lí thành viên</li>
            <li class="breadcrumb-item"><a href="#">Thêm thành viên</a></li>
        </ol>
    </nav>
</div>
<form action="{{ route('product.update',[$product->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            {{-- title  --}}
            <div class="card">
                <div class="card-body p-2">
                    <div class="form-group m-0">
                        <label for="">Tiêu đề sản phẩm</label>
                        <input type="text" name="title" class="form-control" placeholder="Nhập tên sản phẩm"
                            value="{{ $product->title }}">
                    </div>
                </div>
            </div>
            {{-- short-description  --}}
            <div class="card mt-2">
                <div class="card-body p-2">
                    <div class="form-group m-0">
                        <label for="">Mô tả ngắn sản phẩm</label>
                        <textarea name="short_description" id="ckeditor" cols="30" rows="10" class="form-control"
                            placeholder="Nhập mô tả ngắn của sản phẩm ">{{ $product->short_description }}</textarea>
                    </div>
                </div>
            </div>
            {{-- variant-price  --}}
            <div class="card mt-2">
                <div class="card-body p-2">
                    <div class="form-group m-0">
                        <label for="">Giá tiền và biến thể sản phẩm</label>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">Biến thể</th>
                                    <th class="text-center">Giá tiền</th>
                                    <th class="text-center">Hàng tồn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($variantName as $item)
                                    <tr>
                                        <td class="text-center">
                                            @php
                                                $name = '';
                                                foreach ($item as $key => $i) {
                                                    $name .= ($key > 0 ? ' | ' : '') . $i->value;
                                                }
                                            @endphp
                                            <label for=""> {{ $name }}</label>
                                        </td>

                                        <td>
                                            @php
                                                $skus = $product->skus;
                                                $skufound = false;
                                            @endphp
                                            @foreach ($skus as $sku)
                                                @if ($sku->name == $name)
                                                    <input name="price[]" type="text"
                                                        class="form-control form-control-sm"
                                                        value="{{ $sku->price }}">
                                                    @php
                                                        $skufound = true;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @if ($skufound == false)
                                                <input name="price[]" type="text"
                                                    class="form-control form-control-sm" value="">
                                            @endif
                                        </td>
                                        <td>
                                            
                                            @foreach ($skus as $sku)
                                                @if ($sku->name == $name)
                                                    <input name="stock[]" type="text"
                                                        class="form-control form-control-sm"
                                                        value="{{ $sku->stock }}">
                                                    @php
                                                        $skufound = true;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @if ($skufound == false)
                                                <input name="stock[]" type="text"
                                                    class="form-control form-control-sm" value="">
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- description --}}
            <div class="card mt-2">
                <div class="card-body p-2">
                    <div class="form-group m-0">
                        <label for="">Mô tả sản phẩm</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"
                            placeholder="Nhập mô tả sản phẩm ">{{ $product->description }}</textarea>
                    </div>
                </div>
            </div>
            <div id="editor"></div>
        </div>
        <div class="col-lg-4">
            {{-- image  --}}
            <div class="card">
                <div class="card-body p-2">
                    <div class="form-group m-0">
                        <label for="">Chọn ảnh đại diện sản phẩm</label>
                        <div class="text-center">
                            <img id="preview" width="200" class="border mb-1"
                                src="{{ Storage::url($product->image) }}">
                        </div>
                        <input class="form-control" type="file" name="image" id="inputFile"
                            onchange="previewImage()">
                    </div>
                </div>
            </div>
            {{-- galery --}}
            <div class="card mt-2">
                <div class="card-body p-2">
                    <div class="form-group m-0">
                        <label for="">Chọn album sản phẩm. <span class="text-danger" style="font-size: 13px">Giữ
                                Ctrl để chọn nhiều ảnh</span></label>
                        <div id="image-preview-container" class="mb-1 row">
                            @foreach ($product->galery as $item)
                                <img src="{{ Storage::url($item->thumbnail) }}" alt="" class="col-sm-4 my-1">
                            @endforeach
                        </div>
                        <input class="form-control" type="file" name="images[]" id="inputFileS" multiple
                            onchange="previewImages()">
                    </div>
                </div>
            </div>
            {{-- categories  --}}
            <div class="card mt-2">
                <div class="card-body p-2">
                    <div class="form-group m-0">
                        <label for="">Chọn danh mục sản phẩm</label>
                        @foreach ($categories as $item)
                            <div class="form-check ">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="category_id"
                                        id="optionsRadios1"value="{{ $item->id }}"
                                        {{ $item->id == $product->category_id ? 'checked' : '' }}>
                                    {{ $item->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body text-center p-2">
                    <button type="submit" class="btn btn-primary">Thêm sản phẩm </button>
                </div>
            </div>
        </div>
    </div>
</form>
@section('js')
    <script>
        function previewImage() {
            var input = document.getElementById('inputFile');
            var preview = document.getElementById('preview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function previewImages() {
            var input = document.getElementById('inputFileS');
            var previewContainer = document.getElementById('image-preview-container');

            previewContainer.innerHTML = ''; // Xóa các ảnh hiện tại

            if (input.files && input.files.length > 0) {
                for (var i = 0; i < input.files.length; i++) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        previewContainer.appendChild(img);

                        img.classList.add('col-sm-4', 'my-1');
                    };

                    reader.readAsDataURL(input.files[i]);
                }
            }
        }
    </script>
@endsection

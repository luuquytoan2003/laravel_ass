<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>
                <input type="checkbox" name="checkAll" id="selectAll">
            </th>
            <th> Hình ảnh </th>
            <th> Tên sản phẩm </th>
            <th> Danh mục </th>
            <th> Giá </th>
            <th> Ngày đăng </th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @if (isset($products))

            @foreach ($products as $key => $product)
                @php
                    $category = $product->category;
                @endphp
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>
                        <input type="checkbox" name="itemCheckbox" id="">
                    </td>
                    <td class="text-center">
                        <img src="{{ Storage::url($product->image) }}" alt="" width="">
                    </td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                        @if (!empty($product) && $product->skus && $product->skus->count() > 0)
                            {{ min($product->skus->pluck('price')->toArray()) }} -
                            {{ max($product->skus->pluck('price')->toArray()) }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        {{ $product->created_at }}
                    </td>
                    <td>
                        <a href="{{ route('product.edit', [$product->id]) }}"
                            class="btn btn-inverse-info btn-icon"><button type="button"
                                class="btn btn-inverse-info btn-icon">
                                <i class="mdi mdi-pencil-box"></i>
                            </button>
                        </a>
                        <button type="button" class="btn btn-inverse-danger btn-icon" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $product->id }}">
                            <i class="mdi mdi-delete"></i>
                        </button>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Bạn có chắc chắn xóa {{ $product->name }} !
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <a href="">
                                    <button type="button" class="btn btn-primary">Xóa</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <ul class="d-flex justify-content-end mt-2">
                {!! $products->links() !!}
            </ul>
        @endif
    </tbody>
</table>

<div class="mb-2">
    <div class="row">
        <div class="col">
            <a href="{{ route('product.create') }}" class="btn btn-inverse-primary btn-sm mb-1 "><i
                    class="mdi mdi-account-plus"></i>Thêm mới Sản Phẩm</a>
        </div>
        <div class="col-lg-6 ">
            <div class="d-flex">
                <div class="input-group me-1 ">
                    <select class="form-control" id="exampleFormControlSelect2">
                        <option value="">Nhóm Danh mục</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group input-group-sm  ">
                    <input type="text" class="form-control"
                        placeholder="Nhập từ khóa tìm kiếm"aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary btn-gradient-danger"
                        type="button"id="button-addon2">Button</button>
                </div>
            </div>
        </div>
    </div>
    <select type="submit" class="form-control " id="exampleFormControlSelect2">
        @for ($i = 20; $i <= 50; $i += 10)
            <option>{{ $i }} bản ghi</option>
        @endfor
    </select>
</div>

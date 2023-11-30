<div class="mb-2">
    <div class="row">
        <div class="col">
            <button data-bs-toggle="modal" data-bs-target="#exampleModalCreate"
                class="btn btn-inverse-primary btn-sm mb-1 "><i class="mdi mdi-account-plus"></i>Thêm mới danh
                mục</button>
        </div>
        <div class="col-lg-6 ">
            <div class="d-flex">
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
<!-- Modal -->
<div class="modal fade" id="exampleModalCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm Danh Mục</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr>
            <div class="modal-body">
                <form class="forms-sample" method="POST" action="{{route('category.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Tên danh mục</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên danh mục" name="name">
                        @error('name')
                            <span class="text-danger" style="font-size: 13px">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Mô tả</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Mô tả" name="description">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-gradient-primary">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

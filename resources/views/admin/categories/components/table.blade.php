<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>
                <input type="checkbox" name="" id="">
            </th>
            <th> Tên </th>
            <th> Mô tả </th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $key => $category)
            <tr>
                <td>{{ $key += 1 }}</td>
                <td><input type="checkbox" name="" id=""></td>
                <td>{{ $category->name }}</td>
                <td>{{$category->description}}</td>
                <td>
                    <button type="button" class="btn btn-inverse-info btn-icon" data-bs-toggle="modal"
                        data-bs-target="#exampleModalUpdate{{ $category->id }}">
                        <i class="mdi mdi-pencil-box"></i>
                    </button>
                    <button type="button" class="btn btn-inverse-danger btn-icon" data-bs-toggle="modal"
                        data-bs-target="#exampleModalDelete{{ $category->id }}">
                        <i class="mdi mdi-delete"></i>
                    </button>
                </td>
            </tr>
            <!-- Modal- update -->
            <div class="modal fade" id="exampleModalUpdate{{ $category->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sửa Danh mục</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <hr>
                        <div class="modal-body">
                            <form class="forms-sample" method="POST" action="{{route('category.update',[$category->id])}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Tên danh mục</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="name"
                                        value="{{ $category->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Mô tả</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" value="{{$category->description}}" name="description">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-secondary  me-2" data-bs-dismiss="modal">Đóng</button>
                                    <button type="submit" class="btn btn-gradient-primary">Sửa</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal - Delete -->
            <div class="modal fade" id="exampleModalDelete{{ $category->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">xóa Danh mục</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Bạn có chắc chắn xóa danh mục " <span class="text-danger">{{ $category->name }}</span> " !
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <a href="{{route('category.delete',[$category->id])}}">
                                <button type="button" class="btn btn-primary">Xóa</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </tbody>
</table>

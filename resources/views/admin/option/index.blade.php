<div class="page-header">
    <h3 class="page-title"> Quản lí Thuộc tính </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Quản lí Thuộc tính</li>
            <li class="breadcrumb-item"><a href="#">Danh sách Thuộc tính</a></li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-md-4 grid-margin stretch-card mt-4">
        <div class="col-lg-12">
            <h6 class="card-title ms-3">Thêm mới thuộc tính</h6>
            <form class="forms-sample p-3" action="{{ route('option.store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputUsername2" name="name"
                            placeholder="Tên thuộc tính">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-9">
                        <select class="form-control form-control-sm" name="visual">
                            <option value="">--Chọn--</option>
                            <option value="text">Text</option>
                            <option value="color">Color</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-primary btn-sm">Thêm mới</button>
            </form>
        </div>
    </div>
    <div class="col-md-7 offset-md-1">
        <div class="card">
            <div class="card-body">
                <h4>Thông tin thuộc tính</h4>
                <table class="table col-md-6 ">
                    @foreach ($option as $key => $op)
                        <thead>
                            <tr>
                                <th scope="col">{{ $op->name }}</th>
                                <th colspan="2">{{ $op->visual }}</th>
                                <td>
                                    <button type="button" class="btn btn-link p-0" data-bs-toggle="modal"
                                        data-bs-target="#createOptionValue{{ $op->id }}">
                                        Thêm chủng loại
                                    </button>
                                </td>
                                <th>
                                    <button type="button" class="btn btn-inverse-info btn-icon" data-bs-toggle="modal"
                                        data-bs-target="#updateOption{{ $op->id }}">
                                        <i class="mdi mdi-pencil-box"></i>
                                    </button>
                                    <button type="button" class="btn btn-inverse-danger btn-icon" data-bs-toggle="modal"
                                        data-bs-target="#deleteOption{{ $op->id }}">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </th>
                            </tr>
                            <!-- Modal create optionvalues-->
                            <div class="modal fade" id="createOptionValue{{ $op->id }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Thêm chủng loại
                                                {{ $op->name }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="forms-sample " action="{{ route('optionValues.store') }}"
                                                method="POST">
                                                @csrf
                                                <div class="form-group ">
                                                    <input type="hidden" value="{{ $op->id }}" name="option_id">
                                                    @if ($op->visual == 'color')
                                                        <label for="" class="form-group">Chọn màu</label>
                                                        <input type="color" class="form-control border-primary"
                                                            name="value">
                                                    @elseif($op->visual == 'text')
                                                        <label for="" class="form-group">Tên chủng loại</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleInputUsername2" name="value"
                                                            placeholder="Tên chủng loại">
                                                    @endif
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-gradient-primary ">Thêm
                                                        mới</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- modal update Option  --}}
                            <div class="modal fade" id="updateOption{{ $op->id }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Sửa Thuộc Tính
                                                {{ $op->name }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="forms-sample " action="{{ route('option.update',[$op->id]) }}"
                                                method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="">Tên thuộc tính</label>
                                                    <input type="text" class="form-control"
                                                        id="exampleInputUsername2" name="name"
                                                        placeholder="Tên thuộc tính">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Chọn loại thuộc tính </label>
                                                    <select class="form-control form-control-sm" name="visual">
                                                        <option value="">--Chọn--</option>
                                                        <option value="text">Text</option>
                                                        <option value="color">Color</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-gradient-primary ">Sửa</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Modal delete option --}}
                            <div class="modal fade" id="deleteOption{{ $op->id }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Thông báo</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn có chắc chắn xóa thuộc tính <span class="text-danger">{{$op->name}}</span> ?
                                        </div>
                                        <div class="modal-footer">
                                            <a href="{{route('option.delete',[$op->id])}}" class="btn btn-gradient-primary ">Xóa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </thead>
                        <tbody>
                            @php
                                $optionValue = $op->optionValues;
                            @endphp
                            @foreach ($optionValue as $opV)
                                <tr>
                                    <td></td>
                                    <td colspan="2">- {{ $opV->value }}</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                            Sửa
                                        </button>
                                        <button type="button" class="btn btn-outline-danger btn-rounded btn-icon">
                                            Xóa
                                        </button>
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

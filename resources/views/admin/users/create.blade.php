<div class="page-header">
    <h3 class="page-title"> Quản lí thành viên </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Quản lí thành viên</li>
            <li class="breadcrumb-item"><a href="#">Thêm thành viên</a></li>
        </ol>
    </nav>
</div>

<form class="forms-sample" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-5 mt-4">
            <h5>Thông tin chung</h5>
            <p class="text-secondary">- Nhập thông tin người sử dụng</p>
            <p class="text-secondary">- Lưu ý: Những trường đánh dấu <span class="text-danger">(*)</span> là bắt buộc
            </p>
        </div>
        <div class="col-lg-7 grid-margin stretch-card">
            <div class="card col">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col">
                            <label for="exampleInputUsername1">Họ tên <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control form-control-sm" name="name" value="{{old('name')}}"
                                placeholder="Họ và tên">
                            @error('name')
                                <span style="font-size: 13px" class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputEmail1">Email <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" value="{{old('email')}}"
                                name="email" placeholder="Email">
                            @if ($errors->has('email'))
                                <span style="font-size: 13px" class="text-danger"> {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="exampleInputUsername1">Nhóm thành viên <span
                                    class="text-danger">(*)</span></label>
                            <select class="form-control form-control-sm" name="role_id">
                                <option value="">Chọn nhóm thành viên</option>
                                <option value="0">Quản trị viên</option>
                                <option value="1">Cộng tác viên viên</option>
                            </select>
                            @if ($errors->has('role_id'))
                                <span style="font-size: 13px" class="text-danger">
                                    {{ $errors->first('role_id') }}</span>
                            @endif
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputEmail1">Ngày sinh <span class="text-danger">(*)</span></label>
                            <input type="date" class="form-control form-control-sm" name="birthday" >
                            @error('birthday')
                                <span style="font-size: 13px" class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="exampleInputPassword1">Password <span class="text-danger">(*)</span></label>
                            <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" 
                                name="password" placeholder="Password">
                            @error('password')
                                <span style="font-size: 13px" class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputConfirmPassword1">Confirm Password <span
                                    class="text-danger">(*)</span></label>
                            <input type="password" class="form-control form-control-sm" name="confirm_password"
                                id="exampleInputConfirmPassword1" placeholder="Password">
                            @error('confirm_password')
                                <span style="font-size: 13px" class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh đại diện </label>
                        <input type="file" class="form-control " name="avata">
                        @error('avata')
                            <span style="font-size: 13px" class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 mt-4">
            <h5>Thông tin liên hệ</h5>
            <p class="text-secondary">- Nhập thông tin liên hệ người sử dụng</p>
        </div>
        <div class="col-lg-7 grid-margin stretch-card">
            <div class="card col">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col">
                            <label for="exampleInputUsername1">Số điện thoại <span
                                    class="text-danger">(*)</span></label>
                            <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" value="{{old('phone')}}"
                                name="phone" placeholder="Số điện thoại">
                            @error('phone')
                                <span style="font-size: 13px" class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputEmail1">Địa chỉ <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" value="{{old('address')}}"
                                name="address" placeholder="Địa chỉ">
                            @error('address')
                                <span style="font-size: 13px" class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giới thiệu</label>
                        <textarea name="introduce"  class="form-control" id="" cols="30" rows="5">{{old('introduce')}}</textarea>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
        <a href="{{ route('user.index') }}" class="btn btn-light">Cancel</a>
    </div>
</form>
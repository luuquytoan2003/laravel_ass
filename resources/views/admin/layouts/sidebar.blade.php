<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dasboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#user" aria-expanded="false"
                aria-controls="user">
                <span class="menu-title">Quản lí thành viên</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account menu-icon"></i>
            </a>
            <div class="collapse" id="user">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('user.index') }}">Thành viên</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Nhóm thành viên</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#product" aria-expanded="false"
                aria-controls="product">
                <span class="menu-title">Quản lí Sản phẩm</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-table menu-icon"></i>
            </a>
            <div class="collapse" id="product">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('product.index') }}">Tất cả sản phẩm</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Thêm sản phẩm</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('option.index')}}">Thuộc tính</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('category.index') }}">Danh mục</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <span class="menu-title">title</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>

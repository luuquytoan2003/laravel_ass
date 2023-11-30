<div class="page-header">
    <h3 class="page-title"> Quản Lí Danh Mục</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Quản lí danh mục</li>
            <li class="breadcrumb-item"><a href="#">Danh sách Danh mục</a></li>
        </ol>
    </nav>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">DANH SÁCH SẢN PHẨM</h4>
            {{-- toolbox --}}
            @include('admin.categories.components.toolbox')
            
            @include('admin.categories.components.table')
        </div>
    </div>
</div>
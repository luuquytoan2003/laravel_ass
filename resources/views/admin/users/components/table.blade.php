<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>
                <input type="checkbox" name="" id="">
            </th>
            <th> Họ tên </th>
            <th> Email </th>
            <th> Số điện thoại </th>
            <th> Trạng thái </th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $key => $user)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>
                    <input type="checkbox" name="" id="">
                </td>
                <td class="">
                    {{ $user->name }}
                </td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
                <td>
                    <a href="{{ route('user.edit', [$user->id]) }}" class="btn btn-inverse-info btn-icon"><button
                            type="button" class="btn btn-inverse-info btn-icon">
                            <i class="mdi mdi-pencil-box"></i>
                        </button>
                    </a>
                    <button type="button" class="btn btn-inverse-danger btn-icon" data-bs-toggle="modal"
                        data-bs-target="#exampleModal{{$user->id}}">
                        <i class="mdi mdi-delete"></i>
                    </button>
                </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Bạn có chắc chắn xóa {{ $user->name }} !
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <a href="{{ route('user.delete', [$user->id]) }}">
                                <button type="button" class="btn btn-primary">Xóa</button></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </tbody>
</table>
<ul class="d-flex justify-content-end mt-2">
    {!! $users->links() !!}
</ul>

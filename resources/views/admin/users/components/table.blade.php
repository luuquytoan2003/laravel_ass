<table class="table table-striped table-bordered">
                <thead>
                    <tr>
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
                    @foreach ($users as $user)
                        <tr>
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
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-inverse-info btn-icon">
                                    <i class="mdi mdi-pencil-box"></i>
                                </button>
                                <button type="button" class="btn btn-inverse-danger btn-icon">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <ul class="d-flex justify-content-end mt-2">
                {!! $users->links() !!}
            </ul>
@foreach ($option as $key => $option)
<h5>{{$option->name}}</h5>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>
                    <input type="checkbox" name="" id="">
                </th>
                <th> Tên </th>
                <th> Loại </th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($collection as $item)
                
            @endforeach --}}
        </tbody>
    </table>
@endforeach

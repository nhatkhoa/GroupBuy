@extends('admin')

@section('content')

    <table class="table table-hover">
        <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>Nhà cung cấp</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th><a href="/admin/partners/create" class="btn btn-success btn-sm pull-right">Thêm Mới</a></th>

        </tr>
        </thead>
        <tbody>
        @foreach($partners as $partner)
            <tr>
                <th scope="row">{{$partner->id}}</th>
                <td>{{$partner->company_name}}</td>
                <td>{{$partner->email}}</td>
                <td>{{$partner->address}}</td>
                <td>{{$partner->phone_number}}</td>

                <td>
                    <div class="pull-right">
                        {!! Form::open(['method' => 'DELETE', 'url' => '/admin/partners/'.$partner->id]) !!}
                        {!! Form::submit('Xóa', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </div>

                    <div class="pull-right">
                        <a href="/admin/partners/{{$partner->id}}/edit" class="btn btn-primary btn-sm">Chỉnh Sửa</a>
                        |&nbsp;
                    </div>


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@stop
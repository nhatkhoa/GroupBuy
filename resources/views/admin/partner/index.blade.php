@extends('admin')

@section('content')

    <table class="bordered highlight responsive-table">
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
                        <form action="/admin/partners/{!!  $partner->id!!}" method="DELETE">
                            {!! csrf_field() !!}
                            <button type="submit" class="btn btn-floating red"><i class="material-icons">cancel</i></button>
                        </form>
                    </div>

                    <div class="pull-right">
                        <a href="/admin/partners/{{$partner->id}}/edit" class="btn btn-floating green"><i class="material-icons">edit</i></a>
                        |&nbsp;
                    </div>


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@stop
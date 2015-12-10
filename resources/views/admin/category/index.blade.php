@extends('admin')

@section('content')

    <table class="table table-hover">
        <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>Tên</th>
            <th>Danh Mục Cha</th>
            <th><a href="/admin/categories/create" class="btn btn-success btn-sm pull-right">Thêm Mới</a></th>

        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->parent_id == null ? 'Chính' : $category->parent()->first()->name}}</td>
                <td>
                    <div class="pull-right">
                        {!! Form::open(['method' => 'DELETE', 'url' => '/admin/categories/'.$category->id]) !!}
                        {!! Form::submit('Xóa', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </div>

                    <div class="pull-right">
                        <a href="/admin/categories/{{$category->id}}/edit" class="btn btn-primary btn-sm">Chỉnh Sửa</a>
                        |&nbsp;
                    </div>
                    <div class="pull-right">
                        <a href="/admin/categories/{{$category->id}}/edit" class="btn btn-primary btn-sm">Chỉnh Sửa</a>
                        |&nbsp;
                    </div>


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@stop
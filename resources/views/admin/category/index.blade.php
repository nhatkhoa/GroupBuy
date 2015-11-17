@extends('admin')
@section('sidebar')


    <div class="list-group">
        <a href="#" class="list-group-item active">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
        <a href="#" class="list-group-item">Link</a>
    </div>
@stop
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
                <th scope="row">1</th>
                <td>{{$category->name}}</td>
                <td>{{$category->parent_id == null ? 'Chính' : $category->parent()->name}}</td>
                <td>
                    <div class="pull-right">
                        <a href="/admin/categories/edit/{{$category->id}}" class="btn btn-primary btn-sm">Chỉnh Sửa</a>
                    </div>

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>


@stop
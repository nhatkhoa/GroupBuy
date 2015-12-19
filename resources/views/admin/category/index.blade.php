@extends('admin')

@section('content')

    <table class="bordered highlight responsive-table">
        <thead>
        <tr>
            <th>#</th>
            <th></th>
            <th>Tên</th>
            <th>Danh Mục Cha</th>
            <th><a href="/admin/categories/create" class="btn btn-success btn-sm pull-right">Thêm Mới</a></th>

        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <th scope="row"><i class="fa fa-{{$category->icon}}"></i></th>
                <td>{{$category->name}}</td>
                <td>{{$category->parent_id == null ? 'Chính' : $category->parent()->first()->name}}</td>
                <td>
                    <div class="pull-right">
                        <form action="/admin/categories/{!! $category->id !!}" method="POST">
                            {!! csrf_field() !!}
                            <button type="submit" class="btn btn-floating red"><i class="material-icons">cancel</i></button>
                        </form>
                    </div>

                    <div class="pull-right">
                        <a href="/admin/categories/{{$category->id}}/edit" class="btn btn-floating green"><i class="material-icons">edit</i></a>
                        |&nbsp;
                    </div>



                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@stop

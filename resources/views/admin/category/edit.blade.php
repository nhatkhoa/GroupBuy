@extends('admin')
@section('content')

    {!! Form::open(['url' => '/admin/categories', 'class' => 'form-control container']) !!}
    <p>
        {!! Form::label('name', 'Tên danh mục')!!}
        {!! Form::text('name', $category->name, ['class' => 'form-control']) !!}
    </p>
    <div class="row">
        <p class="col-sm-6">
            {!! Form::label('parent_id','Thuộc nhánh') !!}
            {!! Form::select('parent_id', $categories , $category->parent_id, ['placeholder' => 'Chọn nhánh cha...', 'class' => 'form-control']) !!}
        </p>

        <p class="col-sm-6">
        {!! Form::label('publish','Trạng Thái') !!}
        <label class="btn-group" data-toggle="buttons">
            <label class="btn btn-success-outline">
                <input type="checkbox" name="publish" autocomplete="off"> Kích hoạt danh mục
            </label>

        </label>
        </p>

    </div>
    <p class="row">
    <div class="col-sm-6">
        {!! Form::button('Hủy bỏ', ['class' => 'btn btn-default btn-block']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::submit('Thêm mới', ['class' => 'btn btn-primary btn-block']) !!}
    </div>


    </p>
    {!! Form::close() !!}
@stop
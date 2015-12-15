@extends('admin')

@section('heading')
    <h3>Tạo Danh Mục Mới</h3>
    @stop

@section('content')

    {!! Form::open(['url' => '/admin/categories', 'class' => 'form-control container']) !!}
    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="name"/>
            <label for="name">Tên Danh Mục</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="icon"/>
            <label for="icon">Icon Đại Diện</label>
        </div>

        <div class="input-field col s12">
            {!! Form::select('parent_id', $categories , null, ['placeholder' => 'Chọn nhánh cha...']) !!}
            <label for="partner_id">Danh Mục Cha</label>
        </div>

        <div class="col s12">
            <div class="switch ">
                <label>
                    Ẩn Danh Mục
                    <input name="publish" type="checkbox" checked>
                    <span class="lever"></span>
                    Hiển Thị Danh Mục Này
                </label>
            </div>
        </div>

    </div>

    <div class="divider"></div>

    <div class="row">
        <div class="col">
            <button type="submit" class="waves-effect waves-light btn right">
                <i class="material-icons left">check</i>
                Tạo Danh Mục
            </button>
        </div>
    </div>

    {!! Form::close() !!}
@stop
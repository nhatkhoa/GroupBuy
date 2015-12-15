@extends('admin')

@section('heading')

    <h3>Quản Lý Hình Ảnh Sản Phẩm</h3>


@stop

@section('content')

    <div class="row">
        @foreach($images as $image)
            @include('admin.image.item', ['image' => $image])
        @endforeach
    </div>

@stop
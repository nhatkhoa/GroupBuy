@extends('admin')

@section('heading')

    <h3>Quản lý sản phẩm</h3>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a href="/admin/deals/create" class="btn-floating btn-large green">
            <i class="large material-icons ">add</i>
        </a>
    </div>

@stop

@section('content')

    <table class="bordered highlight responsive-table">
        <thead>
        <tr>
            <th>#</th>
            <th>Tên Sản Phẩm</th>
            <th>Danh Mục</th>
            <th>Thời Hạn</th>
            <th>Yêu Cầu</th>
            <th>Trong Kho</th>
            <th>Giá Gốc</th>

        </tr>
        </thead>
        <tbody>
        @foreach($deals as $deal)
            <tr>
                <th scope="row">{{$deal->id}}</th>
                <td>{{$deal->name}}</td>
                <td>{{$deal->category()->get()->first() != null ? $deal->category()->get()->first()->name : 'Không có'}}</td>
                <td>{{$deal->time_expired->format('d/m/Y')}}</td>
                <td>{{'0/'.$deal->deal_amount}}</td>
                <td>{{$deal->stock}}</td>
                <td>{{number_format($deal->list_price, 3, '.', '.')}} VNĐ</td>
                <td>
                    <button type="submit" class="btn green"><i class="material-icons ">image</i></button>
                </td>
                <td>
                    <button class="btn"><i class="material-icons ">edit</i></button>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'url' => '/admin/deals/'.$deal->id]) !!}
                    <button type="submit" class="btn red"><i class="material-icons ">cancel</i></button>
                    {!! Form::close() !!}
                </td>

            </tr>
            </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination center">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>


@stop
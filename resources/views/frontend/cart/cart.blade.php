@extends('frontend')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <table class="table cart-table">
                <thead>
                <tr>
                    <th>Sản Phẩm</th>
                    <th>Tên</th>
                    <th>Số Lượng</th>
                    <th>Đơn Giá</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach(Cart::getContent()->all() as $cart)
                    @include('frontend.cart.item', ['cart' => $cart])
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <ul class="cart-total-list">
                <li><span>Tổng tiền</span><span>{!!number_format(Cart::getSubTotal(), 3, '.', '.')!!}đ</span>
                </li>
                <li><span>Giao hàng</span><span>0.000đ</span>
                </li>
                <li><span>Thuế</span><span>0.000đ</span>
                </li>
                <li><span>Thành tiền</span><span>{!!number_format(Cart::getTotal(), 3, '.', '.')!!}đ</span>
                </li>
            </ul>
            <a href="/thanh-toan" class="btn btn-primary btn-lg">Thanh Toán</a>
        </div>
    </div>

@stop

@extends('frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="sidebar-left">
                    <div class="box clearfix">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Sản Phẩm</th>
                                <th>Số Lượng</th>
                                <th>Đơn Giá</th>
                            </tr>
                            </thead>
                            <tbody>
                           @foreach(Cart::getContent() as $cart)
                               <tr>
                                   <td>{!! $cart->name !!}</td>
                                   <td>{!! $cart->quantity !!}</td>
                                   <td>{!!number_format($cart->price, 3, '.', '.')!!}đ</td>
                               </tr>
                           @endforeach

                            </tbody>
                        </table>
                        <ul class="cart-total-list text-center mb0">
                            <li><span>Tổng Tiền</span><span>{!!number_format(Cart::getSubTotal(), 3, '.', '.')!!}đ</span>
                            </li>
                            <li><span>Giao Hàng</span><span>0.000đ</span>
                            </li>
                            <li><span>Thuế</span><span>0.000đ</span>
                            </li>
                            <li><span>Thành Tiền</span><span>{!!number_format(Cart::getTotal(), 3, '.', '.')!!}đ</span>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-md-8">
                <p class="mb20"><a href="#">Đăng Nhập</a> hoặc <a href="#">Đăng Ký</a> để nhanh chóng hơn.</p>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Giao hàng & Nhận tiền</h3>
                        <form action="/thanh-toan" method="POST">
                            <!-- <legend>Personal Information</legend> -->
                            <div class="form-group">
                                <label for="">Họ tên đầy đủ</label>
                                <input type="text" name="fullname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Điện thoại liên hệ</label>
                                <input type="text" name="phone" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>

                            <legend>Địa chỉ nhận hàng</legend>
                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Ghi Chú</label>
                                <textarea name="noted" class="form-control">
                                    </textarea>
                            </div>

                            <input type="submit" class="btn btn-primary" value="Xác Nhận">
                            <input type="hidden" name="shipped" value="false"/>
                        </form>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <h3>Thanh toán qua Paypal</h3>
                        <p>Chú ý: Bạn sẽ được chuyển qua website của Paypal để tiếp tục quá trình thanh toán.</p>
                        <a href="#" class="btn btn-primary">Chấp Nhận Thanh Toán Paypal</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>
    </div>

@stop

@extends('frontend')

@section('top-area')

@stop

@section('content')

<div>

    <h3>Thành Viên Đăng Nhập</h3>
    <h5>Để sử dụng được hết chức năng vui lòng đăng nhập</h5>

    <form id="loginForm" class="dialog-form" action="/auth/login" method="POST">
        {!! csrf_field() !!}
        <div class="form-group">
            <label>E-mail</label>
            <input id="email" name="email" type="text" placeholder="email@domain.com" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label>Mật Khẩu</label>
            <input id="password" name="password" type="password" placeholder="Mật khẩu của bạn ..." class="form-control">
        </div>
        <div class="checkbox">
            <label>
                <input name="remember" type="checkbox">Ghi nhớ
            </label>
        </div>
        <button type="submit"class="btn btn-primary">Đăng Nhập</button>
    </form>
    <ul class="dialog-alt-links">
        <li><a href="/dang-ky" data-effect="mfp-zoom-out">Chưa có tài khoản?</a>
        </li>
        <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Quên mật khẩu?</a>
        </li>
    </ul>
</div>

@stop
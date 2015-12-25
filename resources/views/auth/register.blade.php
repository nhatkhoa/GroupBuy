@extends('frontend')

@section('top-area')

@stop

@section('content')


    <div>

        <h3>Đăng Ký Thành Viên</h3>
        <h5>Hãy cùng tham gia với chúng tôi bạn nhé!</h5>

        <form class="dialog-form" method="POST" action="/auth/register">
            {!! csrf_field() !!}
            <div class="form-group">
                <label>Tên của bạn</label>
                <input name="name" type="text" placeholder="Nhập tên đại diện" class="form-control">
            </div>

            <div class="form-group">
                <label>E-mail</label>
                <input name="email" type="text" placeholder="email@domain.com" class="form-control">
            </div>
            <div class="form-group">
                <label>Mật Khẩu</label>
                <input name="password" type="password" placeholder="Mật khẩu của bạn" class="form-control">
            </div>
            <div class="form-group">
                <label>Nhập Lại Mật Khẩu</label>
                <input name="password_confirmation" type="password" placeholder="Nhập lại mật khẩu trên" class="form-control">
            </div>
            <button id="login" type="submit" class="btn btn-primary">Đăng Ký</button>
        </form>
        @if(count($errors->all()) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <ul class="dialog-alt-links">
            <li><a href="/dang-nhap">Đã có tài khoản?</a>
            </li>
        </ul>

    </div>


@stop
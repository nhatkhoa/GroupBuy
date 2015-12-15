<!-- LOGIN REGISTER LINKS CONTENT -->
<div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="fa fa-sign-in dialog-icon"></i>

    <h3>Thành Viên Đăng Nhập</h3>
    <h5>Để sử dụng được hết chức năng vui lòng đăng nhập</h5>

    <form id="loginForm" class="dialog-form">
        {!! csrf_field() !!}
        <div class="form-group">
            <label>E-mail</label>
            <input name="email" type="text" placeholder="email@domain.com" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label>Mật Khẩu</label>
            <input name="password" type="password" placeholder="Mật khẩu của bạn ..." class="form-control">
        </div>
        <div class="checkbox">
            <label>
                <input name="remember" type="checkbox">Ghi nhớ
            </label>
        </div>
        <a id="loginButton" href="javascript:void(0)" class="btn btn-primary">Đăng Nhập</a>
    </form>
    <ul class="dialog-alt-links">
        <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Chưa có tài khoản?</a>
        </li>
        <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Quên mật khẩu?</a>
        </li>
    </ul>
</div>

<div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="fa fa-edit dialog-icon"></i>

    <h3>Đăng Ký Thành Viên</h3>
    <h5>Hãy cùng tham gia với chúng tôi bạn nhé!</h5>

    <div class="dialog-form" method="GET" action="/auth/register">
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
        <button id="login" type="submit" value="Đăng Ký" class="btn btn-primary"></button>>
    </div>
    <ul class="dialog-alt-links">
        <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Đã có tài khoản?</a>
        </li>
    </ul>
</div>

<div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="icon-retweet dialog-icon"></i>

    <h3>Password Recovery</h3>
    <h5>Fortgot your password? Don't worry we can deal with it</h5>

    <form class="dialog-form">
        <label>E-mail</label>
        <input type="text" placeholder="email@domain.com" class="span12">
        <input type="submit" value="Request new password" class="btn btn-primary">
    </form>
</div>

<script>
    $(document).ready(function(){
        $('#loginButton').click(function(e){
            e.preventDefault();
            console.log('asdadasda Login');
            var loginForm = $("#loginForm");
            var formData = loginForm.serialize();

            $.ajax({
                url:'/auth/login',
                type:'POST',
                data:formData,
                success:function(data){
                    console.log(data);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
    });
</script>
<!-- END LOGIN REGISTER LINKS CONTENT -->
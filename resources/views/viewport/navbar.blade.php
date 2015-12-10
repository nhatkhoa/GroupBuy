<div class="top-main-area text-center">
    <div class="container">
        <a href="index.html" class="logo mt5">
            <img src="/img/logo-small-dark.png" alt="Image Alternative text" title="Image Title"/>
        </a>
    </div>
</div>
<header class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="index.html" class="logo">
                    <img src="/img/logo-small.png" alt="Image Alternative text" title="Image Title"/>
                </a>
            </div>
            <div class="col-md-6">
                <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                <nav>
                    <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                        <li><a href="/">Trang Chủ</a>
                        </li>
                        @foreach($categories as $category)
                            @if($category->parent_id == null)
                                <li><a href="/danh-muc/{!! $category->id !!}/">{!! $category->name !!}</a>
                                    @if($category->childs()->count() != 0)
                                        <ul>
                                            @foreach($category->childs()->get() as $child)
                                                <li><a href="/danh-muc/{!! $child->id !!}/"><i class="fa fa-{!! $child->icon !!}"></i> {!! $child->name !!}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>

                            @endif
                        @endforeach
                        <li><a href="features-typography.html">Top Deal</a>
                            <ul>
                                <li><a href="features-typography.html">Deal Được Mua Nhiều Nhất</a>
                                <li><a href="features-typography.html">Deal Sắp Kết Thúc</a>
                                <li><a href="features-typography.html">Deal Khuyến Mãi</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-4">
                <ul class="login-register">
                    @include('viewport.cart')
                    <li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i
                                    class="fa fa-sign-in"></i>Đăng Nhập</a>
                    </li>
                    <li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i
                                    class="fa fa-edit"></i>Đăng Kí</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- LOGIN REGISTER LINKS CONTENT -->
<div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="fa fa-sign-in dialog-icon"></i>

    <h3>Member Login</h3>
    <h5>Welcome back, friend. Login to get started</h5>

    <form class="dialog-form">
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" placeholder="email@domain.com" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="My secret password" class="form-control">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox">Remember me
            </label>
        </div>
        <input type="submit" value="Sign in" class="btn btn-primary">
    </form>
    <ul class="dialog-alt-links">
        <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
        </li>
        <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
        </li>
    </ul>
</div>

<div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="fa fa-edit dialog-icon"></i>

    <h3>Member Register</h3>
    <h5>Ready to get best offers? Let's get started!</h5>

    <form class="dialog-form">
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" placeholder="email@domain.com" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="My secret password" class="form-control">
        </div>
        <div class="form-group">
            <label>Repeat Password</label>
            <input type="password" placeholder="Type your password again" class="form-control">
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>Your Area</label>
                    <input type="password" placeholder="Boston" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Postal/Zip</label>
                    <input type="password" placeholder="12345" class="form-control">
                </div>
            </div>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox">Get hot offers via e-mail
            </label>
        </div>
        <input type="submit" value="Sign up" class="btn btn-primary">
    </form>
    <ul class="dialog-alt-links">
        <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Already member</a>
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
<!-- END LOGIN REGISTER LINKS CONTENT -->

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
@include('viewport.account')

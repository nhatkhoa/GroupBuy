<div class="product-page-meta box">
    <h4>{!! $deal->name!!}</h4>
    <p>{!! $deal->short_description !!}</p>
    <form action="/san-pham/{!! $deal->id !!}" method="POST">
        @unless($deal->time_expired < Carbon\Carbon::now())
            @if(!Auth::check() || (Auth::user() != null && Auth::user()->admin == false))
        <button type="submit "id="{!! $deal->id !!}" class="btn btn-primary btn-lg btn-block buy-button ">Mua Ngay <span class="badge">{!! Cart::get($deal->id) != null ?   Cart::get($deal->id)->quantity : ''!!}</span> </button>
            @endif
                @endunless
    </form>
    <ul class="list product-page-meta-info">
        <li>
            <ul class="list product-page-meta-price-list">
                <li><span class="product-page-meta-title">Giá Gốc</span><span class="product-page-meta-price">{!!number_format($deal->list_price, 3, '.', '.')!!}đ</span>
                </li>
                <li class="pull-right"><span class="product-page-meta-title">Giá giảm</span><span class="product-page-meta-price">{!!100 - round($deal->deal_price/$deal->list_price*100) !!}%</span>
                </li>
            </ul>
        </li>
        <li>
            <ul class="list product-page-meta-price-list">
                <li><span class="product-page-meta-title">Giá Mua Chung</span><h1 class="center-align">{!!number_format($deal->deal_price, 3, '.', '.')!!}đ</h1>
                </li>

            </ul>
        </li>
        <li><span class="product-page-meta-title">Thời gian còn lại</span>

            @if($deal->time_expired < Carbon\Carbon::now())
                <br/>
                    <h4><Strong>Hết hạn rồi!</Strong></h4>
            @else
            <!-- COUNTDOWN -->
            <div data-countdown="{!! $deal->time_expired !!}" class="countdown countdown-inline"></div>
            @endif
        </li>
        <li><span class="product-page-meta-title">5000+ người mua</span>
        </li>
    </ul>
</div>
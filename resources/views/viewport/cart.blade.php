<li class="shopping-cart shopping-cart-white"><a href="/gio-hang"><i
                class="fa fa-shopping-cart"></i>Giỏ Hàng</a>

    <div class="shopping-cart-box">
        <ul class="shopping-cart-items">
            @foreach(Cart::getContent()->all() as $cart)
                <li>
                    <a href="/san-pham/{!! $cart->id !!}">
                        <img src="{!!  $cart->thumb != null ? $cart->thumb : '/img/70x70.png' !!}" alt="Image Alternative text" title="AMaze"/>
                        <h5>{!! $cart->name !!}</h5>
                        <span class="shopping-cart-item-price">{!! $cart->price !!}</span>
                    </a>
                </li>
            @endforeach

        </ul>
        <ul class="list-inline text-center">
            <a href="/gio-hang" class="btn btn-primary"> Xem Giỏ Hàng</a>
        </ul>
    </div>
</li>
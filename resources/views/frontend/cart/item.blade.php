<tr>
    <td class="cart-item-image">
        <a href="#">
            <img src="{!! $cart->attributes->thumb !!}" alt="Image Alternative text" title="AMaze">
        </a>
    </td>
    <td><a href="#">{!! $cart->name !!}</a>
    </td>
    <td class="cart-item-quantity">
        <form action="/gio-hang/giam/{!! $cart->id !!}" method="POST">
            <button class="btn btn-default" type="submit"><i class="fa fa-minus cart-item-minus"></i></button>
        </form>
        <input type="text" name="cart-quantity" class="cart-quantity" value="{!! $cart->quantity !!}">

        <form action="/san-pham/{!! $cart->id !!}" method="POST">
            <button class="btn btn-default" type="submit"><i class="fa fa-plus cart-item-plus"></i></button>
        </form>
    </td>
    <td>{!!number_format($cart->price, 3, '.', '.')!!}đ</td>
    <td class="cart-item-remove">
        <form action="/gio-hang/{!! $cart->id !!}" method="POST">
            <button type="submit" class="btn btn-danger"> <span class="fa fa-times"></span></button>
        </form>
    </td>
</tr>
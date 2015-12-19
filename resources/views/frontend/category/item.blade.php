<?php
Carbon\Carbon::setLocale('vi');
?>
<a class="col-md-4" href="/san-pham/{!! $data->id !!}/"  data-toggle="tooltip" data-placement="top" title="{{ $data->short_description }}">
    <div class="product-thumb">
        <header class="product-header">
            <img src="{!! count($data->images()) != 0 ? $data->images()[0] : 'https://k12110323.herokuapp.com/img/800x600.png' !!}" alt="Image Alternative text" title="Ana 29"/>
        </header>
        <div class="product-inner">
            <h5 class="product-title">{!! $data->name !!}</h5>
            <div class="product-meta">
                <ul class="product-price-list">
                    <li><span class="product-price">{!!number_format($data->deal_price, 3, '.', '.')!!}đ</span>
                    </li>
                    <li><span class="product-old-price">{!!number_format($data->list_price, 3, '.', '.')!!}đ</span>
                    </li>

                </ul>
            </div>
            <p class="product-location">
                <span class="product-time"><i class="fa fa-clock-o"></i> Còn {!! $data->time_expired->diffForHumans() !!}</span>
            </p>
        </div>
    </div>
</a>

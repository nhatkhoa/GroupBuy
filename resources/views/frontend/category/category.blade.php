@extends('frontend')

@section('top-area')
@stop

@section('content')

    <div class="row">
        @include('frontend.category.sidebar')
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3">
                    <div class="product-sort">
                        <span class="product-sort-selected">Sắp xếp theo</span>
                        <a href="#" class="product-sort-order fa fa-angle-down"></a>
                        <ul>
                            <li><a href="./?sort=price">Xếp theo giá</a>
                            </li>
                            <li><a href="./?sort=name">Xếp theo tên</a>
                            </li>
                            <li><a href="./?sort=date">Deal gần kết thúc</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-7">
                    <div class="product-view pull-right">
                        <a class="fa fa-th-large active" href="#"></a>
                        <a class="fa fa-list" href="category-page-thumbnails-coupon-horizontal.html"></a>
                    </div>
                </div>
            </div>
            <div class="row row-wrap">
                @foreach($products as $product)
                    @include('frontend.category.item', ['data' => $product])
                @endforeach

                </div>
            {!! $products->render() !!}
            <div class="gap"></div>
        </div>
    </div>

@stop

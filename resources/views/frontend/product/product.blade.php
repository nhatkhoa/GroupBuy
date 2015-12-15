@extends('frontend')

@section('content')

    <div class="row">
        <div class="col-md-3">
           @include('frontend.product.productmeta', ['deal', $deal])
        </div>
        <div class="col-md-9">
            @include('frontend.product.productimage', ['images' => $deal->images()])
            <div class="gap gap-small"></div>
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-tag"></i>Thông Tin Sản Phẩm</a>
                    </li>
                    <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-info"></i>Nhà Cung Cấp</a>
                    </li>
                    <li><a href="#tab-5" data-toggle="tab"><i class="fa fa-info"></i>Lưu Ý Mua Hàng</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-1">
                        @include('frontend.product.information')
                    </div>
                    <div class="tab-pane fade" id="tab-4">
                        @include('frontend.product.company', ['partner' => $deal->partner()->get()->first()])

                    </div>
                    <div class="tab-pane fade" id="tab-5">
                        @include('frontend.product.noted', ['deal' => $deal])

                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>


        </div>
    </div>


@stop

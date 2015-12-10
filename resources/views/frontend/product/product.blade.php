@extends('frontend')

@section('content')

    <div class="row">
        <div class="col-md-3">
           @include('frontend.product.productmeta', ['deal', $deal])
        </div>
        <div class="col-md-9">
            @include('frontend.product.productimage', ['deal', $deal])
            <div class="gap gap-small"></div>
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-tag"></i>Thông Tin Sản Phẩm</a>
                    </li>
                    <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-info"></i>Nhà Cung Cấp</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-1">
                        @include('frontend.product.information')
                    </div>
                    <div class="tab-pane fade" id="tab-4">
                        @include('frontend.product.company', ['partner' => $deal->partner()->get()->first()])

                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>


        </div>
    </div>


@stop

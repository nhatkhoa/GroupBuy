<?php

    function getActive($id){
        $currentRoute = Route::getCurrentRoute()->getParameter('category_id');
        if($id == $currentRoute)
            return 'active';
        return '';
    }
?>
<aside class="sidebar-left">
    <h3 class="mb20">Xem nhanh</h3>
    <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
        @foreach($categories as $category)
            <li class="{!! getActive($category->id) !!}"><a href="/danh-muc/{{$category->id}}/"><i class="fa fa-{!! $category->icon !!}"></i>{{$category->name}}<span>{!! $category->deals()->get()->count()  !!}</span></a>
            </li>
        @endforeach
    </ul>
</aside>
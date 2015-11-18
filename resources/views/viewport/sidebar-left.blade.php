
<aside class="sidebar-left">
    <h3 class="mb20">I am Looking For</h3>
    <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
        @foreach($categories as $category)
            <li><a href="/categories/{{$category->id}}"><i class="fa fa-home"></i>{{$category->name}}<span>2</span></a>
            </li>
        @endforeach
    </ul>
</aside>
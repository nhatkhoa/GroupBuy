<div class="row row-no-gutter scroll" id="popup-gallery">
    @foreach($images as $image)
        <div class="col-md-4">
            <!-- HOVER IMAGE -->
            <a class="hover-img popup-gallery-image" href="{!! $image !!}" data-effect="mfp-zoom-out">
                <img src="{!! $image !!}" alt="Image" /><i class="fa fa-resize-full hover-icon"></i>
            </a>
        </div>
    @endforeach

</div>
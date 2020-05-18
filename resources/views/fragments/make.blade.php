<section>
    <div class="cta cta-box-8 cta-bg-cover-green" data-parallax-type="down" data-parallax-img="media/images/cta_box/cta_box_image_2_1920x1246.jpg">
        <div class="cta-wrap">
            <div class="headline-8 text-center" data-animation="slideInDown">
                <i class="{{$make_dream->font}} h-white"></i>
                <h2 class="h-extra-large h-white">{{$make_dream->title}}</h2>
                <p class="h-white">{!! $make_dream->content!!}</p>
            </div>
            <div class="btn-wrap text-center" data-animation="slideInUp">
                @foreach($menus as $menu)
                    @if($menu->show)

                <a class="btn btn-bg-white btn-border-white btn-color-green hvr hvr-icon-back" href="{{$make_dream->btn_link}}">
                    <i style="margin-left: 5px" class="{{$menu->font}}"></i> {{$menu->title}}</a>


                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>

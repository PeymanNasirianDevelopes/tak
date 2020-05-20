<header dir="rtl">
    <div class="container container-relative">
        <!-- Menu wrapper element should has "x-menu-wrapper" class -->
        <div class="x-menu-wrapper clearfix">
            <!-- Logo -->
            <div class="logo"><a href="{{url("/")}}"><img src="{{asset("images/$logo->header_logo")}}" alt="Logo"></a></div>
            <!-- Toggle button -->
            <a class="x-menu-toggle toggle-right" href="javascript: void(0);"><span></span></a>
            <!-- Body of menu -->
            <ul class="x-menu">
                <li class="btn-wrapper">
                    <a class="icon-only" href="{{url("/")}}"><i class="icon-home icons h-green"></i> Home</a>
                </li>








                @foreach($menus as $menu)

                <li class="x-megamenu-wrapper">
                    <a href="">{{$menu->title}}</a>
                    <!-- Mega menu -->
                    <!-- Mega menu should has "x-megamenu" class -->
                    <div style="text-align: right;" class="x-megamenu">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="small-icons">
                                        <img src="{{asset("images/$menu->image")}}" />
                                    </div>
                                </div><!-- /.col -->
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="small-icons">
                                    </div>
                                </div><!-- /.col -->
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="small-icons">
                                    </div>
                                </div><!-- /.col -->
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="small-icons">
                                       @foreach($menu->sub_menus as $submenu)
                                        <div class="social-links"><a href="{{$submenu->link}}">{{$submenu->title}}</a></div>
                                        @endforeach
                                    </div>
                                </div><!-- /.col -->
                            </div>
                        </div>
                    </div>
                    <!-- #end of mega menu -->
                </li>

                @endforeach



                <li class="btn-wrapper">
                    <a  href="{{url("/")}}"> ارتباط با ما</a>
                </li>
                <li class="btn-wrapper">
                    <a  href="{{url("/")}}"> درباره ما</a>
                </li>


            </ul>
        </div>
    </div>
</header>

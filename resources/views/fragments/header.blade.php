<header dir="rtl">
    <div class="container container-relative">
        <!-- Menu wrapper element should has "x-menu-wrapper" class -->
        <div class="x-menu-wrapper clearfix">
            <!-- Logo -->
            <div class="logo"><a href="http://raiseapp-html.themeapollo.com/index.html"><img src="{{asset("images/logo_gw_.png")}}" alt="Logo"></a></div>
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
                                        <div class="social-links"><a href="{{$submenu->link}}"><i class="icon-wrench icons"></i>{{$submenu->title}}</a></div>
                                        @endforeach
                                    </div>
                                </div><!-- /.col -->
                            </div>
                        </div>
                    </div>
                    <!-- #end of mega menu -->
                </li>

                @endforeach


                <li class="x-megamenu-wrapper">
                    <a href="">امور مشتریان</a>
                    <div style="text-align: right;" class="x-megamenu">
                        <div class="container-fluid">
                            <div class="row">
                                @foreach($menu_dives as $menu_div)
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="category-widget underline-list">
                                        <h5 class="bottom-gap-small">{{$menu_div->title}}</h5>
                                        @foreach($menu_div->sub_menus as $sub_menud)
                                        <div class="cate-item"><a href="{{$sub_menud->link}}">{{$sub_menud->title}}</a></div>
                                        @endforeach
                                </div><!-- /.category-widget -->
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </li>
                <li class="btn-wrapper">
                    <a class="icon-only" href="{{url("/")}}"> ارتباط با ما</a>
                </li>


            </ul>
        </div>
    </div>
</header>

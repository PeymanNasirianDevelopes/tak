@if(Auth::check())

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="{{asset(Auth::user()->image)  }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="جستجو">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">منو</li>
            <li class="active">
                <a href="{{url("app/cms/admin/admin")}}">
                    <i class="fa fa-dashboard"></i> <span>داشبرد</span>

                </a>

            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>منو</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('app/cms/admin/menus')}}"><i class="fa fa-circle-o"></i>مشاهده منو ها</a></li>
                    <li><a href="{{url('app/cms/admin/menus/create')}}"><i class="fa fa-circle-o"></i>ایجاد منو </a></li>


                </ul>
            </li>

            <li><a href="{{url('app/cms/admin/sliders')}}"><i class="fa fa-circle-o"></i>مشاهده اسلایدر</a></li>
            <li><a href="{{url('app/cms/admin/fonts')}}"><i class="fa fa-circle-o"></i>آیکون ها</a></li>
            <li><a href="{{url('app/cms/admin/about_us')}}"><i class="fa fa-circle-o"></i>درباره ما</a></li>
            <li><a href="{{url('app/cms/admin/feature')}}"><i class="fa fa-circle-o"></i>ویژگی ها</a></li>
            <li><a href="{{url('app/cms/admin/make_dream/1/edit')}}"><i class="fa fa-circle-o"></i> ویرایش midd</a></li>
            <li><a href="{{url('app/cms/admin/circle_counter')}}"><i class="fa fa-circle-o"></i> پیشرفت کار</a></li>



            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>پروژه ها</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('app/cms/admin/projects')}}"><i class="fa fa-circle-o"></i>مشاهده پروژه ها</a></li>
                    <li><a href="{{url('app/cms/admin/projects/create')}}"><i class="fa fa-circle-o"></i>ایجاد پروژه </a></li>


                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
@else
    <script>window.location = "/login";</script>
@endif

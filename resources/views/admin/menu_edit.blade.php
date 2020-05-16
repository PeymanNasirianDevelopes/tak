@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">
                @if($menu->id)
                    ویرایش منو
                @else
                ایجاد منو
                    @endif

            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
            <form action="{{url("app/cms/admin/menus/$menu->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($menu->id)
                    {{method_field("PUT")}}
                @endif

                <input type="hidden" name="id" value="{{$menu->id}}">
                <label>عنوان</label>
                <input class="form-control input-lg" name="title" type="text" placeholder="عنوان" value="{{$menu->title ?? old("title")}}">


                <br>
                <br>


                <label>دارای زیر منو</label>
                <label>
                    بله<input  @if($menu->class) checked @endif type="radio" name="submenu" value="1" class="flat-red" >
                </label>
                <label>
                    خیر   <input type="radio" name="submenu" value="0" class="flat-red" @if(!$menu->class) checked @endif >
                </label>
                <br/>
                <br/>
                <br/>



                <div class="form-group">
                    <label for="exampleInputFile">تصویر</label>
                    <input name="main_image" type="file" value="{{ $menu->image ?? old("main_image")}}" id="exampleInputFile">
                    @if($menu->image)
                        <img style="background-color: #0a0a0a" src="{{asset("images/$menu->image")}}" />
                    @endif
                    <p class="help-block">ابعاد رعایت شود</p>
                </div>

                @if($menu->id)
                <h1 class="yekan">زیر منو ها</h1>

                <label>افزودن زیر منو</label>
                <input class="form-control input-lg" name="sub_menu" type="text" placeholder="عنوان" value="{{ old("sub_menu")}}">


                <br>
                <br>
                @foreach($menu->sub_menus as $submenu)
                    <div style="border:1px solid black"  class="col-md-2 ">
                        <div  class=" text-center">{{$submenu->title}}</div>

                        <br/>
                        <div class="text-center">
                            <a href="javascript:void" class="delete-photo text-danger" data-photo-id="{{$submenu->id}}" ><i class="fa fa-trash half-x"></i> </a></div>

                    </div>
                    <div id="photos-tobe-deleted">
                        {{--                    this div will be fill via jQuey--}}


                    </div>

                @endforeach

@endif
                <div class="box-footer col-md-12">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </form>
        </div>
    </div>

@endsection

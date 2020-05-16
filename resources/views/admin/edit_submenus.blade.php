@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">ویرایش زیر منو

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
            <form action="{{url("app/cms/admin/submenus/$submenu->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($submenu->id)
                    {{method_field("PUT")}}
                @endif

                <input type="hidden" name="id" value="{{$submenu->id}}">
                <label>عنوان</label>
                <input class="form-control input-lg" name="title" type="text" placeholder="عنوان" value="{{$submenu->title ?? old("title")}}">


                <br>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="text" rows="10" cols="80">
                    {!! $submenu->text !!}
                </textarea>



                <br/>

                <label>تصویر</label>
                <input class="form-control input-lg" name="image" type="file" placeholder="عنوان" value="{{$submenu->image ?? old("image")}}">
                    <img src="{{asset("images/$submenu->image")}}">

                <br>
                    @foreach($submenu->buttons as $button)
                <label><h3>محتوای سمت راست</h3></label>
                <input class="form-control input-lg" name="right_title" type="text" placeholder="عنوان سمت راست" value="{{$button->right_title ?? old("right_title")}}">
                <br>

                    <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="right_text" rows="10" cols="80">
                    {!! $button->right_text !!}
                </textarea>

                    <br>
               نام دکمه راست: <input class="form-control input-lg" name="right_btn" type="text" placeholder="نام دکمه راست" value="{{$button->right_btn ?? old("right_text")}}">


                <br>
                    <label><h3>محتوای سمت چپ</h3></label>
                <input class="form-control input-lg" name="left_title" type="text" placeholder="عنوان سمت چپ" value="{{$button->left_title ?? old("left_title")}}">
                <br>
                    <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="left_text" rows="10" cols="80">
                        {!! $button->left_text !!}
                </textarea>

                    <br>
              نام دکمه چپ:  <input class="form-control input-lg" name="left_btn" type="text" placeholder="نام دکمه چپ" value="{{$button->left_btn ?? old("left_text")}}">


                <br>

                @endforeach
                <h1 class="yekan">پروژه ها</h1>
                <br>
                @foreach($submenu->projects as $project)
                    <div  class="col-md-4 ">
                        <div class=" text-center"><a href="{{url("app/cms/admin/projects/$project->id/edit")}}"><img src="{{asset("images/$project->image")}}" ></a></div>

                        <br/>
                        <div class="text-center">
                            <a href="javascript:void" class="delete-photo text-danger" data-photo-id="{{$project->id}}" ><i class="fa fa-trash half-x"></i> </a></div>

                    </div>
                    <div id="photos-tobe-deleted">
                        {{--                    this div will be fill via jQuey--}}


                    </div>

                @endforeach
                <div class="box-footer col-md-12">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </form>
        </div>
    </div>

@endsection

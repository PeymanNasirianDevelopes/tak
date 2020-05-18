@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")

    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">ویرایش ویژگی ها

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
            <form action="{{url("app/cms/admin/feature/$feature->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($feature->id)
                    {{method_field("PUT")}}
                @endif
                <label>جمله اول</label>
                <input class="form-control input-lg" name="title" type="text" placeholder="عنوان" value="{{$feature->title ?? old("title")}}">
                <br>
                <label>جمله دوم</label>
                <input class="form-control input-lg" name="h1" type="text" placeholder="عنوان" value="{{$feature->h1 ?? old("h1")}}">
                <br>

                <select dir="rtl" name="font" class="form-control select2" style="width: 100%;">

                    @foreach(explode(',',$fonts->fonts) as $font)
                        <option value="{{$font}}" @if($feature->font==$font)  selected  @endif >{{$font}}</option>
                    @endforeach
                </select>
                <br>


                <br/><br/><br/>
                <label>متن</label>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="short_text" rows="10" cols="80">{!!  $feature->short_text ?? old("short_text") !!}</textarea>

                <br>

                <div class="form-group">
                    <label for="exampleInputFile">تصویر</label>
                    <input name="main_image" type="file" value="{{ $feature->main_image ?? old("main_image")}}" id="exampleInputFile">
                    <img src="{{asset("images/$feature->main_image")}}">
                    <p class="help-block">متن راهنما</p>
                </div>

                <br/>  <br/>  <br/>

                @if($feature->id)
                    <h1 class="yekan">ویژگی ها</h1>


                    <br>
                    @foreach($feature->tasks as $task)
                        <div style="border:1px solid black"  class="col-md-2 ">
                            <a href="{{url("app/cms/admin/feature_task/$task->id/edit")}}">

                                <div  class=" text-center">{{$task->title}}</div>
                                <div  class=" text-center">{!! $task->content !!}</div>
                                <div  class=" text-center"><i class="{{$task->font}}"></i></div>


                            </a>


                            <br/>


                        </div>
                        <div id="photos-tobe-deleted">
                            {{--                    this div will be fill via jQuey--}}


                        </div>

                    @endforeach

                @endif



                <div class="box-footer col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </form>
        </div>
    </div>

@endsection

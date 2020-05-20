@extends('admin.dashboard')
@section('content')
@include("admin.fragments.errors")

<div class="box box-info">
    <div class="box-header">
        <h3 class="box-title">ویرایش لندینگ پیج

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
        <form action="{{url("app/cms/admin/landing/$landing->id")}}" method="post" enctype="multipart/form-data">
        @csrf
        @if($landing->id)
        {{method_field("PUT")}}
        <input type="hidden" name="id" value="{{$landing->id}}">
        @endif
        <label>عنوان</label>
        <input class="form-control input-lg" name="title" type="text" placeholder="عنوان" value="{{$landing->title ?? old("title")}}">
        <br>

        <br>
            <label>نمایش در سایت</label>
            <label>
                بله<input  @if($landing->show) checked @endif type="radio" name="show" value="1" class="flat-red" >
            </label>
            <label>
                خیر   <input type="radio" name="show" value="0" class="flat-red" @if(!$landing->show) checked @endif >
            </label>
            <br/>

        <br/><br/><br/>
        <label>متن</label>
        <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="content" rows="10" cols="80">{{ $landing->content ?? old("content")}}</textarea>

        <br>

        <div class="form-group">
            <label for="exampleInputFile">تصویر</label>
            <input name="image" type="file" value="{{ $landing->image ?? old("image")}}" id="exampleInputFile">
            <img width="800" height="500" src="{{asset("images/$landing->image")}}">
            <p class="help-block">متن راهنما</p>
        </div>

        <br/>  <br/>  <br/>





        <div class="box-footer col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ارسال</button>
        </div>

        </form>
    </div>
</div>

@endsection

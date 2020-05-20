@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")

    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">
                @if($featureSection->id)
                    ویرایش ویژگی 2
                @else
                    ایجاد ویژگی 2
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
            <form action="{{url("app/cms/admin/features_2/$featureSection->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($featureSection->id)
                    {{method_field("PUT")}}
                    <input type="hidden" name="id" value="{{$featureSection->id}}">

                @endif
                <label>نام</label>
                <input class="form-control input-lg" name="title" type="text" placeholder="نام" value="{{$featureSection->title ?? old("title")}}">
                <br>
                فونت: <select dir="rtl" name="font" class="form-control select2" style="width: 100%;">

                    @foreach(explode(',',$fonts->fonts) as $font)
                        <option value="{{$font}}" @if($featureSection->font==$font)  selected  @endif >{{$font}}</option>
                    @endforeach
                </select>
                <br>

                <br>
                <br>
                <br>
                <label>محتوا</label>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="bcontent" rows="10" cols="80">{!!  $featureSection->content ?? old("bcontent") !!}</textarea>

                <br>
                <label>متن</label>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="text" rows="10" cols="80">{!!  $featureSection->text ?? old("content") !!}</textarea>

                <br>
                <div class="form-group">
                    <label for="exampleInputFile">تصویر</label>
                    <input name="image" type="file" value="{{ $featureSection->image ?? old("image")}}" id="exampleInputFile">
                    @if($featureSection->id)
                        <img src="{{asset("images/$featureSection->image")}}">
                    @endif
                    <p class="help-block">متن راهنما</p>
                </div>

                <br>


                <br/>



                <div class="box-footer col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </form>
        </div>
    </div>

@endsection

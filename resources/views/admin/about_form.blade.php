@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")

    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">ویرایش درباره ما

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
            <form action="{{url("app/cms/admin/about_us/$about->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($about->id)
                    {{method_field("PUT")}}
                    <input type="hidden" name="id" value="{{$about->id}}">
                @endif
                <label>عنوان</label>
                <input class="form-control input-lg" name="title" type="text" placeholder="عنوان" value="{{$about->title ?? old("title")}}">
                <br>

                <br>


                <br/><br/><br/>
                <label>متن</label>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="bcontent" rows="10" cols="80">{{ $about->content ?? old("bcontent")}}</textarea>

                <br>

                <div class="form-group">
                    <label for="exampleInputFile">تصویر</label>
                    <input name="bg_image" type="file" value="{{ $about->bg_image ?? old("bg_image")}}" id="exampleInputFile">
                        <img src="{{asset("images/$about->bg_image")}}">
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

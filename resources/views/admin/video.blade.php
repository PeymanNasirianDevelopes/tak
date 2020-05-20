@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")

    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">
                @if($video->id)
                    ویرایش ویدئو
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
            <form action="{{url("app/cms/admin/video/$video->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($video->id)
                    {{method_field("PUT")}}
                    <input type="hidden" name="id" value="{{$video->id}}">

                @endif
                <label>عنوان</label>
                <input class="form-control input-lg" name="title" type="text" placeholder="نام" value="{{$video->title ?? old("title")}}">

                <br>

                <label>لینک</label>
                <input class="form-control input-lg" name="link" type="text" placeholder="نام" value="{{$video->link ?? old("link")}}">

                <br>
                <label>نام دکمه</label>
                <input class="form-control input-lg" name="btn_name" type="text" placeholder="نام" value="{{$video->btn_name ?? old("btn_name")}}">

                <br>

                <label>نمایش در سایت</label>
                &nbsp;
                &nbsp;
                &nbsp;
                <label>
                    بله<input  @if($video->show) checked @endif type="radio" name="show" value="1" class="flat-red" >
                </label>
                <label>
                    خیر   <input type="radio" name="show" value="0" class="flat-red" @if(!$video->show) checked @endif >
                </label>
                <br>
                <br>
                <br>

                <div class="form-group">
                    <label for="exampleInputFile">تصویر</label>
                    <input name="bg_image" type="file" value="{{ $video->bg_image ?? old("bg_image")}}" id="exampleInputFile">
                    @if($video->id)
                        <img src="{{asset("images/$video->bg_image")}}">
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

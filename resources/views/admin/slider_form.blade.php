@extends('admin_n.dashboard')
@section('content')
    @include("admin_n.fragments.errors")
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">افزودن اسلایدر جدید

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
            <form action="{{url("app/cmsadmin/admin/sliders/$slider->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($slider->id)
                    {{method_field("PUT")}}
                @endif
                <label>عنوان</label>
                <input class="form-control input-lg" name="title" type="text" placeholder="عنوان" value="{{$slider->title ?? old("title")}}">
                <br>
                <label>نام دکمه</label>
                <input class="form-control input-lg" name="btn_name" type="text" placeholder="نام دکمه" value="{{ $slider->btn_name ?? old("btn_name")}}">
                <br>
                <label>لینک</label>
                <input class="form-control input-lg" name="btn_link" type="text" placeholder="لینک" value="{{ $slider->btn_link ?? old("btn_link")}}">
                <br>
                <label>نمایش در سایت: </label>
                <label>
                     بله<input  @if($slider->show) checked @endif type="radio" name="show" value="1" class="flat-red" >
                </label>
                <label>
                 خیر   <input type="radio" name="show" value="0" class="flat-red" @if(!$slider->show) checked @endif >
                </label>

                <br/><br/><br/>
                <label>توضیحات</label>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description" rows="10" cols="80">{{ $slider->description ?? old("description")}}</textarea>

<br>

                <div class="form-group">
                    <label for="exampleInputFile">تصویر</label>
                    <input name="image" type="file" value="{{ $slider->image ?? old("link")}}" id="exampleInputFile">

                    <p class="help-block">متن راهنما</p>
                </div>


                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </form>
        </div>
    </div>

    @endsection

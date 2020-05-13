@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">ویرایش اسلاید

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
            <form action="{{url("app/cms/admin/sliders/$slider->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($slider->id)
                    {{method_field("PUT")}}
                @endif
                <label>عنوان</label>
                <input class="form-control input-lg" name="title" type="text" placeholder="عنوان" value="{{$slider->title ?? old("title")}}">


                <br>
                <label>متن زیر فیلد</label>
                <input class="form-control input-lg" name="subscribe_text" type="text" placeholder="عنوان" value="{{$slider->subscribe_text ?? old("subscribe_text")}}">


                <br>
                <label>نمایش عضویت ایمیل : </label>
                <label>
                     بله<input  @if($slider->show_input) checked @endif type="radio" name="show_input" value="1" class="flat-red" >
                </label>
                <label>
                 خیر   <input type="radio" name="show_input" value="0" class="flat-red" @if(!$slider->show_input) checked @endif >
                </label>

                <br/><br/><br/>
                <label>توضیحات</label>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="content" rows="10" cols="80">{{ $slider->content ?? old("content")}}</textarea>

<br>

                <div class="form-group">
                    <label for="exampleInputFile">تصویر</label>
                    <input name="main_image" type="file" value="{{ $slider->main_image ?? old("main_image")}}" id="exampleInputFile">

                    <p class="help-block">ابعاد رعایت شود</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">تصویر مویابل</label>
                    <input name="phone_image" type="file" value="{{ $slider->phone_image ?? old("phone_image")}}" id="exampleInputFile">

                    <p class="help-block">حتما png باشد</p>
                </div>


                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </form>
        </div>
    </div>

    @endsection

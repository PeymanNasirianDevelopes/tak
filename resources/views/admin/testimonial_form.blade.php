@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")

    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">
                @if($testimonial->id)
                    ویرایش نظر
                @else
                    ایجاد نظر
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
            <form action="{{url("app/cms/admin/testimonials/$testimonial->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($testimonial->id)
                    {{method_field("PUT")}}

                @endif
                <label>نام</label>
                <input class="form-control input-lg" name="name" type="text" placeholder="نام" value="{{$testimonial->name ?? old("name")}}">
                <br>
                <label>تعداد ستاره</label>
                <input class="form-control input-lg" name="stars" type="text" placeholder="تعداد ستاره" value="{{$testimonial->stars ?? old("stars")}}">
                <br>

                <br>
                <br>
                <br>
                <label>متن</label>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="content" rows="10" cols="80">{!!  $testimonial->content ?? old("content") !!}</textarea>

                <br>
                <div class="form-group">
                    <label for="exampleInputFile">تصویر</label>
                    <input name="image" type="file" value="{{ $testimonial->image ?? old("image")}}" id="exampleInputFile">
                    @if($testimonial->id)
                        <img src="{{asset("images/$testimonial->image")}}">
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

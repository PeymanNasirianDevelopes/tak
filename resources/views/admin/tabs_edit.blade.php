@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")

    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">
                @if($tab->id)
                    ویرایش تب
                @else
                ایجاد تب
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
            <form action="{{url("app/cms/admin/tabs/$tab->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($tab->id)
                    {{method_field("PUT")}}
                @else
                    <input type="hidden" name="tab_id" value="{{RandomString()}}"/>
                @endif
                <label>عنوان</label>
                <input class="form-control input-lg" name="title" type="text" placeholder="عنوان" value="{{$tab->title ?? old("title")}}">
                <br>
                <label>عنوان تب</label>
                <input class="form-control input-lg" name="head" type="text" placeholder="عنوان تب" value="{{$tab->head ?? old("head")}}">
                <br>
               فونت: <select dir="rtl" name="font" class="form-control select2" style="width: 100%;">

                    @foreach(explode(',',$fonts->fonts) as $font)
                        <option value="{{$font}}" @if($tab->font==$font)  selected  @endif >{{$font}}</option>
                    @endforeach
                </select>
                <br>
                <br>
                <br>
                <label>متن</label>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="content" rows="10" cols="80">{!!  $tab->content ?? old("content") !!}</textarea>

                <br>
                <div class="form-group">
                    <label for="exampleInputFile">تصویر</label>
                    <input name="image" type="file" value="{{ $tab->image ?? old("image")}}" id="exampleInputFile">
                    @if($tab->id)
                    <img src="{{asset("images/$tab->image")}}">
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

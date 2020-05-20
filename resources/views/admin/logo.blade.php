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
            <form action="{{url("app/cms/admin/logo/$logo->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($logo->id)
                    {{method_field("PUT")}}
                @endif
                <label> عنوان شرکت</label>
                <input class="form-control input-lg" name="alt" type="text" placeholder="عنوان شرکت" value="{{$logo->alt ?? old("alt")}}">
                <br>


                <div class="form-group">
                    <label for="exampleInputFile">لوگوی صفحه لود</label>
                    <input name="main_logo" type="file" value="{{ $logo->main_logo ?? old("main_logo")}}" id="exampleInputFile">
                    <img style="background-color: #1d1c1b" src="{{asset("images/$logo->main_logo")}}">
                    <p class="help-block">متن راهنما</p>
                </div>

                <br/>
                <div class="form-group">
                    <label for="exampleInputFile">لوگوی منو</label>
                    <input name="header_logo" type="file" value="{{ $logo->header_logo ?? old("header_logo")}}" id="exampleInputFile">
                    <img style="background-color: #1d1c1b" src="{{asset("images/$logo->header_logo")}}">
                    <p class="help-block">متن راهنما</p>
                </div>

                <br/>
                <div class="form-group">
                    <label for="exampleInputFile">لوگوی فوتر</label>
                    <input name="footer_image" type="file" value="{{ $logo->footer_image ?? old("footer_image")}}" id="exampleInputFile">
                    <img style="background-color: #1d1c1b" src="{{asset("images/$logo->footer_image")}}">
                    <p class="help-block">متن راهنما</p>
                </div>

                <br/>





                <div class="box-footer col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </form>
        </div>
    </div>

@endsection

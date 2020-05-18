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
            <form action="{{url("app/cms/admin/circle_counter/$circleCounter->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($circleCounter->id)
                    {{method_field("PUT")}}
                @endif
                <label>عنوان</label>
                <input class="form-control input-lg" name="title" type="text" placeholder="عنوان" value="{{$circleCounter->title ?? old("title")}}">
                <br>
                <label>پیشرفت</label>
                <input class="form-control input-lg" name="progress" type="text" placeholder="پیشرفت" value="{{$circleCounter->progress ?? old("progress")}}">
                <br>
                <label>کد رنگ</label>
                <input class="form-control input-lg" name="class" type="text" placeholder="پیشرفت" value="{{$circleCounter->class ?? old("class")}}">
                <br>
                <br>


                <br>


                <br/>



                <div class="box-footer col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </form>
        </div>
    </div>

@endsection

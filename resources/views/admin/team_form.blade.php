@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")

    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">
                @if($team->id)

                    ویرایش شخص
                @else
                ایجاد شخص جدید
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
            <form action="{{url("app/cms/admin/team/$team->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($team->id)
                    {{method_field("PUT")}}
                    <input type="hidden" name="id" value="{{$team->id}}">
                @endif
                <label>نام</label>
                <input class="form-control input-lg" name="name" type="text" placeholder="نام" value="{{$team->name ?? old("title")}}">
                <br>
                <label>سمت</label>
                <input class="form-control input-lg" name="job" type="text" placeholder="سمت" value="{{$team->job ?? old("title")}}">
                <br>
                <br>


                <div class="form-group">
                    <label for="exampleInputFile">تصویر</label>
                    <input name="image" type="file" value="{{ $team->image ?? old("image")}}" id="exampleInputFile">
                    <img width="800" height="500" src="{{asset("images/$team->image")}}">
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

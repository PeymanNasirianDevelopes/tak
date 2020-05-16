@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">
                @if($project->id)
                    ویرایش پروژه
                @else
                ایجاد پروژه
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
            <form action="{{url("app/cms/admin/projects/$project->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($project->id)
                    {{method_field("PUT")}}
                @endif
                <label>مربوط به:</label>
                <select dir="rtl" name="sub_menu_id" class="form-control select2" style="width: 100%;">

                    @foreach($sub_menus as $submenu)
                    <option value="{{$submenu->id}}" @if($submenu->id==$project->sub_menu_id)  selected  @endif>{{$submenu->title}}</option>
                    @endforeach
                </select>

                <br>
                <br>
                <label>عنوان</label>
                <input class="form-control input-lg" name="title" type="text" placeholder="عنوان" value="{{$project->title ?? old("title")}}">


                <br>
                <label>تاریخ</label>
                <input class="form-control input-lg" name="date" type="date" placeholder="عنوان" value="{{$project->date ?? old("date")}}">


                <br>

                <br/><br/><br/>
                <label>توضیحات</label>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="content" rows="10" cols="80">
                    {!! $project->content ?? old("content") !!}
                </textarea>

                <br>

                <div class="form-group">
                    <label for="exampleInputFile">تصویر</label>
                    <input name="image" type="file" value="{{ $project->image ?? old("image")}}" id="exampleInputFile">
                    <img src="{{asset("images/$project->image")}}" />
                    <p class="help-block">ابعاد رعایت شود</p>
                </div>


                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </form>
        </div>
    </div>

@endsection

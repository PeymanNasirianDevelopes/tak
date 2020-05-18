@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")

    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">ویرایش بخش وسط

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
            <form action="{{url("app/cms/admin/make_dream/$makeDream->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($makeDream->id)
                    {{method_field("PUT")}}
                @endif
                <label>جمله اول</label>
                <input class="form-control input-lg" name="title" type="text" placeholder="عنوان" value="{{$makeDream->title ?? old("title")}}">

                <br>

                <select dir="rtl" name="font" class="form-control select2" style="width: 100%;">

                    @foreach(explode(',',$fonts->fonts) as $font)
                        <option value="{{$font}}" @if($makeDream->font==$font)  selected  @endif >{{$font}}</option>
                    @endforeach
                </select>
                <br>


                <br/><br/><br/>
                <label>متن</label>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="content" rows="10" cols="80">{!!  $makeDream->content ?? old("content") !!}</textarea>

                <br>



                <br/>  <br/>  <br/>





                <div class="box-footer col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </form>
        </div>
    </div>

@endsection

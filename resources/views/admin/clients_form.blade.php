@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")

    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">ویرایش مشتری

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
            <form action="{{url("app/cms/admin/clients/$client->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($client->id)
                    {{method_field("PUT")}}
                    <input type="hidden" name="id" value="{{$client->id}}">
                @endif
                <label>نام شرکت</label>
                <input class="form-control input-lg" name="company_name" type="text" placeholder="نام شرکت" value="{{$client->company_name ?? old("company_name")}}">
                <br>
                <label>لینک</label>
                <input class="form-control input-lg" name="link" type="text" placeholder="لینک" value="{{$client->link ?? old("link")}}">
                <br>

                <br>


                <br/><br/><br/>


                <div class="form-group">
                    <label for="exampleInputFile">تصویر</label>
                    <input name="image" type="file" value="{{ $client->image ?? old("image")}}" id="exampleInputFile">
                    @if($client->id)
                    <img style="background-color: black" src="{{asset("images/$client->image")}}">
                    @endif
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

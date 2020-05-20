@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">
                @if($plan->id)
                    ویرایش پلن
                @else
                    ایجاد پلن
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
            <form action="{{url("app/cms/admin/plans/$plan->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($plan->id)
                    {{method_field("PUT")}}
                @endif


                <label>عنوان</label>
                <input class="form-control input-lg" name="title" type="text" placeholder="عنوان" value="{{$plan->title ?? old("title")}}">


                <br>

                <label>قیمت</label>
                <input class="form-control input-lg" name="price" type="text" placeholder="قیمت" value="{{$plan->price ?? old("price")}}">


                <br>
                <label>واحد پول</label>
                <input class="form-control input-lg" name="currency" type="text" placeholder="واحد پول" value="{{$plan->currency ?? old("currency")}}">


                <br>
                <label>دوره</label>
                <input class="form-control input-lg" name="period" type="text" placeholder="دوره" value="{{$plan->period ?? old("period")}}">


                <br>
                <label>نام دکمه</label>
                <input class="form-control input-lg" name="btn_name" type="text" placeholder="نام دکمه" value="{{$plan->btn_name ?? old("btn_name")}}">


                <br>

                <br>
                <label>متن</label>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="content" rows="10" cols="80">{{ $plan->content ?? old("content")}}</textarea>

                <br>


                <br/>
                <br/>
                <br/>





                @if($plan->id)
                    <h1 class="yekan">ویژگی ها</h1>

                    <label>افزودن لیست ویژگی </label>
                    <input class="form-control input-lg" name="list" type="text" placeholder="لیست" value="{{ old("list")}}">
                    <input type="hidden" name="id" value="{{$plan->id}}">

                    <br>
                    <br>
                    @foreach($plan->Lists as $list)
                        <div style="border:1px solid black"  class="col-md-2 ">
                            <div  class=" text-center">{{$list->head}}</div>

                            <br/>
                            <div class="text-center">
                                <a href="javascript:void" class="delete-photo text-danger" data-photo-id="{{$list->id}}" ><i class="fa fa-trash half-x"></i> </a></div>

                        </div>
                        <div id="photos-tobe-deleted">
                            {{--                    this div will be fill via jQuey--}}


                        </div>

                    @endforeach

                @endif
                <div class="box-footer col-md-12">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </form>
        </div>
    </div>

@endsection

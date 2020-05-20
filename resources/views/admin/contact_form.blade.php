@extends('admin.dashboard')
@section('content')
    @include("admin.fragments.errors")

    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">ویرایش تماس با ما

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
            <form action="{{url("app/cms/admin/contact/$contaact->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($contaact->id)
                    {{method_field("PUT")}}
                    <input type="hidden" name="id" value="{{$contaact->id}}">
                @endif
                <label>عنوان</label>
                <input class="form-control input-lg" name="title" type="text" placeholder="عنوان" value="{{$contaact->title ?? old("title")}}">
                <br>
                <label>شماره ثابت</label>
                <input class="form-control input-lg" name="phone" type="text" placeholder="شماره ثابت" value="{{$contaact->phone ?? old("phone")}}">
                <br>
                <label>شماره همراه</label>
                <input class="form-control input-lg" name="mobile" type="text" placeholder="شماره همراه" value="{{$contaact->mobile ?? old("mobile")}}">
                <br>
                <label>وب سایت</label>
                <input class="form-control input-lg" name="website" type="text" placeholder="وب سایت" value="{{$contaact->website ?? old("website")}}">
                <br>
                <label>متن دنبال کنید</label>
                <input class="form-control input-lg" name="follow_us" type="text" placeholder="متن دنبال کنید" value="{{$contaact->follow_us ?? old("follow_us")}}">
                <br>
                <label>عنوان درباره ما</label>
                <input class="form-control input-lg" name="head" type="text" placeholder="عنوان درباره ما" value="{{$contaact->head ?? old("head")}}">

                <label>ایمیل</label>
                <input class="form-control input-lg" name="link" type="text" placeholder="لینک" value="{{$contaact->link ?? old("link")}}">
                <br>

                <br>
                <label>آدرس</label>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="address" rows="10" cols="80">{{ $contaact->address ?? old("address")}}</textarea>

                <br>
                <label>درباره ما</label>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="about_us" rows="10" cols="80">{{ $contaact->about_us ?? old("about_us")}}</textarea>

                <br>
                <br/><br/><br/>


                @if($contaact->id)
                    <h1 class="yekan">شبکه های اجتماعی</h1>

                    <label>افزودن شبکه اجتماعی</label>
                    <input class="form-control input-lg" name="follow" type="text" placeholder="فونت" value="{{ old("follow")}}">
<br>
                    <input class="form-control input-lg" name="follow_link" type="text" placeholder="لینک" value="{{ old("follow_link")}}">
                    <br>
                    <br>
                    @foreach($contaact->Follow as $follow)
                        <div style="border:1px solid black"  class="col-md-2 ">
                            <div  class=" text-center"><i class="fa {{$follow->font}}"></i></div>

                            <br/>
                            <div class="text-center">
                                <a href="javascript:void" class="delete-photo text-danger" data-photo-id="{{$follow->id}}" ><i class="fa fa-trash half-x"></i> </a></div>

                        </div>
                        <div id="photos-tobe-deleted">
                            {{--                    this div will be fill via jQuey--}}


                        </div>

                    @endforeach

                @endif

                <br/>  <br/>  <br/>





                <div class="box-footer col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </form>
        </div>
    </div>

@endsection

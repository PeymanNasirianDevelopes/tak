@extends('admin.dashboard')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">ویژگی های 2</h3>
                    </div>

                    @if(session('message'))
                        <div  class="alert alert-success alert-dismissible  show" role="alert">
                            <strong style="margin-right: 10px;">   {{session('message')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                @endif


                <!-- /.box-header -->
                    <div class="box-body">
<div align="center">
    <img  src="{{asset("images/$feature_image->main_image")}}" />

    <form action="{{url("app/cms/admin/features_2/1")}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field("PUT")}}
        <div class="form-group">
            <label for="exampleInputFile">تصویر</label>
            <input name="main_image" type="file" value="{{ $testimonial->image ?? old("image")}}" id="exampleInputFile">

            <p class="help-block">متن راهنما</p>
        </div>
        <div class="box-footer col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ارسال</button>
        </div>
    </form>
</div>
                       <br>
                       <br>
                       <br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>ردیف</th>
                                <th> عنوان </th>
                                <th>فونت</th>
                                <th>محتوا</th>
                                <th>متن</th>
                                <th>تصویر</th>



                                <th colspan="2">فعالیت</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($features as $key=>$feature)
                                <tr>

                                    <td>{{$key+1}}
                                    </td>
                                    <td>{{$feature->title}}</td>
                                    <td><i class="{{$feature->font}}" ></i> </td>
                                    <td>{!! $feature->content !!}</td>
                                    <td>{!! $feature->text !!}</td>
                                    <td><img width="100" height="100" src="{{asset("images/$feature->image")}}" /></td>





                                    <td>
                                        <a href="{{url("app/cms/admin/features_2/$feature->id/edit")}}" title="Edit">  <i class="fa fa-edit half-x" style="font-size:1.5em;"></i></a></td>

                                    <td>

                                        <form id="slider-{{$feature->id}}" class="danger" action="{{url("app/cms/admin/features_2/$feature->id")}}" method="post" >
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <input type="hidden" name="id" value="{{$feature->id}}">
                                            <button type="button" class="btn btn-link" data-id="{{$feature->id}}">
                                                <i class="fa fa-trash half-x text-danger" style="font-size:1.5em;"></i>

                                            </button>
                                        </form>


                                    </td>


                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>

                                <th>ردیف</th>
                                <th> عنوان </th>
                                <th>فونت</th>
                                <th>محتوا</th>
                                <th>متن</th>
                                <th>تصویر</th>



                                <th colspan="2">فعالیت</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div></div></section>


@endsection

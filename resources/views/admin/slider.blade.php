@extends('admin.dashboard')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">داده ها</h3>
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
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ردیف</th>
                    <th>عنوان</th>
                    <th>توضیحات </th>
                    <th>متن زیر فیلد </th>

                    <th>تصویر</th>
                    <th>تصویر گوشی</th>
                    <th>نمایش</th>
                    <th colspan="2">فعالیت</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>1</td>
                    <td>{{$slider->title}}
                    </td>
                    <td>{!! $slider->content !!}</td>
                    <td> {{$slider->subscribe_text}}</td>

                    <td><img src="{{asset("images/$slider->main_image")}}" width="190" height="150"/></td>
                    <td><img src="{{asset("images/$slider->phone_image")}}" width="190" height="150"/></td>
                    <td class="show-slide" data-show-id="{{$slider->id}}">
                        @if($slider->show_input)
                            <span class="text-success"><i class="fa fa-check half-x" style="font-size:1.5em;"></i></span>
                            @else
                            <span class="text-danger"><i class="fa fa-times half-x" style="font-size:1.5em;"></i></span>
@endif

                    </td>

                    <td>
                        <a href="{{url("app/cms/admin/sliders/$slider->id/edit")}}" title="Edit">  <i class="fa fa-edit half-x" style="font-size:1.5em;"></i></a></td>

                    <td class="show" data-show-id="{{$slider->id}}">
                        @if($slider->show_input)
                            <a onclick="markTask({{$slider->id}})" title=" نمایش" style="cursor: pointer"><i class="fa fa-times-circle text-danger" style="font-size:1.5em;"></i></a>
                        @else
                            <a onclick="markTask({{$slider->id}})" title="عدم نمایش" style="cursor: pointer"><i class="fa fa-check-circle text-success half-x" style="font-size:1.5em;"></i></a>
                        @endif
                    </td>
                </tr>
 </tbody>
                <tfoot>
                <tr>
                    <th>ردیف</th>
                    <th>عنوان</th>
                    <th>توضیحات </th>
                    <th>متن زیر فیلد </th>

                    <th>تصویر</th>
                    <th>تصویر گوشی</th>
                    <th>نمایش</th>
                    <th colspan="2">فعالیت</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

            </div></div></section>


    @endsection

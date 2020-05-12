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
                    <th>نام دکمه</th>
                    <th>لینک</th>
                    <th>تصویر</th>
                    <th>نمایش</th>
                    <th colspan="3">فعالیت</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td></td>
                    <td>{{$slider->title}}
                    </td>
                    <td>{{$slider->description}}</td>
                    <td> {{$slider->btn_name}}</td>
                    <td>{{$slider->btn_link}}</td>
                    <td><img src="{{asset("storage/$slider->image")}}" width="190" height="150"/></td>
                    <td class="show-slide" data-show-id="{{$slider->id}}">
                        @if($slider->show)
                            <span class="text-success"><i class="fa fa-check half-x" style="font-size:1.5em;"></i></span>
                            @else
                            <span class="text-danger"><i class="fa fa-times half-x" style="font-size:1.5em;"></i></span>
@endif

                    </td>

                    <td>
                        <a href="{{url("app/cmsadmin/admin/sliders/$slider->id/edit")}}" title="Edit">  <i class="fa fa-edit half-x" style="font-size:1.5em;"></i></a></td>
                    <td>

                        <form id="slider-{{$slider->id}}" class="danger" action="{{url("app/cms/admin/sliders/$slider->id")}}" method="post" >
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="button" class="btn btn-link" data-id="{{$slider->id}}">
                                <i class="fa fa-trash half-x text-danger" style="font-size:1.5em;"></i>

                            </button>
                        </form>


                    </td>
                    <td class="show" data-show-id="{{$slider->id}}">
                        @if($slider->show)
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
                    <th>نام دکمه</th>
                    <th>لینک</th>
                    <th>تصویر</th>
                    <th>نمایش</th>
                    <th colspan="4">فعالیت</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

            </div></div></section>


    @endsection

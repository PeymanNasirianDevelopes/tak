@extends('admin_n.dashboard')
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

                                <th>عنوان</th>
                                <th>متن عنوان </th>
                                <th>متن</th>
                                <th>متن قرمز</th>
                                <th>نام دکمه</th>
                                <th>لینک</th>
                                <th>تصویر</th>
                                <th colspan="2">فعالیت</th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <td>{{$about->head}}
                                    </td>
                                    <td>{{$about->head_text}}</td>
                                    <td>{{$about->text}}</td>
                                    <td>{{$about->sentences}}</td>
                                    <td> {{$about->btn_name}}</td>
                                    <td>{{$about->btn_link}}</td>
                                    <td><img src="{{asset("storage/$about->main_photo")}}" width="190" height="150"/></td>


                                    <td>
                                        <a href="{{url("app/cmsadmin/admin/aboutus/$about->id/edit")}}" title="Edit">  <i class="fa fa-edit half-x" style="font-size:1.5em;"></i></a></td>
                                    <td>




                                    </td>

                                </tr>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>عنوان</th>
                                <th>متن عنوان </th>
                                <th>متن</th>
                                <th>متن قرمز</th>
                                <th>نام دکمه</th>
                                <th>لینک</th>
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

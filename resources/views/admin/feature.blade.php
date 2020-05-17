@extends('admin.dashboard')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> درباره ما</h3>
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
                                <th> عنوان </th>
                                <th>متن</th>

                                <th>تصویر</th>
                                <th colspan="2">فعالیت</th>
                            </tr>
                            </thead>
                            <tbody>


                                <tr>

                                    <td>1
                                    </td>
                                    <td>{{$feature->title}}</td>
                                    <td>{{$feature->h1}}</td>
                                    <td>{{$feature->short_text}}</td>

                                    <td><img src="{{asset("images/$feature->main_image")}}" width="190" height="150"/></td>


                                    <td>
                                        <a href="{{url("app/cms/admin/feature/$feature->id/edit")}}" title="Edit">  <i class="fa fa-edit half-x" style="font-size:1.5em;"></i></a></td>
                                    <td>

                                    </td>


                                </tr>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ردیف</th>
                                <th> عنوان </th>
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

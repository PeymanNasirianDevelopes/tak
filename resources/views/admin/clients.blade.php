@extends('admin.dashboard')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> مشتریان ما</h3>
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
                                <th> نام شرکت </th>
                                <th>لینک</th>

                                <th>تصویر</th>
                                <th colspan="2">فعالیت</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($clients as $key=>$client)
                                <tr>

                                    <td>{{$key+1}}
                                    </td>
                                    <td>{{$client->company_name}}</td>
                                    <td>{{$client->link}}</td>

                                    <td bgcolor="black"><img src="{{asset("images/$client->image")}}" width="190" height="150"/></td>


                                    <td>
                                        <a href="{{url("app/cms/admin/clients/$client->id/edit")}}" title="Edit">  <i class="fa fa-edit half-x" style="font-size:1.5em;"></i></a></td>
                                    <td>
                                        <form id="slider-{{$client->id}}" class="danger" action="{{url("app/cms/admin/clients/$client->id")}}" method="post" >
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <input type="hidden" name="id" value="{{$client->id}}">
                                            <button type="button" class="btn btn-link" data-id="{{$client->id}}">
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
                                <th> نام شرکت </th>
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

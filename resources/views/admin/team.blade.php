@extends('admin.dashboard')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">تیم ما</h3>
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

                        <br>
                        <br>
                        <br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>ردیف</th>
                                <th> نام </th>
                                <th>سمت</th>

                                <th>تصویر</th>





                                <th colspan="2">فعالیت</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($teams as $key=>$team)
                                <tr>

                                    <td>{{$key+1}}
                                    </td>
                                    <td>{{$team->name}}</td>
                                    <td>{{$team->job}}  </td>

                                    <td><img width="100" height="100" src="{{asset("images/$team->image")}}"> </td>





                                    <td>
                                        <a href="{{url("app/cms/admin/team/$team->id/edit")}}" title="Edit">  <i class="fa fa-edit half-x" style="font-size:1.5em;"></i></a></td>

                                    <td>

                                        <form id="slider-{{$team->id}}" class="danger" action="{{url("app/cms/admin/team/$team->id")}}" method="post" >
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <input type="hidden" name="id" value="{{$team->id}}">
                                            <button type="button" class="btn btn-link" data-id="{{$team->id}}">
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
                                <th> نام </th>
                                <th>سمت</th>

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

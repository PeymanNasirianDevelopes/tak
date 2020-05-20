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

                        <br>
                        <br>
                        <br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>ردیف</th>
                                <th> عنوان </th>
                                <th>قیمت</th>
                                <th>واحد پول</th>
                                <th>دوره</th>
                                <th>محتوا</th>
                                <th>لیست ویژگی ها</th>
                                <th>نام دکمه</th>




                                <th colspan="2">فعالیت</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($plans as $key=>$plan)
                                <tr>

                                    <td>{{$key+1}}
                                    </td>
                                    <td>{{$plan->title}}</td>
                                    <td>{{$plan->price}}  </td>
                                    <td>{!! $plan->currency !!}</td>
                                    <td>{{$plan->period}}  </td>
                                    <td>{!! $plan->content !!}</td>
                                    <td>
                                        <ul>
                                            @foreach($plan->Lists as $list)
                                                <li><span>{{$list->head}}</span></li>
                                            @endforeach
                                        </ul>


                                    </td>
                                    <td>{{$plan->btn_name}} </td>




                                    <td>
                                        <a href="{{url("app/cms/admin/plans/$plan->id/edit")}}" title="Edit">  <i class="fa fa-edit half-x" style="font-size:1.5em;"></i></a></td>

                                    <td>

                                        <form id="slider-{{$plan->id}}" class="danger" action="{{url("app/cms/admin/plans/$plan->id")}}" method="post" >
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <input type="hidden" name="id" value="{{$plan->id}}">
                                            <button type="button" class="btn btn-link" data-id="{{$plan->id}}">
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
                                <th>قیمت</th>
                                <th>واحد پول</th>
                                <th>دوره</th>
                                <th>محتوا</th>
                                <th>لیست ویژگی ها</th>
                                <th>نام دکمه</th>




                                <th colspan="2">فعالیت</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div></div></section>


@endsection

@extends('admin.dashboard')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">داده های منو</h3>
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
                                <th>زیر منو </th>


                                <th>تصویر</th>


                                <th colspan="2">فعالیت</th>
                            </tr>
                            </thead>
                            <tbody>
@foreach($menus as $key=>$menu)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$menu->title}}
                                </td>

                                <td>
                                    @foreach($menu->sub_menus as $sub_menu)
                                        <a href="{{url("app/cms/admin/submenus/$sub_menu->id/edit")}}">{{$sub_menu->title }}</a>
                                <br>
                                    @endforeach
                                </td>



                                <td style="background-color: #0a0a0a">
                                    @if($menu->image)
                                    <img src="{{asset("images/$menu->image")}}" width="190" height="150"/>
                                    @else
                                    &nbsp;
                                        @endif
                                </td>



                                <td>
                                    <a href="{{url("app/cms/admin/menus/$menu->id/edit")}}" title="Edit">  <i class="fa fa-edit half-x" style="font-size:1.5em;"></i></a></td>

                                <td>

                                    <form id="slider-{{$menu->id}}" class="danger" action="{{url("app/cms/admin/menus/$menu->id")}}" method="post" >
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="button" class="btn btn-link" data-id="{{$menu->id}}">
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
                                <th>عنوان</th>
                                <th>زیر منو </th>


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

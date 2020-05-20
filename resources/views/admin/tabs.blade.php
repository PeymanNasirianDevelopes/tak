@extends('admin.dashboard')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">پیشرفت کار</h3>
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
                                <th>عنوان تب</th>
                                <th>محتوا</th>
                                <th>تصویر</th>
                                <th>فونت</th>


                                <th>فعالیت</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($tabs as $key=>$tab)
                                <tr>

                                    <td>{{$key+1}}
                                    </td>
                                    <td>{{$tab->title}}</td>
                                    <td>{{$tab->head}}</td>
                                    <td>{!! $tab->content !!}</td>
                                    <td><img src="{{asset("images/$tab->image")}}" /></td>
                                    <td><i class="{{$tab->font}}"></i> </td>



                                    <td>
                                        <a href="{{url("app/cms/admin/tabs/$tab->id/edit")}}" title="Edit">  <i class="fa fa-edit half-x" style="font-size:1.5em;"></i></a></td>

                                    <td>

                                        <form id="slider-{{$tab->id}}" class="danger" action="{{url("app/cms/admin/tabs/$tab->id")}}" method="post" >
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="button" class="btn btn-link" data-id="{{$tab->id}}">
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
                                <th>عنوان تب</th>
                                <th>محتوا</th>
                                <th>تصویر</th>
                                <th>فونت</th>


                                <th>فعالیت</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div></div></section>


@endsection

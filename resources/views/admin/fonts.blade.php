@extends('admin.dashboard')
@section('content')

    <section class="content">



        <div class="row">


@foreach(explode(',',$fonts->fonts) as $font)

      <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon  @php $array=$fonts->bgcolor;
                        $bg=explode(',',$array);
                        $i=array_rand($bg);
                        echo $bg[$i];
                    @endphp "><i  class="{{$font}} icon-size-48"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">نام فونت</span>
                        <span class="info-box-number">{{$font}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->




        @endforeach

        </div>
    </section>


@endsection

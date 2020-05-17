			<section>
				<div class="container v-top-gap-extra">
					<div class="row boxed-flex-sm">


                        @foreach($menus as $service)
						<!-- boxed content with icon {{$service->font}} -->




    <div style="margin:5px" class="col-sm-4 boxed-content boxed-bg-green boxed-with-icon boxed-icon-md">
        <a href="">
        <h4 class="boxed-text-dark-blue" style="margin-right: 10px">{{$service->title}}</h4>
        <i class="{{$service->font}} icon-size-18 boxed-icon-color-3"></i>
        </a>
    </div>



                            @endforeach
					</div><!-- /.row -->
				</div>
			</section>

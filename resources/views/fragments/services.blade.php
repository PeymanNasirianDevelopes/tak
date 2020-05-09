			<section>
				<div class="container v-top-gap-extra">
					<div class="row boxed-flex-sm">


                        @foreach($services as $service)
						<!-- boxed content with icon {{$service->font}} -->


						<div class="col-sm-4 boxed-content boxed-bg-green boxed-with-icon boxed-icon-md">
							<h4 class="boxed-text-dark-blue" style="margin-right: 10px">{{$service->title}}</h4>
							<i class="{{$service->font}} boxed-icon-color-3"></i>
						</div>
                            @endforeach
					</div><!-- /.row -->
				</div>
			</section>

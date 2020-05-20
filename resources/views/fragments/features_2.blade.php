			<section>
				<div class="container">

					<div class="featured-content featured-content-10">


						<div class="row">
							<div class="col-md-12 text-center">
								<div class="row-top-gap"></div>
								<img class="img-maxwidth" src="{{asset("images/$feature_section_image->image")}}" alt="Featured Content Image">
								<div class="row-top-gap"></div>
							</div>
						</div>

						<div class="row">


                            @foreach($feature_sections as $feature_section)
							<div class="col-md-3 col-sm-6">
								<div class="icon-box icon-box-small icon-box-boxed icon-box-light over-top-right-icon">
									<i class="{{$feature_section->font}} icon-size-24 icon-cover-55 cover-quadrangle-icon cover-icon-bg-green"></i>
									<h5>{{$feature_section->title}}</h5>
									<p>
									{!! $feature_section->content !!}
									</p>
								</div>
							</div>
                            @endforeach

					</div>
				</div>
			</section>

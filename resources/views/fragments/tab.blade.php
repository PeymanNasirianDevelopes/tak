			<section>
				<div class="container">
					<div class="row">

						<div class="col-md-6">
							<!-- Tab with image content - dark style -->
							<section>
								<div class="tab tab-icon-header tab-icon-header-light">
									<ul class="nav nav-tabs responsive" id="tab-text-header-light-2">

                                        @foreach($tabs as $tab)
                                        @if($tab->id==1)
										<li style="background-color: #1d1c1b !important;margin-left: 100px;" class="active">
											<a href="#{{$tab->tab_id}}" data-toggle="tab">
												<i class="{{$tab->font}} tab-header-icon"></i>
												<span class="text-capitalize">{{$tab->title}}</span>
											</a>
										</li>
									@else
                                                <li style="background-color: #1d1c1b !important" >
                                                    <a href="#{{$tab->tab_id}}" data-toggle="tab">
                                                        <i class="{{$tab->font}} tab-header-icon"></i>
                                                        <span class="text-capitalize">{{$tab->title}}</span>
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach


									</ul><!-- Tab header -->
									<div class="tab-content clearfix responsive">

                                        @foreach($tabs as $tab)
                                        @if($tab->id==1)
										<div class="tab-pane active" id="{{$tab->tab_id}}">
											<div class="col-sm-6 col-sm-push-6 tab-content-image">
												<img class="img-responsive" src="{{asset("images/$tab->image")}}" alt="tab content image">
											</div>
											<div class="col-sm-6 col-sm-pull-6 tab-content-text">
												<span class="tab-content-title">{{$tab->head}}</span>
												<p>
                       {!! $tab->content !!}
                        </p>
											</div>
										</div>
                                            @else
                                                <div class="tab-pane" id="{{$tab->tab_id}}">
                                                    <div class="col-sm-6 col-sm-push-6 tab-content-image">
                                                        <img class="img-responsive" src="{{asset("images/$tab->image")}}" alt="tab content image">
                                                    </div>
                                                    <div class="col-sm-6 col-sm-pull-6 tab-content-text">
                                                        <span class="tab-content-title">{{$tab->head}}</span>
                                                        <p>
                                                            {{$tab->content}}
                                                        </p>
                                                    </div>
                                                </div>

@endif
                                        @endforeach


									</div>
								</div>
							</section><!-- /. Tab with image content - dark style -->
						</div>




<br>





                        <div style="margin-top: -40px !important;" dir="ltr" class="col-md-6">
                            <h5 dir="rtl" class="bottom-gap-default">نظرات مشتریان</h5>
                            <br>
                            <div class="testimonial testimonial-8 background-black">
                                <div data-carousel data-carousel-items="1" data-carousel-autoplay="5000">


                             @foreach($testimonials as $testimonial)


                                    <div class="content-wrap">
                                        <div class="star-ratings-css">
                                            <div class="star-ratings-css-top" data-marks="{{$testimonial->stars}}">
                                           @php
                                               $stars=$testimonial->stars;
                                                for($i=1;$i<=$stars;$i++){


                                               @endphp
                                                <i class="fa fa-star" aria-hidden="true"></i>
@php
}
@endphp

                                            </div>
                                            <div class="star-ratings-css-bottom">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p> {!! $testimonial->content !!}</p>
                                        </div>
                                        <div class="portrait-wrapper">
                                            <img class="portrait" src="{{asset("images/$testimonial->image")}}" alt="John Kensington">
                                        </div>
                                        <div class="portrait-owner-name">
                                            <h6>{{$testimonial->name}}</h6>
                                        </div>
                                        <div class="portrait-owner-role">
                                            <p>مشتری</p>
                                        </div>
                                    </div>


                                    @endforeach


                                </div>
                            </div>
                        </div>

					</div><!-- /.row -->
				</div>
			</section>

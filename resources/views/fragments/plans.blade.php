			<section>
				<div class="container">
					<div class="row">


            @foreach($plans as $plan)



						<div class="col-md-3 col-sm-6 col-xs-8 col-md-offset-0 col-sm-offset-0 col-xs-offset-2 top-gap-huge">
							<div class="price price-special">
								<div class="price-header">
									<div class="price-value">
										<div class="circle-wrapper">
											<p class="wrap-value">
												<span class="currency">{{$plan->currency}}</span><span class="value">{{$plan->price}}</span>
											</p>
											<p class="wrap-period">{{$plan->period}}</p>
										</div>
									</div><!-- /.price-value -->
									<h4>{{$plan->title}}</h4>
									<p>{!! $plan->content !!}</p>
								</div><!-- /.price-header -->
								<div class="price-body">
									<div class="price-services">
										<ul>
                                            @foreach($plan->Lists as $list)
											<li><span>{{$list->head}}</span></li>
                                            @endforeach

										</ul>
									</div><!-- /.price-services -->
									<div class="price-apply">
										<a class="btn" href="{{$plan->btn_link}}"> {{$plan->btn_name}}</a>
									</div><!-- /.price-apply -->
								</div><!-- /.price-body -->
							</div><!-- /.price -->
						</div><!-- /.col -->
                        @endforeach


					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>

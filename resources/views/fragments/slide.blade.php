	<section>

				<div id="hero_v1_16_wrapper" data-hero="v1-16" class="rev_slider_wrapper fullwidthbanner-container hero-bg-black overlay-black overmenu-top" data-alias="news-hero41" data-source="gallery">

					<!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
					<div id="hero_v1_16" class="rev_slider fullwidthabanner" style="display: none;" data-version="5.4.1">
						<ul>
							<li data-index="rs-v1_16" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-saveperformance="off">

								<!-- MAIN IMAGE -->
								<img src="{{asset("images/$header->main_image")}}" alt="" data-bgposition="top right" data-kenburns="on" data-duration="60000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="160" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="6" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 1 -->
								<div class="tp-caption rs-parallaxlevel-5 overmenu-content"
									id="slide-v1_16-layer-1"
									data-x="['center','center','center','center']" data-hoffset="[0,0,0,0]"
									data-y="['bottom','bottom','bottom','bottom']" data-voffset="[420,280,220,200]"
									data-width="100%"
									data-whitespace="normal"
									data-type="text"
									data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0;y:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","mask":"x:0;y:0;","ease":"nothing"}]'>

									<div class="container">
										<div class="row">
											<div class="col-md-5 text-center text-md-left">
												<h1 class="color-white font-weight-black">{{$header->title}}</h1>
												<div class="gap-20"></div>
												<p class="color-white">{{$header->content}}</p>
											</div>
										</div>
									</div>

								</div>

								<!-- LAYER NR. 2 -->
								<div class="tp-caption rs-parallaxlevel-1 overmenu-content"
									id="slide-v1_16-layer-2"
									data-x="['center','center','center','center']" data-hoffset="[0,0,0,0]"
									data-y="['bottom','bottom','bottom','bottom']" data-voffset="[240,100,60,40]"
									data-width="[100%, 100%, 560, 100%]"
									data-whitespace="normal"
									data-type="text"
									data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0;y:0;", "speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":2000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"nothing"}]'>



                                    @if($header->show_input)
									<div class="container">
										<div class="row">
											<div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-0 text-center text-sm-left">
												<form action="http://xthemeapollo.us15.list-manage.com/subscribe/post?u=2121b6ecf18fd2770fd40750e&amp;id=102c0b22e4" method="post" name="mc-embedded-subscribe-form" class="validate-form subscribe-form" target="_blank" data-toggle="validator">
													<div class="form-elem input-box color-focus-white border-white placeholder-white">
														<input type="email" name="EMAIL" placeholder="Add Your Eamil Address" value="">
														<input type="hidden" name="b_2121b6ecf18fd2770fd40750e_102c0b22e4" tabindex="-1" value="">
														<div class="elem-icon"><i class="icon-envelope-letter"></i></div>
													</div>
													<button type="submit" name="subscribe" class="hidden-xs btn btn-bg-green btn-border-green btn-color-black">Subscribe</button>
													<button type="submit" name="subscribe" class="hidden-sm hidden-md hidden-lg btn btn-bg-green btn-border-green btn-color-black"><i class="fa fa-check" aria-hidden="true"></i></button>
												</form>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-0 text-center text-sm-left">
												<small class="subscribe-desc">{{$header->subscribe_text}}</small>
											</div>
										</div>
									</div>

								</div>
@endif
								<!-- LAYER NR. 3 -->
								<div class="tp-caption rs-parallaxlevel-10 overmenu-content"
									id="slide-v1_16-layer-3"
									data-x="['center','center','center','center']" data-hoffset="['360','0','0','0']"
									data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
									data-whitespace="normal"
									data-type="image"
									data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"nothing"}]'>

									<img style="margin-right:-450px " data-ww="['538','0','0','0']" data-hh="['735','0','0','0']" width="501" height="735" src="{{asset("images/$header->phone_image")}}" data-no-retina alt="Hero Image">

								</div>
							</li>
						</ul>
					</div>
					<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
				</div><!-- END REVOLUTION SLIDER -->

			</section>

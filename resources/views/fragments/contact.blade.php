			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">

							<div class="contact-section contact-section-3">
								<div class="text-center message-container">
									<h2>{{$contact->title}}</h2>
									<div class="divider std-shortest"></div>
								</div>
								<!-- Map style #1 (silver) -->


								<br>
								<br>

								<div class="row">
									<div class="col-sm-6 col-md-6">

										<form class="validate-form ajax-form" action="#" method="post">

                      <!-- User name, Email, Subject block -->
											<div class="row">
												<div class="form-group col-md-12">
													<div class="form-elem input-box">
														<div class="elem-icon"><i class="icon-user"></i></div>
														<input type="text" name="user-name" placeholder="نام خود را وارد کنید" value="" required>
													</div>
												</div>
												<div class="form-group col-md-12">
													<div class="form-elem input-box">
														<div class="elem-icon"><i class="icon-envelope-letter"></i></div>
														<input type="email" name="email" placeholder="ایمیل خود را وارد کنید" value="" required>
													</div>
												</div>
												<div class="form-group col-md-12">
													<div class="form-elem input-box">
														<div class="elem-icon"><i class="icon-note"></i></div>
														<input type="text" name="subject" placeholder="موضوع" value="" required>
													</div>
												</div>
											</div>
											<!-- #User name, Email, Subject block end -->

											<!-- Message block -->
											<div class="row">
												<div class="form-group col-sm-12">
													<div class="form-elem textarea-box">
														<div class="elem-icon"><i class="fa fa-align-right" aria-hidden="true"></i></div>
														<textarea style="margin-right: 25px"  name="message" rows="8" placeholder="پیام شما..."></textarea>
													</div>
												</div>
											</div>
											<!-- #message block end -->

											<div class="row">
												<div class="col-sm-3">
													<button type="submit" class="send btn btn-bg-green btn-border-green btn-color-black btn-font-bold">ارسال</button>
												</div>
											</div>

										</form>

									</div>
									<div class="col-sm-6 col-md-3">

										<div class="about-company">
											<h6>{{$contact->head}}</h6>
											<p>{!! $contact->about_us !!}</p>
										</div>

										<div class="follow-us">
											<h6>{{$contact->follow_us}} <a href="http://{{$contact->website}}">{{$contact->website}}</a></h6>
										</div>

										<div class="social-icons">
                                            @foreach($contact->Follow as $follow)
											<a href="{{$follow->link}}"><i class="fa {{$follow->font}}" aria-hidden="true"></i></a>
                                            @endforeach
										</div>

										<br>

									</div>
									<div class="col-sm-6 col-md-3">
										<h6>اطلاعات تماس</h6>

										<div class="company-location">
											<div class="icon"><i class="icon-location-pin"></i></div>
											<div class="description"><p>{{$contact->address}}</p></div>
											<div class="clearfix"></div>
										</div>

										<div class="support-smartphone">
											<div class="icon"><i class="icon-screen-smartphone"></i></div>
											<div class="description"><a href="tel:{{$contact->phone}}">{{$contact->phone}}</a></div>
											<div class="clearfix"></div>
										</div>

										<div class="support-phone">
											<div class="icon"><i class="icon-call-out"></i></div>
											<div class="description"><a href="tel:{{$contact->mobile}}">{{$contact->mobile}}</a></div>
											<div class="clearfix"></div>
										</div>

										<div class="support-email">
											<div class="icon"><i class="icon-envelope-letter"></i></div>
											<div class="description"><a href="mailto:{{$contact->link}}">{{$contact->link}}</a></div>
											<div class="clearfix"></div>
										</div>

										<div class="company-site">
											<div class="icon"><i class="icon-screen-smartphone"></i></div>
											<div class="description"><a href="http://{{$contact->website}}">{{$contact->website}}</a></div>
											<div class="clearfix"></div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

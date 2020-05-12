			<footer>
				<div class="footer-wrap footer-5">
					<div class="container">
						<div class="row">
							<div class="col-md-6 text-center text-md-left">
								<div class="copyright">&copy; Copyright 2020-2021 TAKAMOL  |  Created with <i class="fa fa-heart" aria-hidden="true"></i> Peyman Nasirian</div>
								<div class="social-icon-wrap">
                                    @foreach($contact->Follow as $follow)
									<a href="{{$follow->link}}"><i class="fa {{$follow->font}}" aria-hidden="true"></i></a>

                                    @endforeach
								</div>
							</div>
							<div class="col-md-6 text-center text-md-right">
								<div class="footer-link">
                                    @foreach($footers as $footer)
									<a href="{{$footer->link}}">{{$footer->title}}</a>
                                    @endforeach
								</div>
                                @foreach($footers as $footer)
                                    @if($footer->id==1)
								<a class="footer-logo" href="{{$footer->web_link}}">
									<img src="{{asset("images/$footer->logo")}}" alt="logo">
								</a>
                                    @else
                                        @break
                                    @endif
                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</footer>

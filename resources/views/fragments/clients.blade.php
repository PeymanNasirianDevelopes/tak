			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<div class="clientbox clientbox-1 clientbox-large">
								<div data-carousel data-carousel-autoplay="5000">
                                    @foreach($clients as $client)
									<div><a href="{{$client->link}}"><img src="{{asset("images/$client->image")}}" alt="{{$client->company_name}}"></a></div>
                                    @endforeach

								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

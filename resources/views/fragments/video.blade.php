
@if($video->show)

<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">

							<div style="background-image: url({{asset("images/$video->bg_image")}})" class="video-section video-section-4">
								<div class="lightbox-video-bg-overlay text-center">
									<a class="lightbox-video" href="{{$video->link}}" title="{{$video->title}}">
										<i class="fa fa-play-circle-o"></i><span>{{$video->btn_name}}</span>
									</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
@endif

			<section>
				<div class="container">

                    @foreach($abouts as $about)
                        @if($loop->first)
                            @php
                            $div_class="row boxed-content-fuid-back boxed-fluid-left-1";
                                $second_div_class="col-sm-6 col-sm-offset-6 boxed-content boxed-bg-green boxed-overlay-sm";
                                $h2_class="boxed-text-dark-blue";
                                $p_class="boxed-text-dark-blue";
                            @endphp
                        @else
                            @php
                            $div_class="row boxed-content-fuid-back boxed-fluid-right-1";
                                $second_div_class="col-sm-6 boxed-content boxed-bg-black boxed-overlay-sm";
                                 $h2_class="h-green";
                                 $p_class="";
                            @endphp
                            @endif

					<!-- left image -->
					<div style="background-image:url({{asset("images/$about->bg_image")}}) " class="{{$div_class}}">
						<div class="{{$second_div_class}}">
							<h2 class="{{$h2_class}}">{{$about->title}}</h2>
							<p class="{{$p_class}}">{!! $about->content !!}</p>
						</div>
					</div><!-- /.row -->

                        @endforeach

				</div><!-- /.container -->
			</section>

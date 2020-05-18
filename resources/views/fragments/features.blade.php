
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="headline-10 text-center">
                    <i class="{{$feature->font}} h-green"></i>
                    <h2>{{$feature->title}}</h2>
                    <h2 class="h-extra-large">{{$feature->h1}}</h2>
                    <p>{!! $feature->short_text !!}</p>
                </div>

            </div>
        </div>
    </div>
</section>

<br>
<br>




<section>
				<div class="container">

					<div class="featured-content featured-content-3">
						<div class="row">
							<div class="col-md-4 col-sm-12 text-center text-md-left" data-animation="fadeIn">
								<img class="img-maxwidth" src="{{asset("images/$feature->main_image")}}" alt="Featured Content Image">
							</div>



@foreach($feature->Tasks as $task)


                                    <div style="text-align: right !important;" dir="rtl" align="right" class="col-md-4 col-sm-6">
                                        <div class="row-top-gap"></div>
                                        <div class="icon-box icon-box-base text-sm-left text-xs-center" data-animation="fadeIn">
                                            <div class="row">
                                                <div style="text-align: right !important;" class="col-md-3 col-sm-3">
                                                    <i class="{{$task->font}} icon-size-48"></i>
                                                </div>
                                                <div style="text-align: right !important;" class="col-md-9 col-sm-9 reduce-padding-left">
                                                    <h4>{{$task->title}}</h4>
                                                    <p style="text-align: right !important;">
                                                        {!! $task->content  !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

@endforeach








                            </div>







						</div>
					</div>
				</div>
            </section>

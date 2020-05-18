			<section>
				<div class="container">
					<div class="row">

						<div class="col-md-12">
							<!-- Tab with image content - dark style -->
							<section>
								<div class="tab tab-icon-header tab-icon-header-light">
									<ul  class="nav nav-tabs responsive" id="tab-text-header-light-2">

                                        @foreach($tabs as $tab)
                                        @if($tab->id==1)
										<li style="background-color: #1d1c1b !important" class="active">
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
                       {{$tab->content}}
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


					</div><!-- /.row -->
				</div>
			</section>

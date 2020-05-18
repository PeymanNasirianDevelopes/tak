			<section>
				<div class="container">

					<div class="row">

                        @foreach($circles as $circle)

                            <div class="col-sm-3 text-center">

                                <div class="prgbar-font-lg" data-prgbar="circle" data-val="{{$circle->progress}}"  data-color="#{{$circle->class}}" data-width="20"></div>

                                <div class="prgbar-row-mobilegap">{{$circle->title}}</div>
                            </div>
                        @endforeach
					</div>
				</div>
			</section>


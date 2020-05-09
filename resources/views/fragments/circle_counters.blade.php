			<section>
				<div class="container">

					<div class="row">

                        @foreach($circles as $circle)
						<div class="col-sm-2 {{$circle->class}} text-center">
							<div class="prgbar-font-sm" data-prgbar="circle" data-val="{{$circle->progress}}" data-color="#8b78ff" data-size="124"></div>
							<div class="prgbar-row-mobilegap">{{$circle->title}}</div>
						</div>

                        @endforeach
					</div>
				</div>
			</section>

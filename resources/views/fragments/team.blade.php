<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="headline-19 text-center">
                    <i class="icon-layers h-green"></i>
                    <h2 class="h-large">تیم تکامل</h2>
                </div>

            </div>
        </div>
    </div>
</section>


<section>
    <div dir="ltr" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="team-carousel">
                    <div  data-carousel data-carousel-items="4">
                        <!-- team member col 4-1 -->


                        @foreach($teams as $team)
                        <div class="team-member team-member-dark-overlay team-member-dark-overlay-sm team-member-padding-15">
                            <div class="member-figure">
                                <a href=""><img class="img-responsive" src="{{asset("images/$team->image")}}" alt="{{$team->name}}"></a>
                                <div class="overlay text-center">
                                    <a class="member-name" href="">{{$team->name}}</a>
                                    <p class="member-role">{{$team->job}}</p>
                                    <div class="divider std-shortest divider-color-light-gray"></div>
                                    <div class="social-links">
                                        @foreach($contact->Follow as $follow)
                                            <a href="{{$follow->link}}"><i class="fa {{$follow->font}}" aria-hidden="true"></i></a>

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
        <div class="row"></div><!-- /.row -->
    </div>
</section>

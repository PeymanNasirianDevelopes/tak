<!DOCTYPE html>
<html dir="ltr" lang="en-US">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8;charset=utf-8">
		<meta name="author" content="X-ThemeApollo">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/png" href={{asset("images/fav_icon.png")}}"/>

		<title>استدیو خانه عکس و طرح - تکامل تبلیغ</title>

		<!-- Google fonts -->
		<link href="{{asset("css/css00000.css")}}" rel="stylesheet">
		<link href="{{asset("css/font-awe.css")}}" rel="stylesheet">
		<link href="{{asset("css/fonts.css")}}" rel="stylesheet">
		<link href="{{asset("css/simple-l.css")}}" rel="stylesheet">

		<!-- CSS -->
		<link rel="stylesheet" href="{{asset("css/bootstra.css")}}">

		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="{{asset("css/settings.css")}}">
		<link rel="stylesheet" type="text/css" href="{{asset("css/layers00.css")}}">
		<link rel="stylesheet" type="text/css" href="{{asset("css/navigati.css")}}">

		<link rel="stylesheet" href="{{asset("css/animate0.css")}}">
		<link rel="stylesheet" href="{{asset("css/hover000.css")}}">
		<link rel="stylesheet" href="{{asset("css/owl00000.css")}}">
		<link rel="stylesheet" href="{{asset("css/mediaele.css")}}">
		<link rel="stylesheet" href="{{asset("css/magnific.css")}}" />
		<link rel="stylesheet" href="{{asset("css/style000.css")}}">
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100354709-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

	<body dir="rtl" class="x-menu-fixed-top" data-preload-progress>

		<div class="wrapper component">

			<!-- Header -->
@include("fragments.header")

			<!--
				This component page includes various kinds of Dropcaps, Ampersand, Text Highlights, Tooltips<.
			-->

			<!-- Hero #1 -->
		@include("fragments.slide")
			<!-- /Hero #1 -->

			<!-- boxed content with icons 3 columns -->
@include("fragments.services")

			<br>
			<br>
			<br>

			<!-- boxed content / text + image -->
@include ("fragments.about")

			<br>
			<br>
			<br>

			<!-- Headline - 10 -->


			<!-- Featured Content #3 -->
@include ("fragments.features")

			<!-- / Featured Content #3 -->

			<br>
			<br>
			<br>

			<!-- CTA BOX - 8 -->
@include("fragments.make")

			<br>
			<br>
			<br>

			<!-- Circle Counters #4 -->
@include ("fragments.circle_counters")
			<!-- / Circle Counters #4 -->

			<br>
			<br>

			<!-- TABS -->
			<!-- Tab with image content -->
@include ("fragments.tab")

			<br>
			<br>
			<br>

			<!-- Featured Content #10 -->
@include ("fragments.features_2")
			<!-- / Featured Content #10 -->

			<br>
			<br>
			<br>

			<!-- VIDEO SECTION - 4 -->
	@include ("fragments.video")

			<br>
			<br>
			<br>

			<!-- Pricing table #5 / 4 columns -->
			<!-- class="price-special" -->
@include ("fragments.plans")
			<!-- #pricing table #5 / 4 columns -->

			<br>
			<br>
			<br>

			<!-- CTA BOX - 6 -->
            @if($landing->show)
			<section>
				<div class="cta cta-box-6 cta-bg-cover-black" data-parallax-type="fixed" data-parallax-img="{{asset("images/$landing->image")}}">
					<div class="cta-wrap">
						<div class="headline-6 text-center" data-animation="fadeIn">
							<h2 class="h-extra-large h-white">{{$landing->title}}</h2>
							<div class="divider styled-1"></div>
							<p class="h-white">{!! $landing->content !!}</p>
						</div>
						<div class="btn-wrap text-center" data-animation="fadeIn">
							<a class="btn btn-appstore btn-apple btn-white" href=""></a>
							<a class="btn btn-appstore btn-google btn-white" href=""></a>
						</div>
					</div>
				</div>
			</section>

			<br>
			<br>
			<br>
@endif
			<!-- client Boxes #1 -->
@include ("fragments.clients")
			<!-- / client Boxes #1 -->

			<br>
			<br>
			<br>
            @include ("fragments.team")
            <br>
            <br>
            <br>
			<!-- CONTACT SECTION - 3 -->
@include ("fragments.contact")

			<br>
			<br>
			<br>

			<!-- footer -->
@include ("fragments.footer")

		</div>

		<!-- JavaScript -->
		<script type="text/javascript" src="{{asset("js/jquery00.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/jquery01.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/js000000.js")}}" charset="utf-8"></script><!-- Add google map API -->
		<script type="text/javascript" src="{{asset("js//bootstra.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/bootstrb.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/gmaps000.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/jquery02.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/jquery03.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/jarallax.js")}}"></script>
		<script type="text/javascript" src="{{asset("js/jquery04.js")}}"></script>
		<script type="text/javascript" src="{{asset("js/responsi.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/owl00000.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/mediaele.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/jquery05.js")}}" charset="utf-8"></script>

		<script type="text/javascript" src="{{asset("js/form0000.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/gmaps-de.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/gmaps-mi.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/message0.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/contact0.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/nav00000.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/parallax.js")}}"></script>
		<script type="text/javascript" src="{{asset("js/text_ani.js")}}"></script>
		<script type="text/javascript" src="{{asset("js/carousel.js")}}" charset="utf-8"></script>

		<!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="{{asset("js/jquery06.js")}}"></script>
		<script type="text/javascript" src="{{asset("js/jquery07.js")}}"></script>

		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
		<script type="text/javascript" src="{{asset("js/revoluti.js")}}"></script>
		<script type="text/javascript" src="{{asset("js/revolutj.js")}}"></script>
		<script type="text/javascript" src="{{asset("js/revolutk.js")}}"></script>
		<script type="text/javascript" src="{{asset("js/revolutl.js")}}"></script>
		<script type="text/javascript" src="{{asset("js/revolutm.js")}}"></script>
		<script type="text/javascript" src="{{asset("js/revolutn.js")}}"></script>
		<script type="text/javascript" src="{{asset("js/revoluto.js")}}"></script>
		<script type="text/javascript" src="{{asset("js/revolutp.js")}}"></script>
		<script type="text/javascript" src="{{asset("js/revolutq.js")}}"></script>

		<script type="text/javascript" src="{{asset("js/reveal_a.")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/hero0000.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/mce00000.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/form0000.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/nav_offc.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/jquery08.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/progress.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/counter0.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/progrest.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/testimon.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/preloade.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/all00000.js")}}" charset="utf-8"></script>
		<script type="text/javascript" src="{{asset("js/video000.js")}}" charset="utf-8"></script>

	</body>
</html>

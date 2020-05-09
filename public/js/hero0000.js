/*
 * Hero
 */

(function($) {
	
	// use strict
	"use strict";

	$.hero = function() {

		// Check possibility to use revolution slider
		var possibility = true;
		$("[data-hero]").each(function(index) {
			if ($(this).children(".rev_slider").revolution == undefined) {

				// make new id
				var elem_id = $(this).attr("id")? $(this).attr("id"): "rev_slider_" + index;

				// add new id
				$(this).attr("id", elem_id);

				// print error
				revslider_showDoubleJqueryError("#" + elem_id);

				// reset possibility
				possibility = false;
			}
		});

		// end if error
		if (!possibility) {
			return;
		}


		/**
		 * START REVOLUTION SLIDER - FULL VERSION
		 */

		// HERO 1
		$("[data-hero=\"1\"] .rev_slider").show().revolution({
			sliderLayout: "fullscreen",
			responsiveLevels: [1920,1025,481],
			visibilityLevels: [1920,1025,481],
			gridwidth: [1920,1025,481],
			gridheight: [900,768,560],
      lazyType:"none",
			parallax: {
				type: "scroll"
			},
			navigation: {
				onHoverStop:"off"
			}
		});


		/**
		 * START REVOLUTION SLIDER - SINGLE VERSION
		 */

		// HERO #V1-1
		$("[data-hero=\"v1-1\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,1023,778,479,359],
			visibilityLevels: [1239,1023,778,479,359],
			gridwidth: [1239,1023,778,479,359],
			gridheight: [720,550,560,560, 500],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V1-2
		$("[data-hero=\"v1-2\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,359],
			gridwidth: [1239,991,767,479,359],
			gridheight: [640,600,600,580,540],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V1-3	
		$("[data-hero=\"v1-3\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,359],
			gridwidth: [1239,991,767,479,359],
			gridheight: [900,600,660,500, 480],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V1-4
		$("[data-hero=\"v1-4\"] .rev_slider").show().revolution({
			sliderLayout: "fullscreen",
			responsiveLevels: [1239,991,767,479],
			visibilityLevels: [1239,991,767,479],
			gridwidth: [1239,991,767,479],
			gridheight: [900,600,640,640],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V1-5
		$("[data-hero=\"v1-5\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,359],
			gridwidth: [1239,991,767,479,359],
			gridheight: [900,540,640,560,480],
			lazyType: "none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V1-6 demo
		$("[data-hero=\"v1-6-demo\"] .rev_slider").show().revolution({
			sliderLayout: "fullscreen",
			responsiveLevels: [1919,1119,991,767,479],
			visibilityLevels: [1919,1119,991,767,479],
			gridwidth: [1919,1119,991,767,479],
			gridheight: [900,900,744,576,360],
      lazyType:"none",
			parallax: {
				type: "3D",
        origo:"slidercenter",
        ddd_shadow: "off",
        ddd_bgfreeze: "on",
        ddd_overflow: "hidden",
        ddd_layer_overflow: "visible",
			}
		});

		// HERO #V1-6
		$("[data-hero=\"v1-6\"] .rev_slider").show().revolution({
			sliderLayout: "fullscreen",
			responsiveLevels: [1920,1025],
			visibilityLevels: [1920,1025],
			gridwidth: [1920,1025],
			gridheight: [900,768],
      lazyType:"none",
			parallax: {
				type: "3D",
        origo: "slidercenter",
        levels: [2,4,6,8,10,12,14,16,18,20,22,24,26,28,30],
        ddd_shadow: "off",
        ddd_bgfreeze: "off",
        ddd_overflow: "hidden",
        ddd_layer_overflow: "visible"
			}
		});

		// HERO #V1-7
		$("[data-hero=\"v1-7\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,359],
			gridwidth: [1239,991,767,479,359],
			gridheight: [900,600,560,460,480],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V1-8
		$("[data-hero=\"v1-8\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,359],
			gridwidth: [1239,991,767,479,359],
			gridheight: [900,600,480,460,480],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V1-9
		$("[data-hero=\"v1-9\"] .rev_slider").show().revolution({
			responsiveLevels: [1119,991,767,479],
			visibilityLevels: [1119,991,767,479],
			gridwidth: [1119,991,767,479],
			gridheight: [900,700,640,580],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V1-10
		$("[data-hero=\"v1-10\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,359],
			gridwidth: [1239,991,767,479,359],
			gridheight: [600,500,480,520,540],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V1-11
		$("[data-hero=\"v1-11\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479],
			visibilityLevels: [1239,991,767,479],
			gridwidth: [1239,991,767,479],
			gridheight: [900,740,800,720],
      lazyType:"none",
			parallax: {
				type: "scroll"
			},			
			scrolleffect: {
				blur:"on",
				maxblur:"20",
				on_slidebg:"on",
				direction:"top",
				multiplicator:"2",
				multiplicator_layers:"2",
				tilt:"10",
				disable_on_mobile:"off",
			},
		});

		// HERO #V1-12-demo
		$("[data-hero=\"v1-12-demo\"] .rev_slider").show().revolution({
			sliderLayout: "fullscreen",
			responsiveLevels: [1919,1119,991,767,479],
			visibilityLevels: [1919,1119,991,767,479],
			gridwidth: [1919,1119,991,767,479],
			gridheight: [900,700,600,576,540],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V1-12
		$("[data-hero=\"v1-12\"] .rev_slider").show().revolution({
			sliderLayout: "fullscreen",
			responsiveLevels: [1920,1025,481],
			visibilityLevels: [1920,1025,481],
			gridwidth: [1920,1025,481],
			gridheight: [900,768,560],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V1-12
		$("[data-hero=\"v1-17\"] .rev_slider").show().revolution({
			responsiveLevels: [1119,991,767,479],
			visibilityLevels: [1119,991,767,479],
			gridwidth: [1119,991,767,479],
			gridheight: [900,700,640,540],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V1-13
		$("[data-hero=\"v1-13\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479],
			visibilityLevels: [1239,991,767,479],
			gridwidth: [1239,991,767,479],
			gridheight: [900,680,640,640],
      lazyType:"none",
			parallax: {
				type: "scroll"
			},			
			scrolleffect: {
				blur:"on",
				maxblur:"30",
				on_slidebg:"on",
				direction:"top",
				multiplicator:"2",
				multiplicator_layers:"2",
				tilt:"10",
				disable_on_mobile:"off",
			},
		});

		// HERO #V1-14
		var hero_v1_14 = $("[data-hero=\"v1-14\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479],
			visibilityLevels: [1239,991,767,479],
			gridwidth: [1239,991,767,479],
			gridheight: [900,680,640,640],
      lazyType:"none",
			parallax: {
				type: "scroll"
			},
			scrolleffect: {
				blur:"on",
				maxblur:"30",
				on_slidebg:"on",
				direction:"top",
				multiplicator:"2",
				multiplicator_layers:"2",
				tilt:"10",
				disable_on_mobile:"off",
			},
		});

		// COUNTDOWN
		var countdown_val = parseInt($("[data-hero=\"v1-14\"]").data("countdown"));

		if (countdown_val) {
			var targetdate =  new Date().getTime() + countdown_val, // i.e. '2015/12/31 24:00',
	    		slidechanges = [
	          {days: 0, hours: 0, minutes: 0, seconds: 0, slide: 0},
	          {days: 0, hours: 0, minutes: 0, seconds: 0, slide: 0}
	        ],
			    quickjump = 1000,   
			    api = hero_v1_14;

			var currentd, currenth, currentm, currents;

			var animateAndUpdate = function(o, nt, ot) {
				if (ot==undefined) {    
					o.html(nt);
				} else {      
					if (o.css("opacity")>0) {
						punchgs.TweenLite.fromTo(o,0.45,
							{autoAlpha: 1, rotationY: 0, scale: 1},
							{autoAlpha: 0, rotationY: -180, scale: 0.5, ease: punchgs.Back.easeIn, onComplete:function() {
									o.html(nt);
								}
							}
						);

						punchgs.TweenLite.fromTo(o,0.45,
							{autoAlpha: 0, rotationY: 180, scale: 0.5},
							{autoAlpha: 1, rotationY: 0, scale: 1, ease: punchgs.Back.easeOut, delay: 0.5 }
						);
					} else {
						o.html(nt);
					}
				}
				return nt;
			}

			var countprocess = function(event) {

			  var newd = event.strftime('%D'),
			      newh = event.strftime('%H'),
			      newm = event.strftime('%M'),
			      news = event.strftime('%S');
			  if (newd != currentd) currentd = animateAndUpdate(jQuery('#c_days'),newd,currentd);
			  if (newh != currenth) currenth = animateAndUpdate(jQuery('#c_hours'),newh,currenth);
			  if (newm != currentm) currentm = animateAndUpdate(jQuery('#c_minutes'),newm,currentm);
			  if (news != currents) currents = animateAndUpdate(jQuery('#c_seconds'),news,currents);

			  jQuery.each(slidechanges,function(i,obj) {
			    var dr = obj.days == undefined || obj.days >= newd,
			        hr = obj.hours == undefined || obj.hours >= newh,
			        mr = obj.minutes == undefined || obj.minutes >= newm,
			        sr = obj.seconds == undefined || obj.seconds >= news;

		      if (dr && hr && mr && sr && !obj.changedown) {
		        api.revshowslide(obj.slide);
		        obj.changedown = true;
		      }
			  })
			}

			api.countdown(targetdate, countprocess);
		}

		// HERO #V1-15
		$("[data-hero=\"v1-15\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,359],
			gridwidth: [1239,991,767,479,359],
			gridheight: [780,600,640,480,480],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V1-16
		$("[data-hero=\"v1-16\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479],
			visibilityLevels: [1239,991,767,479],
			gridwidth: [1239,991,767,479],
			gridheight: [900,680,680,680],
      lazyType:"none",
			parallax: {
				type: "scroll"
			},			
			scrolleffect: {
				blur:"on",
				maxblur:"30",
				on_slidebg:"on",
				direction:"top",
				multiplicator:"2",
				multiplicator_layers:"2",
				tilt:"10",
				disable_on_mobile:"off",
			},
		});

		// HERO #V1-18
		$("[data-hero=\"v1-18\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479],
			visibilityLevels: [1239,991,767,479],
			gridwidth: [1239,991,767,479],
			gridheight: [900,600,560,480],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V1-19
		$("[data-hero=\"v1-19\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479],
			visibilityLevels: [1239,991,767,479],
			gridwidth: [1239,991,767,479],
			gridheight: [900,680,520,520],
      lazyType:"none",
			parallax: {
				type: "scroll"
			},			
			scrolleffect: {
				blur:"on",
				maxblur:"30",
				on_slidebg:"on",
				direction:"top",
				multiplicator:"2",
				multiplicator_layers:"2",
				tilt:"10",
				disable_on_mobile:"off",
			},
		});

		// HERO #V1-20
		$("[data-hero=\"v1-20\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,359],
			gridwidth: [1239,991,767,479,359],
			gridheight: [900,600,600,460,480],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V2-1
		$("[data-hero=\"v2-1\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,359],
			gridwidth: [1239,991,767,479,359],
			gridheight: [700,600,480,450, 480],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V2-2
		$("[data-hero=\"v2-2\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,359],
			gridwidth: [1239,991,767,479,359],
			gridheight: [700,540,480,450, 480],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V2-3
		$("[data-hero=\"v2-3\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,359],
			gridwidth: [1239,991,767,479,359],
			gridheight: [640,580,480,480,480],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V2-4
		$("[data-hero=\"v2-4\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,359],
			gridwidth: [1239,991,767,479,359],
			gridheight: [640,580,480,480,480],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V2-5
		$("[data-hero=\"v2-5\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,359],
			gridwidth: [1239,991,767,479,359],
			gridheight: [900,600,640,520,540],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V2-6
		$("[data-hero=\"v2-6\"] .rev_slider").show().revolution({
			responsiveLevels: [1119,991,767,479],
			visibilityLevels: [1119,991,767,479],
			gridwidth: [1119,991,767,479],
			gridheight: [900,700,640,640],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V2-7
		$("[data-hero=\"v2-7\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479],
			visibilityLevels: [1239,991,767,479],
			gridwidth: [1239,991,767,479],
			gridheight: [460,420,480,540],
      lazyType:"none",
      overflow: "visible",
			parallax: {
				type: "3D",
        origo:"slidercenter",
        speed:1000,
        levels:[1,25],
				ddd_shadow: "off",
        ddd_bgfreeze: "off",
        ddd_overflow: "visible",
        ddd_layer_overflow: "visible",
			},
		});

		// HERO #V2-8
		$("[data-hero=\"v2-8\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,1023,767,479,359],
			visibilityLevels: [1239,1023,767,479,359],
			gridwidth: [1239,1023,767,479,359],
			gridheight: [660,550,660,560,480],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V2-9
		$("[data-hero=\"v2-9\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479],
			visibilityLevels: [1239,991,767,479],
			gridwidth: [1239,991,767,479],
			gridheight: [756,680,680,640],
      lazyType:"none",
			parallax: {
				type: "scroll"
			},			
			scrolleffect: {
				blur:"on",
				maxblur:"30",
				on_slidebg:"on",
				direction:"top",
				multiplicator:"2",
				multiplicator_layers:"2",
				tilt:"10",
				disable_on_mobile:"off",
			},
		});

		// HERO #V2-10
		$("[data-hero=\"v2-10\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479],
			visibilityLevels: [1239,991,767,479],
			gridwidth: [1239,991,767,479],
			gridheight: [460,420,480,540],
      lazyType:"none",
      overflow: "visible",
			parallax: {
				type: "3D",
        origo:"slidercenter",
        speed:1000,
        levels:[1,25],
				ddd_shadow: "off",
        ddd_bgfreeze: "off",
        ddd_overflow: "visible",
        ddd_layer_overflow: "visible",
			},
		});

		// HERO #V2-11
		$("[data-hero=\"v2-11\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479],
			visibilityLevels: [1239,991,767,479],
			gridwidth: [1239,991,767,479],
			gridheight: [750,680,680,680],
      lazyType:"none",
			parallax: {
				type: "scroll"
			},			
			scrolleffect: {
				grayscale:"on",
				maxblur:"30",
				on_slidebg:"on",
				direction:"top",
				multiplicator:"2",
				multiplicator_layers:"2",
				tilt:"10",
				disable_on_mobile:"off",
			},
		});
		
		// HERO #V2-12
		$("[data-hero=\"v2-12\"] .rev_slider").show().revolution({
			responsiveLevels: [1919,1119,991,767,479],
			visibilityLevels: [1919,1119,991,767,479],
			gridwidth: [1919,1119,991,767,479],
			gridheight: [900,600,500,560,560],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V2-13
		$("[data-hero=\"v2-13\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,335960],
			gridwidth: [1239,991,767,479,359],
			gridheight: [900,600,560,480,480],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V2-14
		$("[data-hero=\"v2-14\"] .rev_slider").show().revolution({
			responsiveLevels: [1239,991,767,479,359],
			visibilityLevels: [1239,991,767,479,359],
			gridwidth: [1239,991,767,479,359],
			gridheight: [660,600,560,460,480],
      lazyType:"none",
			parallax: {
				type: "scroll"
			}
		});

		// HERO #V10-1
		var hero_v10_1 = $("[data-hero=\"v10-1\"] .rev_slider").show().revolution({
			sliderType:"hero",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:9000,
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,768,480],
			gridheight:[768,768,960,720],
			lazyType:"none",
			scrolleffect: {
				blur:"on",
				maxblur:"30",
				on_slidebg:"on",
			},
			parallax: {
				type:"scroll",
				origo:"enterpoint",
				speed:400,
				speedbg:0,
				speedls:0,
				levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
			},
			shadow:0,
			spinner:"spinner0",
			autoHeight:"off",
			fullScreenAutoWidth:"off",
			fullScreenAlignForce:"off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				disableFocusListener:false,
			}
		});

		// COUNTDOWN
		var countdown_val = parseInt($("[data-hero=\"v10-1\"]").data("countdown"));

		if (countdown_val) {
			var targetdate =  new Date().getTime() + countdown_val, // i.e. '2015/12/31 24:00',
	    		slidechanges = [
	          {days: 0, hours: 0, minutes: 0, seconds: 0, slide: 0},
	          {days: 0, hours: 0, minutes: 0, seconds: 0, slide: 0}
	        ],
			    quickjump = 1000,   
			    api = hero_v10_1;

			var currentd, currenth, currentm, currents;

			var animateAndUpdate = function(o, nt, ot) {
				if (ot==undefined) {    
					o.html(nt);
				} else {      
					if (o.css("opacity")>0) {
						punchgs.TweenLite.fromTo(o,0.45,
							{autoAlpha: 1, rotationY: 0, scale: 1},
							{autoAlpha: 0, rotationY: -180, scale: 0.5, ease: punchgs.Back.easeIn, onComplete:function() {
									o.html(nt);
								}
							}
						);

						punchgs.TweenLite.fromTo(o,0.45,
							{autoAlpha: 0, rotationY: 180, scale: 0.5},
							{autoAlpha: 1, rotationY: 0, scale: 1, ease: punchgs.Back.easeOut, delay: 0.5 }
						);
					} else {
						o.html(nt);
					}
				}
				return nt;
			}

			var countprocess = function(event) {

			  var newd = event.strftime('%D'),
			      newh = event.strftime('%H'),
			      newm = event.strftime('%M'),
			      news = event.strftime('%S');
			  if (newd != currentd) currentd = animateAndUpdate(jQuery('#c_days'),newd,currentd);
			  if (newh != currenth) currenth = animateAndUpdate(jQuery('#c_hours'),newh,currenth);
			  if (newm != currentm) currentm = animateAndUpdate(jQuery('#c_minutes'),newm,currentm);
			  if (news != currents) currents = animateAndUpdate(jQuery('#c_seconds'),news,currents);

			  jQuery.each(slidechanges,function(i,obj) {
			    var dr = obj.days == undefined || obj.days >= newd,
			        hr = obj.hours == undefined || obj.hours >= newh,
			        mr = obj.minutes == undefined || obj.minutes >= newm,
			        sr = obj.seconds == undefined || obj.seconds >= news;

		      if (dr && hr && mr && sr && !obj.changedown) {
		        api.revshowslide(obj.slide);
		        obj.changedown = true;
		      }
			  })
			}

			api.countdown(targetdate, countprocess);
		}

		//////////
	};
})(jQuery);
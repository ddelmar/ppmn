// ---------------------------------------------------------------------
// JSLint options.
// ---------------------------------------------------------------------

/*global $, matchMedia*/
/*jslint browser: true, nomen: true, plusplus: true */


(function () {
    "use strict";


    // Assign some variables.
    var header              = $('body > header'),
        nav_tab             = $('.nav-tab'),
        nav_link            = $('.slide-link'),
        nav_link_in_header  = $('header .slide-link'),
        page_load_slide     = 0,
        rotation_value      = 0,
        creative_video      = $('.creative-video'),
        hash                = '',
        slides              = ['home', 'about-us', 'mobile-and-online', 'mobile-targeting', 'online-targeting', 'creative', 'closed-loop-offers', 'news-and-events'],
        preloaded_1x_images = [
            '/_/media/main-nav-tab-inverted.png'
        ],
        preloaded_2x_images = [
            '/_/media/main-nav-tab-inverted-2x.png'
        ];


    // ---------------------------------------------------------------------
    // Sometimes you just need to pre-load some images. Check the variable
    // arrays, above, to see/edit what's being pre-loaded.
    // ---------------------------------------------------------------------


    // Pre-load 'preloaded_1x_images' only when the user's display's pixel-density is 1.9x or below.
    if (matchMedia('only screen and (-webkit-max-device-pixel-ratio:1.9), only screen and (max--moz-device-pixel-ratio:1.9), only screen and (-o-max-device-pixel-ratio:1.9/1), only screen and (max-device-pixel-ratio:1.9), only screen and (max-resolution:190dpi), only screen and (max-resolution:1.9dppx)').matches) {
        $(preloaded_1x_images).each(function () {
            $('<img />')[0].src = this;
        });
    }

    // Pre-load 'preloaded_2x_images' only when the user's display's pixel-density is 2x or above.
    if (matchMedia('only screen and (-webkit-min-device-pixel-ratio:2), only screen and (min--moz-device-pixel-ratio:2), only screen and (-o-min-device-pixel-ratio:2/1), only screen and (min-device-pixel-ratio:2), only screen and (min-resolution:192dpi), only screen and (min-resolution:2dppx)').matches) {
        $(preloaded_2x_images).each(function () {
            $('<img />')[0].src = this;
        });
    }


    // ---------------------------------------------------------------------
    // Inactive things. Commonly used on anchors that should do anything
    // when clicked.
    // ---------------------------------------------------------------------


    // Prevent the default behavior of anything that has a class of inactive.
    $('.inactive').click(function (e) {
        e.preventDefault();
    });


    // ---------------------------------------------------------------------
    // Main navigation behavior(s).
    // ---------------------------------------------------------------------


    // Add a class of tab-in-view and with-animation to the header *after* 1000 milliseconds
    setTimeout(function () {
        header.addClass('tab-in-view with-animation');
    }, 1200);

    // When the nav_tab is clicked
    nav_tab.click(function () {

        // Toggle the class tab-in-view on/off of the header
        header.toggleClass('tab-in-view');

        // Toggle the class all-in-view on/off of the header
        header.toggleClass('all-in-view');

        // Remove the class with-animation
        header.removeClass('with-animation');
    });

    // When a nav_link is clicked
    nav_link_in_header.click(function () {

        // Toggle the class tab-in-view on/off of the header
        header.toggleClass('tab-in-view');

        // Toggle the class all-in-view on/off of the header
        header.toggleClass('all-in-view');

        // Remove the class with-animation
        header.removeClass('with-animation');
    });

	// Close the nav when you click on "content"
	$(".content").click(function(){
		if($("header").hasClass("all-in-view")){
			// Toggle the class tab-in-view on/off of the header
	        header.toggleClass('tab-in-view');

	        // Toggle the class all-in-view on/off of the header
	        header.toggleClass('all-in-view');

	        // Remove the class with-animation
	        header.removeClass('with-animation');
		}
	});

    // ---------------------------------------------------------------------
    // Modal(s) rules.
    // ---------------------------------------------------------------------


    $('.modal-link').leanModal();


    // ---------------------------------------------------------------------
    // Element rotation rules.
    // ---------------------------------------------------------------------

    // This *if* makes sure its contents aren't executed until the viewport is 64em (1024px) or wider
    if (matchMedia('only screen and (min-width:64em)').matches) {

        // Immediately rotate the element with the class of flipped-180 by 180 degrees
        $('.flipped-180').rotate(180);

        // Target the span within the element that has a class of rotate-trigger
        $('.rotate-trigger > span').rotate({
            bind: {

                // when it's clicked...
                click: function () {

                    // set the rotation value to whatever it is at the moment *plus* 180
                    rotation_value += 180;

                    // rotate the element that has a class of rotatable, and rotate it by the above rotation_value (180)
                    $('.rotatable').rotate({
                        animateTo: rotation_value,
                        duration: 300
                    });
                }
            }
        });
    }


    // ---------------------------------------------------------------------
    // Video element rules.
    // ---------------------------------------------------------------------


    $(creative_video).each(function () {
        this.addEventListener('canplay', function (e) {
            this.play();
        }, false);
    });


    // ---------------------------------------------------------------------
    // Flexslider rules. Side note: a chap named Brad has been working on a
    // destroy method: https://github.com/bradgreens/FlexSlider/tree/release-2-2-0
    // ---------------------------------------------------------------------


    // If the viewport is 25.0625em (401px) or greater, do magic.
    if (matchMedia('only screen and (min-width:25.0625em)').matches) {

        // When on the slides page, prevent the default behavior of anything that has a class of .slide-link.
        $('.slides-page .slide-link').click(function (e) {
            e.preventDefault();
        });

        // Check for a hash in the URL, and if one exists...
        if (window.location.hash !== '') {

            // ...search in the slides array to find the number of that slide, assign that to the page_load_slide variable to be used later in the code.
            hash = window.location.hash.replace('#', '');
            page_load_slide = getSlidePosition(hash, slides);
        }

        $('.flexslider').flexslider({

            // Simple slider adjustments (from default settings):
            controlNav:     false,
            animation:      'slide',
            slideshow:      false,

            // Start at the slide defined by the variable page_load_slide, which is created from the hash in the URL:
            startAt: page_load_slide,

            // When the slider is ready, do things:
            start: function (slider) {

                // Remove the 'loading' class from the body element:
                $('body').removeClass('loading');

                // When a nav link is clicked...
                nav_link.click(function () {

                    // Set a variable with the above link's href value (minus the hash sign)
                    var navClickSlideHash = $(this).attr('href').replace('/#', '');

                    // Search in the slides array and find the position of that slide
                    var navClickSlide = getSlidePosition(navClickSlideHash, slides);

                    // If the slide that's currently visible is not the slide that was chosen by clicking a link...
                    if (slider.currentSlide !== navClickSlide) {

                        // ...animate the slider to the chosen slide:
                        slider.flexAnimate(navClickSlide);

                        // ... and update the URL hash to reflect the chosen link:
                        window.location.hash = $(this).attr('href');
                    }
                });

                // This scans the height of every instance of .content and sets the tallest value to the variable tallest_slide.
                var tallest_slide   = Math.max.apply(null, $('.slides > li').map(function () { return $(this).height(); }).get()),

                    // This sets the viewport height to the variable viewport_height.
                    viewport_height = $(window).height(),
                    min_height      = 0;

                // If the values of tallest_slide is greater than or equal to view_port height
                if (tallest_slide >= viewport_height) {

                    // Set min_height to the value of tallest_slide
                    min_height = tallest_slide;

                    // otherwise
                } else {

                    // Set min_height to the value of viewport_height
                    min_height = viewport_height;
                }

                // Finally, apply a css min-height on every instance of .content that's equal to the value of min_height (from above)
                $('.content').css('min-height', min_height + 'px');

            },

            // Any time a slide is changed
            after: function (slider) {

                // Set the current hash to the variable in the slides array corresponding with the currentSlide integer
                window.location.hash = slides[slider.currentSlide];
            }
        });

        // In browsers that have a visible vertical scrollbar, the resize event needs to be re-triggered after a short wait. This is to circumvent a weird bug where the slider plugin does its math *before* the vertical scrollbar appears, and needs to be told to do its match *again*. 600 milliseconds seems to be just enough time to wait before recalculating everything.
        setTimeout(function () {
            $(window).trigger('resize');
        }, 600);
    }

    // Return the key position of a variable in an array
    function getSlidePosition(needle, haystack) {
        for (var i = 0; i < haystack.length; i++) {
            if(haystack[i] == needle){
                return i;
            }
        }
        return 0;
    }


    // ---------------------------------------------------------------------
    // Management Team show/hide functionality.
    // ---------------------------------------------------------------------


    // If the viewport is 46.9375em (751px) or greater, do magic.
    if (matchMedia('only screen and (min-width:46.9375em)').matches) {
    
        // Hide every article within the .team-bios container.
        $('.team-bios article').hide().eq(0).show();

        // Mouseover show title
        $('.team-headshots a').mouseover(function() {
            if ($(this).parent().find('img').hasClass('selected')){return;}
            else{
                var imgWid = $(this).parent().find('img').width();
                var imgHei = $(this).parent().find('img').height();
                var overlaystyles = {
                  width : imgWid,
                  height: imgHei,
                  display: "block"
                };

                $(this).parent().find('.titleoverlay').css(overlaystyles);
                
            }
        });
        $('.team-headshots a').mouseout(function() {
            
            if (!($(this).parent().find('img').hasClass('selected'))){
             $(this).parent().find('.titleoverlay').css("display", "none");
                $(this).parent().find('img').css("opacity", 0.3);
            }
        });

        // When a single team headshot anchor is clicked, to more magic.
        $('.team-headshots a').click(function (e) {

            // ********************
            // Clean up / removal
            // ********************

            // Hide the team-intro element.
            $('.team-intro').hide();

            // Hide any visible instances of .team-bios > article.
            $('.team-bios article').hide();

            // Remove the 'selected' class from any other team headshots that may have it in place.
            $(this).parent().siblings().find('img').removeClass('selected');

            // ********************
            // Create / make / do
            // ********************

            // Reveal only the single .team-bios > article that's associated with the team headshot that was clicked.
            $('.team-bios ' + $(this).attr('href')).fadeIn('fast');

            // Add a class of selected to the team headshot that was clicked.
            $(this).find('img').addClass('selected').css("opacity", "");
          //  $(this).parent().find('img').css("opacity", 0);
             $(this).find('.titleoverlay').css("display", "none");
            // Stop the default event from executing.
            e.preventDefault();
        });
		setTimeout(function(){
            $('.patrick-gauthier img').addClass('selected');
            },500);
		
    }


}());
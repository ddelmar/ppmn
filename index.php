<?php
	// This codeblock is here for the randomized hero-image on the first slide.
	require_once('_/php/home-hero.php');
	$slide = new Paypal\slides;
	$slide->set_random(1,2);
?><?php require_once('_/inc/doctype-html.php'); ?>
	<head>
		<?php require_once('_/inc/common-head.php'); ?>
		<title>PayPal Media Network</title>
		<meta name="description" content="" />
	</head>
	<body class="loading slides-page">
		<?php require_once('_/inc/header.php'); ?>
		<div class="flexslider">
			<?php require_once('_/inc/second-pp-logo.php'); ?>
			<ul class="slides">


				<?php /* -----------------------------------------------------
				Home Slide (#1).
				-------------------------------------------------------------- */ ?>
				<li class="s-1" id="home">
					<div class="content">
						<div class="hero option-<?php echo $slide->random ?>"><!-- this empty element exists to render the large hero image --></div>
						<article>
							<div data-picture data-alt="An illustration of a point-of-sale machine accepting PayPal" class="illustration">
								<div data-src="/_/media/slide-home/illustration.png" data-media="only screen and (min-width:25.0625em)"></div>
							</div><!-- .illustration -->
							<h1>Catalyzing commerce</h1>
							<p>67% of consumers start shopping in one channel and complete their purchase in another. PayPal Media Network helps retailers and brands to engage consumers, drive commerce and compete in the omni-channel marketplace. Reach over 100M US consumers across multiple channels at scale leveraging PayPal's unique assets.
							</p>
						</article>
					</div><!-- .content -->
				</li><!-- .s-1 #home -->


				<?php /* -----------------------------------------------------
				About Us Slide (#2).
				-------------------------------------------------------------- */ ?>
				<li class="s-2" id="about-us">
					<article class="content">
						<script>

							// If Modernizr reports that the <video> element IS NOT supported AND the viewport is above 400px wide...
							if (!Modernizr.video && document.documentElement.clientWidth > 400) {

								// Write a fall-back image to the DOM
								document.write('<img src="/_/media/slide-about/about.png" />');
							}

							// Else, if Modernizr reports that the <video> element IS supported AND the viewport is above 400px wide...
							else if (Modernizr.video && document.documentElement.clientWidth > 400) {

								// Write the video element to the DOM
								document.write('<video autoplay loop class="creative-video"><source src="/_/media/slide-about/about.webm" type=\'video/webm; codecs="vp8, vorbis"\' /><source src="/_/media/slide-about/about.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' /><source src="/_/media/slide-about/about.ogv" type=\'video/ogg; codecs="theora, vorbis"\' /></video>');
							}

							// If none of the two conditionals return true, nothing happens. That's what we want: if your viewport is 400 pixels wide, or below, "YOU GET NOTHING." — Willy Wonka
						</script>
						<h1>About Us</h1>
						<p>PayPal Media Network was formerly WHERE, a Boston-based start-up focused on leveraging location technology and data in mobile to enhance relevancy in advertising. WHERE was acquired by PayPal in 2011 to strengthen eBay Inc's position as an enablement partner for retailers. With the addition of online media distribution, WHERE was rebranded as PayPal Media Network (PPMN).</p><p>Today, PPMN provides targeted advertising and closed loop offer distribution across both mobile and online channels at scale. Through our suite of demand generation solutions, PPMN helps retailers and brands reach consumers throughout the omni-channel shopping journey, empowering them to engage any time, anywhere and anyway.
						</p>
						<p><a href="/about-management-team/">About the Management Team</a></p>
					</article><!-- .content -->
				</li><!-- .s-2 #about-us -->


				<?php /* -----------------------------------------------------
				Mobile Network
				-------------------------------------------------------------- */ ?>
				<li class="s-3" id="mobile-and-online">
					<article class="content">
						<div class="rotatable">
							<div id="top-half">
								<h1>Mobile Network</h1>
								<p>PayPal Media Network enables you to reach consumers on their mobile devices through:</p>
								<ul>
								<li>One of the nations largest location-based mobile ad networks reaching 100M+ consumers across over 375 third party publishers. </li>
								<li>Red Laser:  eBay Inc's leading in-aisle shopping app reaching consumers at the point of intent. Engage 6M active app users and retarget them across thousands of other mobile properties.</li>
								<li>Unique experiences that leverage eBay, Inc. assets such as Milo (for display of real-time inventory) and PayPal's Mobile Express Checkout (for optimized mobile commerce).</li>
								
							</div><!-- top-half .flipped-180 -->
							<div class="rotate-trigger"><span>Rotate</span></div>
							<div id="bottom-half" class="flipped-180">
								<h1>Online Network</h1>
								<p>Reach in excess of 100M US consumers across thousands of websites advertising and offer campaigns. </p>

								<p>Scalable distribution leverages proprietary data science algorithms to develop custom audience segments for targeting across both PayPal owned and third party properties such as Facebook.
								</p>
							</div><!-- bottom-half .flipped-180 -->
						</div><!-- .rotatable -->
					</article><!-- .content -->
				</li><!-- .s-3 #mobile-and-online -->


				<?php /* -----------------------------------------------------
				Mobile Targeting (#4).
				-------------------------------------------------------------- */ ?>
				<li class="s-4" id="mobile-targeting">
					<article class="content">
						<script>

							// If Modernizr reports that the <video> element IS NOT supported AND the viewport is above 400px wide...
							if (!Modernizr.video && document.documentElement.clientWidth > 400) {

								// Write a fall-back image to the DOM
								document.write('<img src="/_/media/slide-mobile/mobile.png" />');
							}

							// Else, if Modernizr reports that the <video> element IS supported AND the viewport is above 400px wide...
							else if (Modernizr.video && document.documentElement.clientWidth > 400) {

								// Write the video element to the DOM
								document.write('<video autoplay loop class="creative-video"><source src="/_/media/slide-mobile/mobile.webm" type=\'video/webm; codecs="vp8, vorbis"\' /><source src="/_/media/slide-mobile/mobile.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' /><source src="/_/media/slide-mobile/mobile.ogv" type=\'video/ogg; codecs="theora, vorbis"\' /></video>');
							}

							// If none of the two conditionals return true, nothing happens. That's what we want: if your viewport is 400 pixels wide, or below, "YOU GET NOTHING." — Willy Wonka
						</script>
						<h1>Mobile Targeting</h1>
						<p>Geo-fence store locations, competitor locations and other relevant POIs to drive consumer action using location dynamic creative and rich media.</p><p>Increase relevance by combining location targeting with time of day, weather conditions, audience segment (powered by Place IQ), device type and more.</p>
					</article><!-- .content -->
				</li><!-- .s-4 #mobile-targeting -->


				<?php /* -----------------------------------------------------
				Online Targeting (#5).
				-------------------------------------------------------------- */ ?>
				<li class="s-5" id="online-targeting">
					<article class="content">
					<?php /* ---------------------------------------------------
					
					AWESOME WAY TO SELECT BEST IMAGE FILE PER DEVICE RESOLUTION, WIDTH
					------------------------------------------------------------------
						<div data-picture data-alt="A mobile phone displaying a ski trip booking promotion" class="illustration">
							<div data-src="/_/media/slide-mobile/illustration-large.png" data-media="only screen and (min-width:25.0625em)"></div>
							<div data-src="/_/media/slide-mobile/illustration-large-2x.png" data-media="only screen and (min-width:25.0625em) and (-webkit-min-device-pixel-ratio:2), only screen and (min-width:25.0625em) and (min--moz-device-pixel-ratio:2), only screen and (min-width:25.0625em) and (-o-min-device-pixel-ratio:2/1), only screen and (min-width:25.0625em) and (min-device-pixel-ratio:2), only screen and (min-width:25.0625em) and (min-resolution:192dpi), only screen and (min-width:25.0625em) and (min-resolution:2dppx)"></div>
							<noscript>
								<img src="/_/media/slide-mobile/illustration-small.png" alt="A mobile phone displaying a ski trip booking promotion" />
							</noscript>
						</div><!-- .illustration -->
						*/ ?>
						
						
						
						<?php /* ---------------------------------------------------

						VIDEO
						------------------------------------------------------------------
						
						<script>

							// If Modernizr reports that the <video> element IS NOT supported AND the viewport is above 400px wide...
							if (!Modernizr.video && document.documentElement.clientWidth > 400) {

								// Write a fall-back image to the DOM. 
								// I have NO image here at the moment, since that's better than an imperfect or confusing image
								document.write('');
							}

							// Else, if Modernizr reports that the <video> element IS supported AND the viewport is above 400px wide...
							else if (Modernizr.video && document.documentElement.clientWidth > 400) {

								// Write the video element to the DOM
								document.write('<video autoplay loop class="creative-video"><source src="/_/media/slide-online/online.webm" type=\'video/webm; codecs="vp8, vorbis"\' /><source src="/_/media/slide-online/online.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' /><source src="/_/media/slide-online/online.ogv" type=\'video/ogg; codecs="theora, vorbis"\' /></video>');
							}

							// If none of the two conditionals return true, nothing happens. That's what we want: if your viewport is 400 pixels wide, or below, "YOU GET NOTHING." — Willy Wonka
						</script>
						*/ ?>
						<h1>Online Targeting</h1>
						<p>By using proprietary data science algorithms combined with special knowledge that only we possess about PayPal's 60M US account holders, we are able to develop and target uniquely qualified audience segments. 
							</p>
							<ul>
							<li>Engage consumers with purchase intent who are actively shopping in your category
							</li><li>Create identified segments for collaborative targeting using CRM Match 
							</li><li>Develop new audiences based on existing segments and reach consumers who look like your best customers
							</li><li>Deliver your message to demographic segments that hold the highest potential
							</li>
						</p>
					</article><!-- .content -->
				</li><!-- .s-5 #online-targeting -->


				<?php /* -----------------------------------------------------
				Creative (#6).
				-------------------------------------------------------------- */ ?>
				<li class="s-6" id="creative">
					<article class="content">
						<script>

							// If Modernizr reports that the <video> element IS NOT supported AND the viewport is above 400px wide...
							if (!Modernizr.video && document.documentElement.clientWidth > 400) {

								// Write a fall-back image to the DOM
								document.write('<img src="/_/media/slide-creative/creative.png" />');
							}

							// Else, if Modernizr reports that the <video> element IS supported AND the viewport is above 400px wide...
							else if (Modernizr.video && document.documentElement.clientWidth > 400) {

								// Write the video element to the DOM
								document.write('<video autoplay loop class="creative-video"><source src="/_/media/slide-creative/creative.webm" type=\'video/webm; codecs="vp8, vorbis"\' /><source src="/_/media/slide-creative/creative.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' /><source src="/_/media/slide-creative/creative.ogv" type=\'video/ogg; codecs="theora, vorbis"\' /></video>');
							}

							// If none of the two conditionals return true, nothing happens. That's what we want: if your viewport is 400 pixels wide, or below, "YOU GET NOTHING." — Willy Wonka
						</script>
						<h1>Creative</h1>
						<p>The success of a campaign hinges on a single question: Will people engage with the ad?</p>
						<p>The answer is in expecting more than just a pretty face from your creative partner. It's placing the right experience in the right hands, at the right moment. We don't believe in rich media "platforms" that dole out a one-size-fits-all solution to a wide gamut of business objectives. Our in-house team of designers and developers build out each ad according to your unique KPI's. If you're after brand awareness, you'll want an experience that sets you apart from the deluge rather than complying with the trend <span lang="FR">du jour</span>. Put your brand at the center of the campaign and let's build a vehicle through which your demographic can experience it. You've pinpointed your audience through our targeting capabilities. Now let's drop the right lure.</p>
					</article><!-- .content -->
				</li><!-- .s-6 #creative -->


				<?php /* -----------------------------------------------------
				Closed Loop Offers (#7).
				-------------------------------------------------------------- */ ?>
				<li class="s-7" id="closed-loop-offers">
					<article class="content">
						<div data-picture data-alt="A mobile phone displaying a toy store promotion" class="illustration">
							<div data-src="/_/media/slide-closed-loop-offers/illustration-large.png" data-media="only screen and (min-width:25.0625em)"></div>
							<div data-src="/_/media/slide-closed-loop-offers/illustration-large-2x.png" data-media="only screen and (min-width:25.0625em) and (-webkit-min-device-pixel-ratio:2), only screen and (min-width:25.0625em) and (min--moz-device-pixel-ratio:2), only screen and (min-width:25.0625em) and (-o-min-device-pixel-ratio:2/1), only screen and (min-width:25.0625em) and (min-device-pixel-ratio:2), only screen and (min-width:25.0625em) and (min-resolution:192dpi), only screen and (min-width:25.0625em) and (min-resolution:2dppx)"></div>
							<noscript>
								<img src="/_/media/slide-closed-loop-offers/illustration-small.png" alt="A mobile phone displaying a toy store promotion" />
							</noscript>
						</div><!-- .illustration -->
						<h1>Closed Loop Offers</h1>
						<p>
							Closed Loop Offers enable merchants accepting PayPal to make funds for a
							purchase available in a consumer's PayPal account that can only be spent
							within that merchant's points of sale.</p><p>

							Drive channel-specific sales with online or in-store only offers, or stimulate
							omni-channel commerce by making the offer available across all channels.

							</p><p>Closed Loop Offers are automatically applied at checkout when
							paying with PayPal, creating a frictionless experience for merchant and
							consumer alike.

							</p><p>Measure performance with full-funnel metrics that track from impression and click-through to the transaction itself.

							</p><p>Acquire new customers or drive frequency and spend of existing customers with targeted Closed Loop Offers distributed at scale through PayPal Media Network.
							
						</p>
					</article><!-- .content -->
				</li><!-- .s-7 #closed-loop-offers -->


				<?php /* -----------------------------------------------------
				News and Events (#8).
				-------------------------------------------------------------- */ ?>
				
				<li class="s-8" id="news-and-events">
									<div class="content">
										<div class="buttons">
											<!-- <a target="_blank" href="#case-studies" class="modal-link">Case Studies</a> -->
											<!-- <a target="_blank" href="#resources" class="modal-link">Resources</a> -->
										</div><!-- .buttons -->
										<article class="events-wrap">
											<h1>Events</h1>
											<ol>
												<li>
													<a target="_blank" href="http://dmwvideo.com">
														<span class="event-name">Sarah Hodkinson: Future of Television</span>
														<span class="event-date">9/18</span>
														<span class="event-location">New York, NY</span>
													</a>
												</li>
												<li>
													<a target="_blank" href="http://brandinnovatorsmegatrends.com/">
														<span class="event-name">Brand Innovators Mega-Trends Summit</span>
														<span class="event-date">9/25</span>
														<span class="event-location">New York, NY</span>
													</a>
												</li>
												<li>
													<a target="_blank" href="http://bcu13boston-zvents.eventbrite.com">
														<span class="event-name">David Chang: Brand Camp</span>
														<span class="event-date">9/26</span>
														<span class="event-location">Boston, MA</span>
													</a>
												</li>
												<li>
													<a target="_blank" href="http://www.admonsters.com/event/op-us-4">
														<span class="event-name">Patrick Gauthier: AdMonster OPS</span>
														<span class="event-date">9/26</span>
														<span class="event-location">New York, NY</span>
													</a>
												</li>
												<li>
													<a target="_blank" href="http://www.houstonima.org/master-events?eventId=644849&EventViewMode=EventDetails">
														<span class="event-name">Houston Interactive Marketing Association 2013 Interactive Strategies Conference</span>
														<span class="event-date">10/2</span>
														<span class="event-location">Houston, TX</span>
													</a>
												</li>
												<li>
													<a target="_blank" href="http://www.mobilemarketingstrategiessummit.com/">
														<span class="event-name">Sarah Hodkinson: Mobile Marketing Strategies Summit</span>
														<span class="event-date">10/2</span>
														<span class="event-location">Boston, MA</span>
													</a>
												</li>
											</ol>
											<!-- <a href="/events/" class="see-all">See All</a> -->
										</article><!-- .events-wrap -->
										<article class="news-wrap">
											<h1>News</h1>
											<ol>
												<li><a target="_blank" href="http://www.mobilecommercedaily.com/geo-fencing-drives-68pc-lift-in-response-for-convenience-gas-merchants-paypal">Geo-fencing drive 68 pc lift in response for convenience, gas merchants: PayPal</a></li>
												<li><a target="_blank" href="http://bostinno.streetwise.co/2013/08/01/paypal-media-network-approved-why-your-mobile-ad-campaign-needs-geo-fencing/?utm_source=newsletter&utm_medium=sat_mc&utm_campaign=2013_08_03">PayPal Media Network Approved: Why Your Mobile Ad Campaign Needs Geo-Fencing</a></li>
												<li><a target="_blank" href="http://www.mobilecommercedaily.com/best-western-mobile-ad-campaign-generates-95-ctr">Best Western mobile ad campaign generates .95 CTR</a></li>
											</ol>
											<!--<a href="/news/" class="see-all">See All</a>-->
										</article><!-- .news-wrap -->
									</div><!-- .content -->
								</li><!-- .s-8 #news-and-events -->


			</ul><!-- .slides -->
		</div><!-- .flexslider -->
		<?php require_once('_/inc/modal-case-studies.php'); ?>
		<?php require_once('_/inc/modal-resources.php'); ?>
		<?php require_once('_/inc/modal-contact-form.php'); ?>
		<?php require_once('_/inc/common-foot.php'); ?>


		<?php /* -----------------------------------------------------
		Begin analytics code.
		-------------------------------------------------------------- */ ?>
		<!-- FPTI code Dated 2/21/2013 v1.1
		Copyright 1996-2013 eBay, Inc. All Rights Reserved -->
		<script src="https://www.paypalobjects.com/pa/js/min/pa_thirdparty.js"></script>
		<script>
		// Define Page Specific Variabless here.
		fpti.pgrp = 'main:ppmn:advertising::slides';
		fpti.page = 'main:ppmn:advertising::slides:::';
		fpti.ccpg = 'usa';
		fpti.lgin = 'out';
		fpti.rsta = 'us-en';
		fptiserver = '//t.paypal.com/ts';
		// End Page Specific Variabless.

		// DO NOT ALTER ANYTHING BELOW THIS LINE FOR FPTI!
		if(typeof PAYPAL.analytics != 'undefined'){
			PAYPAL.pta = PAYPAL.analytics.setup();
		}
		</script>
		<noscript><img src="https://tracking.qa.paypal.com/ts?nojs=1&amp;pgrp=main%3Appmn%3Aadvertising%3A%3Aslides" alt="" height="1" width="1" border="0" /></noscript>
		<!-- End FPTI code -->
	</body>
</html>
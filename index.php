<?php
	require_once('_/php/home-hero.php');
	$slide = new Paypal\slides;
	/* $slide->set_random(1,2); */
?>
<?php require_once('_/inc/doctype-html.php'); ?>
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
						<div class="hero option-1"><!-- this empty element exists to render the large hero image -->
						<?php /*
						++++++++++++++++++++++
						When the hero image is dynamic and random, here's what that should look like:
						<div class="hero option-<?php echo $slide->random ?>"><!-- this empty element exists to render the large hero image --></div>
						
						Also, don't forget to un-comment out that second variable in the PHP up top
						*/?>
						</div>
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
								document.write('<div class="videoContainer about"><video autoplay="autoplay" loop="loop" class="creative-video"><source src="/_/media/slide-about/about.webm" type=\'video/webm; codecs="vp8, vorbis"\' /><source src="/_/media/slide-about/about.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' /><source src="/_/media/slide-about/about.ogv" type=\'video/ogg; codecs="theora, vorbis"\' /></video></div>');
							}

							// If none of the two conditionals return true, nothing happens. That's what we want: if your viewport is 400 pixels wide, or below, "YOU GET NOTHING." — Willy Wonka
						</script>
						<h1>About Us</h1>
						<p>PayPal Media Network was formerly WHERE, a Boston-based startup focused on leveraging location technology and data in mobile to enhance relevancy in advertising. WHERE was acquired by PayPal in 2011 so that the company could help its partners better compete in the new omni-channel marketplace by leveraging the power of location and data-driven targeting.</p><p>Today, PPMN provides targeted advertising and offer products that are distributed across both mobile and online channels at scale. Through our suite of demand generation solutions, PPMN helps retailers and brands reach consumers throughout the omni-channel shopping journey, empowering them to engage any time, anywhere and any way.
						</p>
						<p id="aboutmgnt-btn"><a href="/about-management-team/">About the Management Team</a></p>
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
								<p>PayPal Media Network enables you to reach in excess of 100M US consumers on their mobile devices through:</p>
								<ul>
								<li>One of the largest and most accurate location-based mobile ad networks. </li>
								<li>RedLaser: eBay Inc's leading in-aisle shopping app reaching consumers at the point of intent. Engage 6M active app users and retarget them across thousands of other mobile properties.</li>
								<li>Unique experiences that leverage eBay, Inc. assets such as Milo (for display of real-time inventory) and PayPal's Mobile Express Checkout (for optimized mobile commerce).</li>
								
							</div><!-- top-half .flipped-180 -->
							<div class="rotate-trigger"><span>Rotate</span></div>
							<div id="bottom-half" class="flipped-180">
								<h1>Online Network</h1>
								<p>In today’s omni-channel marketplace, it’s critical that advertisers leverage data to intelligently deliver relevant content to specific audience segments.</p>

								<p>PayPal helps its partners achieve this through special knowledge of our customers that only we possess combined with proprietary data science algorithms to reach in excess of 100M US consumers online via thousands of websites.
								</p>
								<ul>
									<li>Leverage proprietary advertising and offer products to help drive consumer engagement and omni-channel sales.</li>
									<li>Learn more about your customers by measuring campaign performance across various customer segments.</li>
								</ul>
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
							if (!Modernizr.video && document.documentElement.clientWidth > 770) {

								// Write a fall-back image to the DOM
								document.write('<img src="/_/media/slide-mobile/mobile.png" />');
							}

							// Else, if Modernizr reports that the <video> element IS supported AND the viewport is above 400px wide...
							else if (Modernizr.video && document.documentElement.clientWidth > 770) {

								// Write the video element to the DOM
								document.write('<div class="videoContainer mobile"><video autoplay="autoplay" loop="loop" class="creative-video"><source src="/_/media/slide-mobile/mobile.webm" type=\'video/webm; codecs="vp8, vorbis"\' /><source src="/_/media/slide-mobile/mobile.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' /><source src="/_/media/slide-mobile/mobile.ogv" type=\'video/ogg; codecs="theora, vorbis"\' /></video></div>');
							}

							// If none of the two conditionals return true, nothing happens. That's what we want: if your viewport is 400 pixels wide, or below, "YOU GET NOTHING." — Willy Wonka
						</script>
						<h1>Mobile Targeting</h1>
						<p>Geo-fence store locations, competitor locations and other relevant points of interest to drive consumer action using location-dynamic creative and rich media.</p><p>Increase relevance by combining location targeting with time of day, weather conditions, audience segment (powered by PlaceIQ&trade;), device type and more. </p><p>See how <a href="/geo-fencing" title="Geo-Fencing">geo-fencing</a> drives consumers into stores.</p>
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
						<p>By using proprietary data science algorithms combined with special knowledge that only PayPal possesses on its over 60M US account holders, we develop uniquely qualified audience segments that you can’t find elsewhere. 
							</p>
							<ul>
							<li>Leverage over 50 different customer lifestyle and shopping segments
							</li><li>Engage consumers with purchase intent who are actively shopping in your category 
							</li><li>Create identified segments for collaborative targeting using CRM Match
							</li><li>Develop new custom audiences that are unique to your business</li>
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
								document.write('<div class="videoContainer creative"><video autoplay="autoplay" loop="loop" class="creative-video"><source src="/_/media/slide-creative/creative.webm" type=\'video/webm; codecs="vp8, vorbis"\' /><source src="/_/media/slide-creative/creative.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' /><source src="/_/media/slide-creative/creative.ogv" type=\'video/ogg; codecs="theora, vorbis"\' /></video></div>');
							}

							// If none of the two conditionals return true, nothing happens. That's what we want: if your viewport is 400 pixels wide, or below, "YOU GET NOTHING." — Willy Wonka
						</script>
						<h1>Creative</h1>
						<p>The success of a campaign hinges on a single question: Will people engage with the ad?</p>
						<p>The answer is in expecting more than just a pretty face from your creative partner. It's placing the right experience in the right hands at the right moment. We don't believe in rich media "platforms" that dole out a one-size-fits-all solution to a wide gamut of business objectives. Our in-house team of designers and developers build out each ad according to your unique KPIs. If you're after brand awareness, you'll want an experience that sets you apart from the deluge rather than complying with the trend <span lang="FR">du jour</span>. Put your brand at the center of the campaign and let's build a vehicle through which your audience can experience it. You've pinpointed your audience through our targeting capabilities. Now let's drop the right lure.</p>
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
						<h1>Offers</h1>
						<p>
						Extend the reach of your existing offers and coupons to targeted consumers through our unique mobile and online distribution channels, or harness the power of our proprietary Closed Loop Offer solution.
						</p><p>
						Closed Loop Offers enable PayPal merchants to make funds available in a consumer’s PayPal account that can only be spent within that merchant’s points of sale.
						 </p><p>
						Drive channel-specific sales with online or in-store only offers, or stimulate omni-channel commerce by making an offer available across all channels.
						 </p><p>
						Closed Loop Offers delight the customer: they are automatically applied at checkout when paying with PayPal, creating a frictionless experience for merchant and consumer alike.
						 </p><p>
						Measure performance and ROI with full-funnel metrics that track from impression and click-through to the transaction itself.
						 </p><p>
						Through over 50 audience segments or custom audiences built for your unique campaign needs, Closed Loop Offers enable you to engage the customers that matter most to your business.													
						</p>
					</article><!-- .content -->
				</li><!-- .s-7 #closed-loop-offers -->


				<?php /* -----------------------------------------------------
				News and Events (#8).
				-------------------------------------------------------------- */ ?>
				
				<li class="s-8" id="news-and-events">
									<div class="content">
										<div class="buttons">
											<!-- <a href="#case-studies" class="modal-link">Case Studies</a> -->
											<!-- <a href="#resources" class="modal-link">Resources</a> -->
										</div><!-- .buttons -->
										<article class="events-wrap">
											<h1>Events</h1>
											
											<div id="agenda"><p>Loading...</p></div>
											<script type="text/javascript" src="https://www.google.com/calendar/feeds/k6s7hd0r73s48pv4h4mt14lft8@group.calendar.google.com/public/full?alt=json-in-script&callback=insertAgenda&orderby=starttime&max-results=15&singleevents=true&sortorder=ascending&futureevents=true"></script>
											
										
											<!-- <a href="/events/" class="see-all">See All</a> -->
										</article><!-- .events-wrap -->
										<article class="news-wrap">
											<h1>News</h1>
											<ol>
												<li><a href="http://www.adexchanger.com/mobile/paypal-media-network-connecting-offline-online-commerce-a-work-in-progress/">
													<span class="event-name">PayPal Media Network: Connecting Offline, Online Commerce A Work In Progress</span>
													<span class="event-date">1/28</span>
													<span class="event-location">Ad Exchanger</span>


													</a></li>
												<li><a href="http://www.wcvb.com/chronicle/pay-by-phone-and-pay-less/-/12523032/23821438/-/2k8idk/-/index.html">
													<span class="event-name">Pay by Phone – and Pay Less! Smart Phones are the new Credit Card</span>
													<span class="event-date">1/8</span>
													<span class="event-location">WCVB Boston News</span>


													</a></li>
													
												<li><a href="http://www.mobilemarketer.com/cms/news/advertising/16821.html">
													<span class="event-name">Top 10 location-based mobile advertising campaigns of 2013</span>
													<span class="event-date">12/19</span>
													<span class="event-location">Mobile Marketer</span>


													</a></li>
												<li><a href="http://www.bizjournals.com/boston/print-edition/2013/11/08/towering-presence.html?page=all">
													<span class="event-name">PayPal's towering presence in Boston</span>
													<span class="event-date">11/8</span>
													<span class="event-location">Boston Business Journal</span>


													</a></li>
													
												<li><a href="http://www.mobilemarketingwatch.com/paypal-advertisers-leveraging-geo-targeting-to-drive-purchases-37167/">
													<span class="event-name">PayPal: Advertisers Leveraging Geo-Targeting to Drive Purchases</span>
													<span class="event-date">10/31</span>
													<span class="event-location">Mobile Marketing Watch</span>
													
													
													</a></li>
													<li><a href="http://bostinno.streetwise.co/2013/10/24/paypal-media-networks-push-towards-the-post-wallet-era-with-beacon/">
														<span class="event-name">PayPal Media Network's Push Towards The 'Post-Wallet Era' with Beacon</span>
														<span class="event-date">10/24</span>
														<span class="event-location">BostInno</span>


														</a></li>
													
													
													
												<li><a href="https://www.paypal-forward.com/innovation/closed-loop-offers-save-money-for-consumers-and-drive-commerce-for-merchants/">
													<span class="event-name">Closed Loop Offers Save Money for Consumers and Drive Commerce for Merchants</span>
													<span class="event-date">9/6</span>
													<span class="event-location">PayPal Forward</span>
													
													
													</a></li>

											</ol>
										<a href="/news/" class="see-all">See All</a>
										</article><!-- .news-wrap -->
									</div><!-- .content -->
								</li><!-- .s-8 #news-and-events -->


			</ul><!-- .slides -->
		</div><!-- .flexslider -->

		<?php require_once('_/inc/modal-contact-form.php'); ?>
		<?php require_once('_/inc/common-foot.php'); ?>


	</body>
</html>
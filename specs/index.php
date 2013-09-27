<?php require_once('../_/inc/doctype-html.php'); ?>
	<head>
		<?php require_once('../_/inc/common-head.php'); ?>
		<title>Ad Specs | PayPal Media Network</title>
		<meta name="description" content="" />
	</head>
	<body>
		<?php require_once('../_/inc/header.php'); ?>
		<div class="main">
			<?php require_once('../_/inc/second-pp-logo.php'); ?>

			<h1>Ad Specs</h1>
			
			<h2>Banners</h2>
			<ul>
				<li>File Type: Layered PSD (Photoshop)</li>
				<li>Sizes: 640x100 (Mobile), 728x90, 300x250 (Tablet)
				<li>Dynamic Location: PPMN displays address and proximity on the bottom 25% of the banner, with location left justified and proximity right justified. Proximity is always viewed as X.Xmi away. Dynamic text is displayed in web Helvetica, for its legibility at small size, in white or black Dynamic text options: Retail name and proximity, street address and/or proximity</li></ul>
			
			<h2>Rich Media</h2>
			<ul>
				<li>PPMN designs and builds custom HTML5 rich media in house</li>
			</ul>
			
			<h2>Landing Page</h2>
			<ul>
				<li>If banner is directing to an external site, please provide URL</li>
				<li>File Types: Layered PSD files (Photoshop), AI (Illustrator), or EPS</li>
				<li>All full-width landing page creative must be at least 640px wide</li>
				<li>Specify colors and font styles (if specific match required)</li>
				<li>Provide fonts in .ttf (TrueType) format</li>
				<li>Dynamic Location: If nearest location list is displayed, PPMN will use agency/brand provided header but must build landing page in house</li>
				<li>Timeline: Agency/brand must approve all designs 10 business days before launch</li>
			</ul>
			
			<h2>Required for Standard Landing Page</h2>
			<ul>
				<li>Brand logo as layered PSD, AI, or EPS</li>
				<li>Brand guide, if available</li>
				<li>High-resolution graphics as layered PSD, AI, or EPS</li>
				<li>Specific fonts, if required by brand, in .ttf (TrueType) format</li> 
				<li>Specific copy, if required by brand</li>
				<li>If banner is linking to an external site, provide URL</li>
				<li>If PPMN is designing and building banners and/or landing pages for a contracted client and a campaign is cancelled during the design or development phase, the client/advertiser is responsible for covering costs of the work completed up until the date of cancelation.</li>
			</ul>
			
			<h2>Required for Non-Standard Landing Page</h2>
			<ul>
				<li>PPMN designs and builds custom HTML5 rich media in house</li>
				<li>If landing page includes external links (Facebook&trade;, Twitter&trade;, retailer mobile site, etc), provide URLs for each link</li>
				<li>If landing page includes video, send URL (Vimeo&trade;, Wistia&trade;, YouTube&trade;, etc.) or send video as .mp4 file at 640 px, < 800 KB, < 30 seconds (iPhone&trade;, Android&trade;)</li>
			</ul>
			
			
			<h2>Location File</h2> 
			<p>If your camaign is geo-fencing specific locations, send a location file in Excel or CSV format that includes location name, street address, city, state (i.e. TX), zip (5 digits) and phone numbers in separate columns</p>
			
			<h2>Third Party Reporting</h2>
			<ul>
				<li>PPMN's preferred third party reporting partners are DART&trade; and MediaMind&trade;. Any other vendors need to be tested and approved by PPMN</li>
				<li>PPMN can run impression tags or 1x1 pixels and click commands</li>
				<li>Client to provide tags in Excel or CSV format broken out by IO placement</li>
				<li>Access to third party reporting must be given within 24 hours of launch, or campaign will be paused until access to reporting is granted</li>
				<li>Please associate the reporting account to <a href="mailto:traffic@paypal.com" target="_blank">traffic@paypal.com</a></li>
			</ul>
			
			<h2>Ad Serving</h2>
				<p>In order to leverage PPMN's location-dynamic technology, all ads must be served through PPMN's proprietary ad server</p>


		</div><!-- .main -->
		<?php require_once('../_/inc/modal-contact-form.php'); ?>
		<?php require_once('../_/inc/common-foot.php'); ?>


		<?php /* -----------------------------------------------------
		Begin analytics code.
		-------------------------------------------------------------- */ ?>
		<!-- FPTI code Dated 2/21/2013 v1.1
		Copyright 1996-2013 eBay, Inc. All Rights Reserved -->
		<script src="https://www.paypalobjects.com/pa/js/min/pa_thirdparty.js"></script>
		<script>
		// Define Page Specific Variabless here.
		fpti.pgrp = 'main:ppmn:advertising::privacypolicy';
		fpti.page = 'main:ppmn:advertising::privacypolicy:::';
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
		<noscript><img src="https://tracking.qa.paypal.com/ts?nojs=1&amp;pgrp=main%3Appmn%3Aadvertising%3A%3Aprivacypolicy" alt="" height="1" width="1" border="0" /></noscript>
		<!-- End FPTI code -->
	</body>
</html>
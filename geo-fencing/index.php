<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" >
<head> 
	<meta http-equiv="cache-control" content="no-cache" /> 
	<meta http-equiv="Content-Type" content="application/vnd.wap.xhtml+xml" /> 
	<meta name="HandheldFriendly" content="True" /> 
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>PayPal Media Network. Introducing GeoTrigger</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="scripts/nbw-parallax.js"></script>
<script type="text/javascript" src="scripts/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="scripts/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="scripts/jquery.inview.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#nav').localScroll();
	/*
	
	$("#popup").fadeIn();
	$("#no-fullscreen").click(function(){
		$("#popup").fadeOut();
	});
	$("#fullscreen").click(function(){
		fillthatshit();
	});
	*/
})

function fillthatshit(){
var elem = document.getElementById("body");  
if (elem.requestFullScreen) {  
  elem.requestFullScreen();  
} else if (elem.mozRequestFullScreen) {  
  elem.mozRequestFullScreen();  
} else if (elem.webkitRequestFullScreen) {  
  elem.webkitRequestFullScreen();  
}
$("#popup").fadeOut();
}
</script>
</head>

<body id="body">
<!-- removing the popup for now. Unreliable

<div id="popup">
	This works best in Chrome, Firefox, and Safari. And in full screen.
	<ul>
		<li id="fullscreen">Fill Screen</li>
		<li id="no-fullscreen">Nah</li>
	</u>
</div>
-->

<a href="/" id="logo_poster">PayPal Media Network</a>

<div id="you_container">
	<div id="track"></div>
	<div class="dot"></div>
	<div id="you"></div>
</div>

<div id="intro">
	<div class="story">
		<div id="intro_bg"></div>
		<div id="intro_text"></div>
    	<div class="intro_whitewall"></div>
    </div> <!--.story-->
</div> <!--#intro-->

<div id="second">
	<div class="story">
		<div class="cloud1"></div>
		<div class="cloud2"></div>

		<div class="banner_x"></div>
		<div class="banner"></div>
    </div> <!--.story-->
    

</div> <!--#second-->

<div id="third">
	<ul id="third_text">
		
	</ul>
</div>

<div id="fourth">
	<div id="fourth_wheel"></div>
	<div id="fourth_bag"></div>
	<div id="fourth_gradient"></div>
	<div id="fourth_text"></div><!-- fourth_text -->
</div>
<div id="fifth_wall"></div>


	<div id="fifth_container">
		<div id="fifth_text">
			<h1 class="fifth_h1">Location, location, location.</h1>
			<p class="fifth_copy">
				WHERE Ads is now PayPal Media Network (PPMN), with multi-media solutions designed to increase awareness and help drive consumer transactions for retailers, manufacturers, and restaurants. We've branched out into online, but our mission remains the same… to leverage the most relevant targeting capabilities for each medium to help drive consumers to transact.
			</p>
			<p><a href="/">More</a></p>
			
		</div>
	</div>
<div id="fifth"></div>

</body>
</html>

<!DOCTYPE html>
<html style="transform: none;" lang="en-US"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://localhost/wordpress/xmlrpc.php">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90447233-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<title>Nodes Availability – FUTEBOL UFMG</title>
<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
<link rel="dns-prefetch" href="http://s.w.org/">
<link rel="alternate" type="application/rss+xml" title="FUTEBOL UFMG » Feed" href="http://localhost/wordpress/feed/">
<link rel="alternate" type="application/rss+xml" title="FUTEBOL UFMG » Comments Feed" href="http://localhost/wordpress/comments/feed/">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/localhost\/wordpress\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.1"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="equipaments_files/wp-emoji-release.js" type="text/javascript" defer="defer"></script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}


</style>


<link rel="stylesheet" id="contact-form-7-css" href="css/styles.css" type="text/css" media="all">
<link rel="stylesheet" id="accesspresslite-google-fonts-css" href="css/css.css" type="text/css" media="all">
<link rel="stylesheet" id="accesspresslite-font-awesome-css" href="css/font-awesome.css" type="text/css" media="all">
<link rel="stylesheet" id="accesspresslite-fancybox-css-css" href="css/nivo-lightbox.css" type="text/css" media="all">
<link rel="stylesheet" id="accesspresslite-font-style-css" href="css/fonts.css" type="text/css" media="all">
<link rel="stylesheet" id="accesspresslite-style-css" href="css/style.css" type="text/css" media="all">

<script>
window.onload = function () {
 
var dataPoints = [];
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Tuna Production"
	},
	axisY: {
		title: "In metric tons",
		includeZero: false
	},
	data: [{
		type: "column",
		toolTipContent: "{y} metric tons",
		dataPoints: dataPoints
	}]
});
 
$.get("https://canvasjs.com/data/gallery/php/tuna-production.csv", getDataPointsFromCSV);
 
//CSV Format
//Year,Volume
function getDataPointsFromCSV(csv) {
	var csvLines = points = [];
	csvLines = csv.split(/[\r?\n|\r|\n]+/);
	for (var i = 0; i < csvLines.length; i++) {
		if (csvLines[i].length > 0) {
			points = csvLines[i].split(",");
			dataPoints.push({
				label: points[0],
				y: parseFloat(points[1])
			});
		}
	}
	chart.render();
}
 
}
</script>
</head>

<body class="page-template-default page page-id-7 body_template_one right-sidebar" style="transform: none;">
<div id="page" class="site" style="transform: none;">

	<header id="masthead" class="site-header">
    <div id="top-header">
		<div class="ak-container">
			<div class="site-branding">
				<a href="http://futebol.dcc.ufmg.br/">				
					<img src="equipaments_files/cropped-cropped-logo_futebol_ufmg_site.png" alt="FUTEBOL UFMG">
				</a>
				
			</div><!-- .site-branding -->
        

			<div class="right-header clearfix">
				<div class="header-text"><p>futebol.dcc.ufmg.br</p>
</div>                <div class="clearfix"></div>
                	<div class="socials">
</div>
				<div class="ak-search">
						<form method="post" class="searchform" action="http://futebol.dcc.ufmg.br/result.php" role="search">
		<input name="s" class="s" placeholder="Search..." type="text">
		<button type="submit" name="submit" class="searchsubmit"><i class="fa fa-search"></i></button>
	</form>
				</div>
							</div><!-- .right-header -->
		</div><!-- .ak-container -->
  </div><!-- #top-header -->

<nav id="site-navigation" class="main-navigation menu-left">
	<div class="ak-container">
		<h1 class="menu-toggle">Menu</h1>
			<div class="menu-menus-container">
				<ul id="menu-menus" class="menu">
					<li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-20"><a href="index.html">Home</a>
					</li>
					<li id="menu-item-15" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15"><a href="tutorials.html">TUTORIALS</a>
						<ul class="sub-menu">
							<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="tutorials_jfed.html">jFed</a></li>
							<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="settingexperiments.html">Setting up an Experiment </a>
								<ul class="sub-menu">
									
									<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="settingexperiments.html#usrp">USRP</a></li>
									<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="settingexperiments.html#raspberry"> Raspberry Pi</a></li>
									<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="settingexperiments.html#wifi">WiFi</a></li>
									<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="settingexperiments.html#telosb">Advanticsys Sensor Nodes</a></li>
								</ul>
							<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="shortcourses.html">Short Courses</a></li>
							<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="tutorials/user-guide/FUTEBOLUFMGUserGuide.pdf">FUTEBOL UFMG User Guide</li></a>	
						</ul>
					</li>
					<li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a href="equipaments.html">ABOUT EQUIPMENT</a>
						<ul class="sub-menu">
							<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="equipaments.html">Testbed resources</a></li>						
							</li>
							<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="mapstestbed.html">Maps of the testbed</a></li>						
							</li>
							<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="FunctionalLayers.html">Functional Layers of the Testbed</a></li>						
							</li>
							<li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-262"><a href="nodesAvailability.php">Nodes Availability</a></li>						
							</li>							
						</ul>
					<li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17"><a href="http://futebol.dcc.ufmg.br/contact.html">CONTACT</a>
					<!--<ul class="sub-menu">
					<li id="menu-item-93" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a href="http://futebol.inf.ufrgs.br/index.php/tutorials/tutorial-1/">TEAM</a></li>
					</ul>
					--></li>
					<li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a href="http://futebol.dcc.ufmg.br/TermsOfUse.html">TERMS OF USE</a></li>
					<li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a href="http://futebol.dcc.ufmg.br/team.html">TEAM</a>
					</li>
					

				</ul>
				</div>
	</div>
		</nav><!-- #site-navigation -->  
	</header><!-- #masthead -->

	<section id="slider-banner">
			</section><!-- #slider-banner -->
		<div id="content" class="site-content" style="transform: none;">

<div class="ak-container" style="transform: none;">

	<div id="primary" class="content-area" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
		<!-- #main -->
	<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static;"><main id="main" class="site-main" role="main">
				
<article id="post-7" class="post-7 page type-page status-publish has-post-thumbnail hentry">
	<header class="entry-header">
		<h1 class="entry-title">Nodes Availability</h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<header class="entry-header">
<h1 class="entry-title"></h1>
</header>
<div class="entry-content">

	This is the observatory of the allocations made in the FUTEBOL UFMG testbed and all of our nodes are exposed in the tables bellow. See the bottom of the page to understand the status of each node and contact us at <a href="mailto:web-futebol@dcc.ufmg.br"> web-futebol@dcc.ufmg.br</a> about any doubts or problems.

<div id="chartContainer" style="height: 370px; width: 100%;"></div>


<style>
table.equipments {
  border: 4px solid #555555;
  background-color: #555555;
  text-align: center;
  border-collapse: collapse;
}

table.equipments caption{
	text-align: center;
	font-size: 16px;
}

table.equipments td, table.equipments th {
  border: 1px solid #555555;
  vertical-align: middle;
  text-align: center;
  padding: 4px 7px;
  width: 50px;
}
table.equipments tbody td {
  font-size: 13px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: center;
}

.myTables{
    width: 100%;
    font-size: 12px;
    overflow: hidden;
 }
.leftTable {
    float: left; 
    width: 20%;
    padding: 5px;
    background: #ffffff;
}
.middleTable { 
    float: left;
    width: 20%;
    padding: 5px;
    background: #ffffff;
}
.rightTable {
    float: left;
    width: 20%;
    padding: 5px;
    background: #ffffff;
}

.subTable { 
    padding: 40px;
    background: #ffffff;
    margin: 0 auto;
    width: 100%;
}
.selectTimeZoneTable td, caption{
	font-size: 14px;
	text-align: center;
	border: none;
	padding: none;
	width: 100%;
}

.selectTimeZone select, input{
	text-align: center;
	font-size: 16px;
	color: #ffffff;
    background: #555555;
    padding: none;
    margin: 0 auto;
    width: 100%;
}

.availableCell{
	background: #33cc00;
	color: #ffffff;
}

.unavailableCell{
	background: #f48f42;
	color: #ffffff;
}

.inUseCell{
	background: #ff1a1a;
	color: #ffffff;
}

</style>
						
</main></div></div><!-- #primary -->



	<div id="secondary-right" class="widget-area right-sidebar sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
		
        
	    		

			<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static;"></div></div><!-- #secondary -->
</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	
		
		<div id="bottom-footer">
		<div class="ak-container">
			<h1 class="site-info">
				<a href="http://wordpress.org/">Free WordPress Theme</a>
				<span class="sep"> | </span>
				<a href="https://accesspressthemes.com/" title="AccessPress Themes" target="_blank">AccessPress Lite</a>
			</h1><!-- .site-info -->

			<div class="copyright">
				Copyright © 2018 
				<a target="_blank" href="http://demo.accesspressthemes.com/accesspresslite/">
				FUTEBOL UFMG				</a>
			</div>
		</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript" src="equipaments_files/jquery_003.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var _wpcf7 = {"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type="text/javascript" src="equipaments_files/scripts.js"></script>
<script type="text/javascript" src="equipaments_files/jquery_002.js"></script>
<script type="text/javascript" src="equipaments_files/nivo-lightbox.js"></script>
<script type="text/javascript" src="equipaments_files/jquery.js"></script>
<script type="text/javascript" src="equipaments_files/skip-link-focus-fix.js"></script>
<script type="text/javascript" src="equipaments_files/custom.js"></script>
<script type="text/javascript" src="equipaments_files/wp-embed.js"></script>


</body></html>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
	<!--<![endif]-->
	<head>

		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<title>Conveyancing Quote</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- fav and touch icons
		======================================================================================-->
		<link rel="shortcut icon" href="<?=base_url() ?>images/favicon/favicon.ico">
		<link rel="apple-touch-icon" href="<?=base_url() ?>images/favicon/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url() ?>images/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url() ?>images/favicon/apple-touch-icon-114x114.png">

		<!-- Start CSS Style
		=======================================================================================-->
		<link rel="stylesheet" href="<?=base_url() ?>css/style.css" />
		<!-- Main Style -->
		<!--[if IE 7]>
		<link rel="stylesheet" href="css/fontawesome/font-awesome-ie7.css" />
		<![endif]-->
		<!-- Color Skins -->
		<link rel="stylesheet" href="<?=base_url() ?>css/skins/blue.css" name="skins">
		<!-- Layout Style -->
		<link rel="stylesheet" href="<?=base_url() ?>css/layout/wide.css" name="layout">
		<!-- Style Switcher Box -->
		<link rel="stylesheet" href="<?=base_url() ?>css/layout/switcher.css">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link href="css/ie.css" rel="stylesheet" />
		<![endif]-->

	</head>

	<body onload="prettyPrint()">

		<div id="wrap" class="boxed">

			<div class="container">

				<!-- Header
				===========================================================================================================
				-->
				<header>

					<!-- Logo + menu -->
					<div class="logoWrapper">
						<div class="row">
							<!-- logo - font -->
							<div class="span6 logo">
								<span class="logoFirst">Conveyancing</span><a href="index.html">Quote</a>
								<br/>
								<span class="small">Kenneth Elliott &amp; Rowe</span>
							</div>

							<!-- SOCIALS -->
							<div class="span6">
								<ul class="tooltip-title top-social">
									<li>
										<a href="#" rel="tooltip" title="Facebook" class="social1-top"></a>
									</li>
									<li>
										<a href="#" rel="tooltip" title="Twitter" class="social2-top"></a>
									</li>
									<li>
										<a href="#" rel="tooltip" title="Google+" class="social3-top"></a>
									</li>
									<li>
										<a href="#" rel="tooltip" title="Rss Feed" class="social4-top"></a>
									</li>
								</ul>
							</div>
							<!--/SOCIALS-->
						</div>
						<!--/row-->

						<!-- STRAT MENU
						============================================================ -->
						<nav class="container menu">
							<div class="row">
								<div class="span9">
									<ul id="jMenu">
										<li>
											<a href="#" class="fNiv active">Home
											<br/>
											<span class="smallText">All starts here</span></a>

										</li>
										<li>
											<a href="#" class="fNiv">About
											<br/>
											<span class="smallText">See our pages</span></a>

										</li>
										<li>
											<a class="fNiv">Terms and Conditions
											<br/>
											<span class="smallText">All the different stuff</span></a>

										</li>
										<li>
											<a href="#" class="fNiv">Comparing Quotes
											<br/>
											<span class="smallText">Work we are proud of</span></a>

										</li>

										<li>
											<a href="contacts.html" class="fNiv last">Contacts
											<br/>
											<span class="smallText">Send message to us</span></a>
										</li>
									</ul>
								</div>

								<!-- search -->
								<div class="span3 searchTop">
									<form class="form-search pull-right marR10">
										<input type="text" class="input-medium search-query inputSearchStyle" value="Looking for somthing ?" onblur="if(this.value == '') { this.value = 'Looking for somthing ?'; }" onfocus="if(this.value == 'Looking for somthing ?') { this.value = ''; }" />
										<button type="submit" class="search-btn">
											<i class="icon-search"></i>
										</button>
									</form>
								</div>
								<!-- /search -->

							</div>
							<!--/row-->
						</nav>
						<!--/MENU-->

					</div>
					<!--/logoWrapper-->

				</header>

				<!-- Content
				==============================================================================================================
				-->

				<!--
				###################################################################################################
				- Slider  -
				###################################################################################################
				-->

				<div class="row">
					<div class="span4">

						<?=$this -> load -> view('global/calculator') ?>
					</div>
					<div class="span8">
						<div class="clearfix color-bg" >
							<div class="pull-right">
							<div class="text-animate-5 clearfix">Call us on</div>
							<div class="text-animate-11 clearfix">01708 757575</div>
							<h4>9:00am - 6:00pm Monday to Friday</h4>
							<h5>(Standard Call charges apply)</h5>
							</div>
						</div>
					</div>
				</div>
				<!--/slideshow-->

				<!-- End  SLIDER -->

				<!-- middle container (Main Content) -->

				<!-- Catch text -->
				<div class="row">
					<div class="span12">
						<div class="catchText">
							<div class="row">
								<div class="span9">
									<p>
										Online Conveyancing Quote Calculator from the Top Tier Legal 500 Commercial Property Solicitor in Essex
									</p>
								</div>
								<div class="span3">

									<button class="btn-large btn color-bg" type="button" data-toggle="modal" data-target="#myModal">
										Request a Call Back
									</button>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Catch text -->

				<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							×
						</button>
						<h3 id="myModalLabel">Modal header</h3>
					</div>
					<div class="modal-body">
						<p>
							One fine body...
						</p>
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">
							Close
						</button>
						<button class="btn btn-primary">
							Save changes
						</button>
					</div>
				</div>

				
				

				<!-- This row contains // Latest from blog -->
				<div class="row outerDiv">

					<!-- Latest from blog -->
					<section class="span12 latestBlog">
						<h2>Latest From Blog</h2>
						<!-- Flex Carousel -->
						<div class="flexslider carousel">
							<ul class="slides tooltip-title">

								<li>
									<div class="myCarousel carousel slide marB0">
										<!-- Carousel items -->
										<div class="carousel-inner">
											<div class="item active">
												<a href="#"><img alt=""  src="images/img/img19.jpg" /></a>
											</div>
											<div class="item">
												<a href="#"><img alt=""  src="images/img/img20.jpg" /></a>
											</div>
											<div class="item">
												<a href="#"><img alt=""  src="images/img/img21.jpg" /></a>
											</div>
										</div>
										<!-- Carousel nav -->
										<a class="carousel-control left" href=".myCarousel" data-slide="prev">&lsaquo;</a>
										<a class="carousel-control right" href=".myCarousel" data-slide="next">&rsaquo;</a>
									</div>
									<h4 class="marB5 noBg">
									<div class="type-icon color-bg">
										<i class="icon-picture"></i>
									</div><a href="blog_details.html">Post Name</a>
									<br/>
									<span class="date">June 25, 2012 / 12 Comments</span></h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Vestibulum at velit id massa dignissim consectetur ut quis felis.
										<a rel="tooltip" class="blogDetails" title="Details" href="blog_details.html"><i class="icon-link"></i></a>
									</p>
								</li>

								<li>
									<audio src="mp3/bird.mp3" preload="none" />
									</audio>
									<h4 class="marB5 noBg">
									<div class="type-icon color-bg">
										<i class="icon-volume-down"></i>
									</div><a href="blog_details.html">Post Name</a>
									<br/>
									<span class="date">June 25, 2012 / 12 Comments</span></h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Vestibulum at velit id massa dignissim.
										<a rel="tooltip" class="blogDetails" title="Details" href="blog_details.html"><i class="icon-link"></i></a>
									</p>
								</li>

								<li>
									<h4 class="marB5 noBg">
									<div class="type-icon color-bg">
										<i class="icon-file"></i>
									</div><a href="blog_details.html">Post Name</a>
									<br/>
									<span class="date">June 25, 2012 / 12 Comments</span></h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Vestibulum at velit id massa dignissim consectetur ut quis felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Vestibulum at velit id massa dignissim consectetur ut quis felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Vestibulum at velit id massa dignissim consectetur ut.
										<a rel="tooltip" class="blogDetails" title="Details" href="blog_details.html"><i class="icon-link"></i></a>
									</p>
								</li>

								<li>
									<div class="video-container">
										<iframe src="http://player.vimeo.com/video/25541923?badge=0&amp;color=c9161f" width="500" height="375" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
									</div>
									<h4 class="marB5 noBg">
									<div class="type-icon color-bg">
										<i class="icon-facetime-video"></i>
									</div><a href="blog_details.html">Post Name</a>
									<br/>
									<span class="date">June 25, 2012 / 12 Comments</span></h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Vestibulum at velit.
										<a rel="tooltip" class="blogDetails" title="Details" href="blog_details.html"><i class="icon-link"></i></a>
									</p>
								</li>

								<li>
									<a href="#"><img alt=""  src="images/img/img23.jpg" /></a>
									<h4 class="marB5 noBg">
									<div class="type-icon color-bg">
										<i class="icon-picture"></i>
									</div><a href="blog_details.html">Post Name</a>
									<br/>
									<span class="date">June 25, 2012 / 12 Comments</span></h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Vestibulum at velit id massa dignissim consectetur ut quis felis.
										<a rel="tooltip" class="blogDetails" title="Details" href="blog_details.html"><i class="icon-link"></i></a>
									</p>
								</li>

								<li>
									<a href="#"><img alt=""  src="images/img/img29.jpg" /></a>
									<h4 class="marB5 noBg">
									<div class="type-icon color-bg">
										<i class="icon-picture"></i>
									</div><a href="blog_details.html">Post Name</a>
									<br/>
									<span class="date">June 25, 2012 / 12 Comments</span></h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Vestibulum at velit id massa dignissim consectetur ut quis felis.
										<a rel="tooltip" class="blogDetails" title="Details" href="blog_details.html"><i class="icon-link"></i></a>
									</p>
								</li>

							</ul>
						</div>
					</section>
					<!--/Latest from blog-->
				</div>
				<!--/row-->

			</div>
			<!--/container-->
			<!-- Footer
			=============================================================================================================
			-->
			<div class="container darkBg">
				<footer>
					<div id="mainFooter">
						<div class="row">
							<!-- About Us -->
							<div class="span2">
								<h4>About Us</h4>
								<p>
									Consectetur adipiscing elit aeneane lorem lipsum, condimentum ultrices consequat eu,
									vehicula mauris lipsum adipiscing lipsum aenean orci lorem Asequat.
								</p>
							</div>
							<!-- Contacts -->
							<div class="span2">
								<h4>Contact Us</h4>
								<address>
									<strong>Kenneth Elliott &amp; Rowe.</strong>
									<br/>
									<i class="icon-tint"></i> Enterprise House, 18 Eastern Road
									<br/>
									Romford, Essex, UK, RM1 3PJ
									<br/>
									<i class="icon-phone"></i> (01708) 757575
								</address>

								<address>
									<strong>Mark Sadler</strong>
									<br/>
									<a href="mailto:mbs@ker.co.uk">mbs@ker.co.uk</a>
								</address>
							</div>
							<!-- Twitter -->
							<div class="span4">
								<h4>Twitter</h4>
								<div class="tweet"></div>
								<!-- Twitter Code -->
							</div>
							<!-- Flickr -->
							<div class="span4">
								<h4>Newsletter</h4>

								<div class="clearfix"></div>
								<div class="subscribee">
									Subscribe to our e-mail newsletter to receive updates.
									<br/>
									<br/>
									<form class="subscribe">
										<input class="inputSubscribe" type="text" placeholder="Enter Your Email" />
										<button class="btn btn-warning btnSubscribe">
											Send
										</button>
									</form>
								</div>
							</div>
						</div>

						<!-- Copy rights + subscribtion area -->
						<div class="row bord-top">
							<div class="span6 copyrights">
								Copyright 2013  Kenneth Elliott + Rowe. All Rights Reserved. Developed by <a href="https://www.redstudio.co.uk">Redstudio Design Limited</a>
							</div>

							<div class="span6">
								<ul class="footer-social tooltip-title">
									<li>
										<a href="#" rel="tooltip" title="facebook"><i class="icon-facebook-sign"></i></a>
									</li>
									<li>
										<a href="#" rel="tooltip" title="twitter"><i class="icon-twitter-sign"></i></a>
									</li>
									<li>
										<a href="#" rel="tooltip" title="google plus"><i class="icon-google-plus-sign"></i></a>
									</li>
									<li>
										<a href="#" rel="tooltip" title="piterest"><i class="icon-pinterest-sign"></i></a>
									</li>
									<li>
										<a href="#" rel="tooltip" title="linked in"><i class="icon-linkedin-sign"></i></a>
									</li>
								</ul>
							</div>
						</div>

					</div>
					<!--/mainFooter-->
				</footer>
			</div>
			<!--/container-->

		</div>
		<!--/wrap-->

		<!-- javascript
		=============================================================================================================
		-->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?=base_url() ?>js/jquery.js"></script>
		<!-- Main JQuery -->
		<script src="<?=base_url() ?>js/bootstrap.js"></script>
		<!-- Bootstrap Js main file -->
		<script src="<?=base_url() ?>js/jquery.easing.1.3.js"></script>
		<!-- easing.1.3 -->
		<script src="<?=base_url() ?>js/jquery.cookie.js"></script>
		<!-- cookie -->
		<script src="<?=base_url() ?>js/jquery-ui-1.8.20.custom.min.js"></script>
		<!-- jquery-ui -->
		<script src="<?=base_url() ?>js/responsive-menu.js"></script>
		<!-- Responsive menu -->
		<script src="<?=base_url() ?>js/jMenu.jquery.js"></script>
		<!-- Nav menu -->
		<script defer src="<?=base_url() ?>js/jquery.flexslider.js"></script>
		<!-- Flex Basic carousel -->
		<script src="<?=base_url() ?>js/jquery.prettyPhoto.js"></script>
		<!-- PrettyPhoto -->
		<script src="<?=base_url() ?>js/jquery.liquid-slider-0.1.js"></script>
		<!-- Testimonials - text slider -->
		<script src="<?=base_url() ?>js/jquery.tweet.js"></script>
		<!-- Twitter plugin -->
		<script src="<?=base_url() ?>js/jflickrfeed.min.js"></script>
		<!-- jQuery Flickr -->
		<script src="<?=base_url() ?>js/jquery.ui.totop.js" ></script>
		<!-- Go to top -->
		<script src="<?=base_url() ?>js/filterable.pack.js"></script>
		<!-- Filter portfolio -->
		<script src="<?=base_url() ?>js/audio.min.js"></script>
		<!-- audio player -->
		<script src="<?=base_url() ?>js/prettify.js"></script>
		<!-- YOU CAN REMOVE IT // it's associated with shortcodes preview boxes -->

		<script src="<?=base_url() ?>js/custom.js"></script>
		<!-- All scripts that shuold be on html file collected here -->
		<script src="<?=base_url() ?>js/styleswitch.js"></script>
		<!-- Style Colors Switcher -->

	</body>
</html>
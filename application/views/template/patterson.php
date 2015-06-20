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
		
		
		<?php if(isset($meta_title) && strlen(trim($meta_title)) > 2) { ?>
			<title><?=$meta_title ?></title>
		<?php } else { ?>
			<title><?=$title ?></title>
			<?php }	?>
		
		<?php if(isset($meta_desc)) { ?>
			<meta name="description" content="<?=$meta_desc?>">
		<?php } else { ?>
			<meta name="description" content="">
			<?php }	?>
		
		
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
		<link rel="stylesheet" href="<?=base_url() ?>css/layout/boxed.css" name="layout">
		<!-- Style Switcher Box -->
		<link rel="stylesheet" href="<?=base_url() ?>css/layout/switcher.css">
		
		<link rel="stylesheet" href="<?=base_url() ?>css/custom.css?1.3">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link href="css/ie.css" rel="stylesheet" />
		<![endif]-->

	</head>

	<body onload="prettyPrint()" class="custom">

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
								<span class="logoFirst">Patterson</span><a href="<?=base_url()?>">Hawthorn </a>
								
								
								
							</div>

							<!-- SOCIALS -->
							<div class="span6">
								<ul class="tooltip-title top-social">
									<li>
										<a target="_blank"  href="http://www.facebook.com/kennethelliottrowe" rel="tooltip" title="Facebook" class="social1-top"></a>
									</li>
									<li>
										<a target="_blank"  href="https://twitter.com/kersolicitors" rel="tooltip" title="Twitter" class="social2-top"></a>
									</li>
									<li>
										<a target="_blank" href="https://plus.google.com/u/0/111287847318681499337/" rel="tooltip" title="Google+" class="social3-top"></a>
									</li>
									<li>
										<a target="_blank" href="http://www.ker.co.uk/residential-news.feed?type=rss" rel="tooltip" title="Rss Feed" class="social4-top"></a>
									</li>
								</ul>
							</div>
							<!--/SOCIALS-->
						</div>
						<!--/row-->

						<!-- START MENU
						============================================================ -->
						<nav class="container menu">
							<div class="row">
								<div class="span9">
									<ul id="jMenu">
										<li>
											<a href="<?=base_url() ?>" class="fNiv">Home
											<br/>
											<span class="smallText">start here</span></a>

										</li>
										<li>
											<a href="<?=base_url() ?>about" class="fNiv">About
											<br/>
											<span class="smallText">what we do</span></a>

										</li>
										<li>
											<a href="<?=base_url() ?>terms" class="fNiv">Terms and Conditions
											<br/>
											<span class="smallText">legal stuff</span></a>

										</li>
										<li>
											<a href="<?=base_url() ?>comparequotes" href="#" class="fNiv">Comparing Quotes
											<br/>
											<span class="smallText">what to look out for</span></a>

										</li>

										<li>
											<a href="<?=base_url() ?>contact" class="fNiv last">Contact
											<br/>
											<span class="smallText">how to get in touch</span></a>
										</li>
										
									</ul>
									
									
								</div>

								<!-- search -->
								<div class="span3 searchTop ">
									<?php $is_logged_in = $this->session->userdata('is_logged_in');
						$level = $this->session->userdata('role');
						
						if($is_logged_in!=NULL || $level == 1)
						{
					?>
					<p class="text-right padR20">Hello <?=$this->session->userdata('firstname')?> <?=$this->session->userdata('lastname')?> | <a href="" data-toggle="modal" data-target="#loginModal">Logout</a></p>
					<?php } else { ?>
									<p class="text-right padR20"><a href="" data-toggle="modal" data-target="#loginModal">Login</a></p>
									<?php } ?>
								</div>
								
								
								 <!-- /search -->

							</div>
							<!--/row-->
							
							<?php 
										 $is_logged_in = $this->session->userdata('is_logged_in');
                $level = $this->session->userdata('role');
										
										if($is_logged_in!=NULL || $level == 1)
		{
			echo "<div class=''>";
			echo "<ul class='nav nav-pills'>";
                    echo "<li>".anchor('yourquote', 'Quote Email')."</li>";
                      echo "<li>".anchor('instruct', 'Instruct Email')."</li>";
                  echo "<li>".anchor('admin', 'Admin')."</li>";
				  echo "<li>".anchor('admin/add_local', 'Add local')."</li>";
				  
			echo "</ul>";	
			echo "</div>";  
		}?>
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

			 <?=$this -> load -> view('global/warning') ?>

					<?=$this -> load -> view('global/' . $main_content) ?>
				

				<?=$this->load->view('login/login_modal')?>

			</div >
			<!--/ maincontainer-->
			
			
			<!-- Footer
			=============================================================================================================
			-->
			<div class="container darkBg">
				<footer>
					<div id="mainFooter">
						<div class="row">
							<!-- About Us -->
							<div class="span4">
								<h4>About Us</h4>
								<p>
									At kenneth elliott and rowe we make buying or selling your home as painless as possible. 
									We are recognised as the best commercial property solicitor in Essex
								</p>
							</div>
							<!-- Contacts -->
							<div class="span4">
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
							
							<!-- Flickr -->
							<div class="span4">
								<h4>Newsletter</h4>

								<div class="clearfix"></div>
								<div class="subscribee">
									Subscribe to our e-mail newsletter to receive updates.
									<br/>
									<br/>
									<form action="http://redstudio.us1.list-manage.com/subscribe/post?u=07f8348178863dab1d4d377a3&amp;id=c4a1249a4d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
										<input class="inputSubscribe" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required  placeholder="Enter Your Email" />
										
										<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"  class="btn btn-warning btnSubscribe">
									</form>
								</div>
							</div>
						</div>


<div class="row bord-top">
							<div class="span12 copyrights">
								<?php if(isset($local)) { foreach($local as $row):?>
									
									<a href="<?=base_url()?>welcome/main/<?=$row->menu?>">Conveyancing in <?=$row->town?></a> |
				
									
									<?php endforeach; } ?>
								
								
							</div>

							
						</div>
						<!-- Copy rights + subscribtion area -->
						<div class="row ">
							<div class="span6 copyrights">
								Copyright 2013  Kenneth Elliott + Rowe. All Rights Reserved. Developed by <a href="http://www.redstudio.co.uk">Redstudio Design Limited</a>
							</div>

							<div class="span6">
								<ul class="footer-social tooltip-title">
									<li>
										<a target="_blank"  href="http://www.facebook.com/kennethelliottrowe" rel="tooltip" title="facebook"><i class="icon-facebook-sign"></i></a>
									</li>
									<li>
										<a target="_blank"  href="https://twitter.com/kersolicitors" rel="tooltip" title="twitter"><i class="icon-twitter-sign"></i></a>
									</li>
									<li>
										<a target="_blank" href="https://plus.google.com/u/0/111287847318681499337/" rel="tooltip" title="google plus"><i class="icon-google-plus-sign"></i></a>
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
		
		<script src="<?=base_url() ?>js/jflickrfeed.min.js"></script>
		<!-- jQuery Flickr -->
		<script src="<?=base_url() ?>js/jquery.ui.totop.js" ></script>
		<!-- Go to top -->
		<script src="<?=base_url() ?>js/filterable.pack.js"></script>
		<!-- Filter portfolio -->
		
		<script src="<?=base_url() ?>js/prettify.js"></script>
		<!-- YOU CAN REMOVE IT // it's associated with shortcodes preview boxes -->
		<script src="<?=base_url() ?>js/editor/innovaeditor.js" type="text/javascript"></script>
			<script src="<?=base_url() ?>js/editor/innovamanager.js" type="text/javascript"></script>
		 

<script src="<?=base_url() ?>js/jeditable.js"></script>
<script src="<?=base_url() ?>js/script.js"></script>
		<script src="<?=base_url() ?>js/custom.js"></script>
		<!-- All scripts that shuold be on html file collected here -->
		
		
		
		
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-19623681-21']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

</script>

	</body>
</html>
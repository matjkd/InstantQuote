


<section class="span12 latestBlog">
						<h2>Latest From Blog</h2>
						<!-- Flex Carousel -->
						<div class="flexslider carousel">
							<ul class="slides tooltip-title">

							 <?php $newsfeed = file_get_contents('http://www.ker.co.uk/residential-news.feed?type=rss');
            $xml = simplexml_load_string($newsfeed); 
           
           foreach($xml->channel->item as $row):
           	$descriptionTrim = str_replace("/<p>\s+<\/p>/","",$row->description);
			$descriptionTrim = strip_tags($descriptionTrim, '<img>');
		$descriptionTrim = preg_replace("/<img[^>]+\>/i", "", $descriptionTrim); 
			
			$string = strstr($row->author, '(', false);
			$authorTrim = str_replace(')', '', $string);
			$authorTrim = str_replace('(', '', $authorTrim);
			$datestring = "%l %j%S %M  %Y %G:%i:%s";
			
			$unix = human_to_unix($row -> pubDate);
			$timeTrim = mdate($datestring, $unix);

           ?>

								<li>
									
									<h4 class="marB5 noBg">
									<div class="type-icon color-bg">
										<i class="icon-picture"></i>
									</div><a href="<?=$row -> link ?>"><?=$row -> title ?></a>
									<br/>
									<span class="date"> <?=$timeTrim ?> <br/>by  <a href="https://plus.google.com/u/0/111287847318681499337?
   rel=author"><?=$authorTrim ?></a></span></h4>
									<p>
										<?=$descriptionTrim ?>
										<a rel="tooltip" class="blogDetails" title="Details" href="<?=$row -> link ?>"><i class="icon-link"></i></a>
									</p>
								</li>
								
								<?php endforeach; ?>

							</ul>
						</div>
					</section>
					<!--/Latest from blog-->
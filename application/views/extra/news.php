
   <h1>Latest News</h1>
   <div class="newsfeed">
           <?php $newsfeed = file_get_contents('http://www.ker.co.uk/residential-news.feed?type=rss');
            $xml = simplexml_load_string($newsfeed); 
           
           foreach($xml->channel->item as $row):
           	$descriptionTrim = str_replace("/<p>\s+<\/p>/","","$row->description");
			
			
			$string = strstr($row->author, '(', false);
			$authorTrim = str_replace(')', '', $string);
			$authorTrim = str_replace('(', '', $authorTrim);
			$datestring = "%l %j%S %M  %Y %G:%i:%s";
			
			$unix = human_to_unix($row -> pubDate);
			$timeTrim = mdate($datestring, $unix);

           ?>
			 <div class="feedItem" style="clear:both;"> 
			   <h2><a href="<?=$row -> link ?>"><?=$row -> title ?></a></h2>
			   <?=$timeTrim ?> | <strong>by  <a href="https://plus.google.com/u/0/111287847318681499337?
   rel=author"><?=$authorTrim ?></a></strong>
			     <div style="clear:both; padding-top:10px;"><?=$descriptionTrim ?></div>
			   <div style="clear:both; padding-top:10px;"><a href="<?=$row -> link ?>">Read More...</a></div>
			   
			 </div>   
		   <?php endforeach; ?>

	
           </div>

<div id="top_menu">
    	<ul>
    	<li><?=anchor('/', 'Get a Conveyancing Quote')?></li>
                <li><?=anchor('about', 'About')?></li>
                  <li><?=anchor('comparequotes', 'Comparing Quotes')?></li>
                   <li><?=anchor('terms', 'Terms and Conditions')?></li>
                   <li><?=anchor('faq', 'FAQ')?></li>
                   
                   <?php $is_logged_in = $this->session->userdata('is_logged_in');
                $level = $this->session->userdata('role');

		if($is_logged_in!=NULL || $level == 1)
		{
                    echo "<li>".anchor('yourquote', 'Quote Email')."</li>";
                      echo "<li>".anchor('instruct', 'Instruct Email')."</li>";
                  echo "<li>".anchor('admin', 'Admin')."</li>";
		}
                   
                   
                   ?>
    		</ul>
 </div>
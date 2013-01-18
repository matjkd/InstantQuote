<div id="top_menu">
    	<ul>
    	<li><?=anchor('/', 'Quote')?></li>
        <li><?=anchor('terms', 'Terms and Conditions')?></li>
                
                  <li><?=anchor('comparequotes', 'Comparing Quotes')?></li>
                   
                   
                   <li><?=anchor('about', 'Contact Us')?></li>
                   
                   <?php $is_logged_in = $this->session->userdata('is_logged_in');
                $level = $this->session->userdata('role');

		if($is_logged_in!=NULL || $level == 1)
		{
                    echo "<li>".anchor('yourquote', 'Quote Email')."</li>";
                      echo "<li>".anchor('instruct', 'Instruct Email')."</li>";
                  echo "<li>".anchor('admin', 'Admin')."</li>";
				  echo "<li>".anchor('admin/add_local', 'Add local')."</li>";
				  
				  
		}
                   
                   
                   ?>
    		</ul>
 </div>
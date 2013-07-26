 <!-- Content
    ============================================================================================================== -->  
	
    <!-- Title -->
    <?php foreach($content as $row):?>
   
    
   	<div class="row outerDiv">
   		
   		        <!-- our services -->
        <div class="span4">
           
<?=$this -> load -> view('global/calculator') ?>

    </div>
   		
       	<!-- our mission -->
       	
       	<div class="span8">
       		<div class="well " id="freeholdbox">
       			<h1>Conveyancing Solicitors Quote for <?=$row -> town ?>
       				
       				<?php
						$is_logged_in = $this -> session -> userdata('is_logged_in');
						if (!isset($is_logged_in) || $is_logged_in == true)
						{
							echo "<a href='" . base_url() . "admin/edit/" . $row -> menu . "'><i class='icon-pencil'></i> </a><br/>";
						}
					?>
       			</h1>
       			<h2>Average Price of Freehold Property in <?=$row -> town ?>: &pound;<?=$row -> sale_price ?></h2>
       			
       			<div class="row-fluid">
       				
			
			<?php $leaseholdselling = $lease_sale['totalsale'];
				$leaseholdbuying = $lease_sale['totalpurchase'];

				$freeholdselling = $free_sale['totalsale'];
				$freeholdbuying = $free_sale['totalpurchase'];
			?>
					
					

       				
       				
       			<div class="span12">
       				
       				
       				Total Legal Fees VAT and Disbursements for Selling: <strong>£<?=$freeholdselling ?></strong><br/>
       				Total Legal Fees VAT and Disbursements for Buying: <strong>£<?=$freeholdbuying ?></strong>
       			</div>
       			
       				
       			</div>
       			<hr>
       			<div id="showlease" class="btn">If you are buying or selling a leasehold property (flat or maisonette) click here to update to show the Leasehold Fees</div>
       			&nbsp;
       		</div>
       		
       		<div class="well " id="leaseholdbox" style="display:none;">
       			<h1>Conveyancing Solicitors Quote for <?=$row -> town ?>
       				
       				<?php
						$is_logged_in = $this -> session -> userdata('is_logged_in');
						if (!isset($is_logged_in) || $is_logged_in == true)
						{
							echo "<a href='" . base_url() . "admin/edit/" . $row -> menu . "'><i class='icon-pencil'></i> </a><br/>";
						}
					?>
       			</h1>
       			    			<h2>Average Price of Leasehold Property in <?=$row -> town ?>: &pound;<?=$row -> sale_price_leasehold ?></h2>
       			<div class="row-fluid">
       				
			
		
					
					

       				
       				
       			<div class="span12">
       				
       				
       				Total Legal Fees VAT and Disbursements for Selling: £<?=$leaseholdselling ?><br/>
       				Total Legal Fees VAT and Disbursements for Buying: £<?=$leaseholdbuying ?>
       			</div>
       			</div>
       			<hr>
       			<div id="showfreehold" class="btn">If you are buying or selling a freehold property click here to update to show the Freehold Fees</div>
       			&nbsp;
       		</div>
       		
       		
       		
          <p>
           <?=$row -> content ?>
          </p>
          <?php foreach($random as $randomrow): ?>
          	<?php
          	$randomTitle =  str_replace('[town]', $row -> town, $randomrow -> title);
          	$randomContent = str_replace('[town]', $row -> town, $randomrow -> content);
          	
          	
          	?>
          	<h2><?=$randomTitle ?>
          		<?php
						$is_logged_in = $this -> session -> userdata('is_logged_in');
						if (!isset($is_logged_in) || $is_logged_in == true)
						{
							echo "<a href='" . base_url() . "admin/edit/" . $randomrow -> menu . "'><i class='icon-pencil'></i> </a><br/>";
						}
					?></h2>
          	<?=$randomContent ?>
          	<?php endforeach; ?>
          
          
          
            <?php endforeach; ?>
            
           <!-- <pre> <?=print_r($lease_sale)?></pre> -->
        </div>
        

        
        
    
    
    
</div><!--/Main content--> 


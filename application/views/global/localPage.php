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
       		<div class="well">
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
       				
       				
       				Total Legal Fees VAT and Disbursements for Selling: £<?=$freeholdselling?><br/>
       				Total Legal Fees VAT and Disbursements for Buying: £<?=$freeholdbuying?>
       			</div>
       			
       				
       			</div>
       			
       			&nbsp;
       		</div>
       		
       		<div class="well">
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
       				
       				
       				Total Legal Fees VAT and Disbursements for Selling: £<?=$leaseholdselling?><br/>
       				Total Legal Fees VAT and Disbursements for Buying: £<?=$leaseholdbuying?>
       			</div>
       			</div>
       			
       			&nbsp;
       		</div>
       		
       		
       		
       		<img width="100%" src="http://maps.googleapis.com/maps/api/staticmap?center=<?=$row -> town ?>&zoom=13&size=800x200&maptype=roadmap&sensor=false"/>
       		
          
           <?=$row -> content ?>
            <?php endforeach; ?>
            
           <!-- <pre> <?=print_r($lease_sale)?></pre> -->
        </div>
        

        
        
    
    
    
</div><!--/Main content--> 


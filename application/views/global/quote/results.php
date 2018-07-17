<?php
	/*
	 * To change this template, choose Tools | Templates
	 * and open the template in the editor.
	 */
	if ($countfees <= 1)
	{
		$feeclass = "span12";
		$noright = "";
		$grandtotal = $totalpurchase + $totalsale;
		$grandtotal = number_format($grandtotal, 2, '.', '');
		if (isset($stamp_fee))
		{
			$grandtotalnostamp = number_format(($grandtotal - $stamp_fee), 2, '.', '');
		}
	}
	if ($countfees == 2)
	{
		$feeclass = "span6";
		$noright = "noright";
		$grandtotal = $totalpurchase + $totalsale;
		$grandtotal = number_format($grandtotal, 2, '.', '');
		if (isset($stamp_fee))
		{
			$grandtotalnostamp = number_format(($grandtotal - $stamp_fee), 2, '.', '');
		}
	}
?>

 <!-- Content
    ============================================================================================================== -->  
	
    <!-- Title -->
  <div class="row outerDiv">
     <div class="span4">
           
<?=$this -> load -> view('global/calculator') ?>
    </div>
    <div class="span8 ">
    	<div class="hero-results color-bg ">
    		<div class="pad10">
    		Results
    	<?php if (isset($stamp_fee) && $stamp_fee > 0) { ?>
    	<table class="table ">
    		<tr>
    			<td style="color:#fff">Total fees and expenses<br/><small style="color:#fff">
    				(excluding stamp duty)</small></td>
    			<td class=""><h1 style="color:#fff">£<?= $grandtotalnostamp ?></h2></td>
    		</tr>
    	</table>
    	<?php } ?>
    	<table class="table ">
    		<tr>
    			<td style="color:#fff">Total fees and expenses<br/><small style="color:#fff">
    				<?php if (isset($stamp_fee) && $stamp_fee > 0) { ?>
    					(including stamp duty)
    					 <?php } ?>
    					 </small></td>
    			<td class=""><h1 style="color:#fff"> £<?=$totalsale+$totalpurchase?></h1>
    			
    			</td>
    		</tr>
    	</table>
    	<?php $info = "Details of your quote are listed below. If you need further help contact us on 01708 757575 or email <a target='_blank' href='mailto:mbs@ker.co.uk'>mbs@ker.co.uk</a>. or request a call back";?>
    	
    	<?php if(!isset($stamp_fee) || $stamp_fee == 0) { ?>
    		<div style="height:176px"><?=$info?></div>
    	<?php } else { ?>
    	
    	<div style="height:49px"><?=$info?></div>
    	<?php } ?>
    	 <?=$this -> load -> view('global/quote/instructbox') ?>
        </div>
        </div>
    </div> 
    </div>
    
   
    
   	<div class="row" >
   		
   		        <!-- our services -->
      
   		
       	<!-- our mission -->
       	 <?php if ($purchasecost != NULL) {  ?>   
       	<div class="<?=$feeclass ?>  centered     ">
       		
       		<div class="block tooltip-title">
       		<h3>Fees for your Purchase</h3>
         <h5>Based on <?= $leasehold ?> purchase of<br/> £<?= $purchasecost ?></h5>
          
          <table  class="table  table-condensed  ">
          <thead>
          	<tr>
          		<th colspan="2"><strong>Our Fees</strong></th>
          	
          	</tr>
          	</thead>
          	<tbody>
          	<tr>
          		<td>for your transaction</td>
          		<td> £<?= $purchase_fee + $leaseholdfee ?></td>
          	</tr>
          	<tr>
          		<td>for sending bank transfers</td>
          		<td>£<?= $banktransfer_purchase ?></td>
          	</tr>
          	<tr>
          		<td>for acting for your mortgage lender</td>
          		<td>£<?= $mortgagefee ?></td>
          	</tr>
          	<tr>
          		<td>for completing stamp duty forms</td>
          		<td>£<?= $stamp_duty_forms ?></td>
          	</tr>
          	<tr>
          		<td>VAT</td>
          		<td>£<?= $feevat ?></td>
          	</tr>
          	</tbody>
          </table>
          
            <table  class="table  table-condensed">
          <thead>
          	<tr>
          		<th colspan="2"><strong>Other Costs</strong></th>
          		
          	</tr>
          	</thead>
          	<tbody>
          	<tr>
          		<td>Stamp Duty</td>
          		<td> £<?= $stamp_fee ?></td>
          	</tr>
               
             	
              
                
                
          	<tr>
          		<td>Land Registry</td>
          		<td>£<?= $land_fee ?></td>
          	</tr>
          	<tr>
          		<td>Local Search (budget figure)</td>
          		<td>£<?= $localsearch ?></td>
          	</tr>
          	<tr>
          		<td>Priority Search</td>
          		<td>£<?= $priority_search ?></td>
          	</tr>
          	<tr>
          		<td>Land Charges</td>
          		<td>£<?= $landcharge ?></td>
          	</tr>
          		<tr>
          		<td>Sub Total</td>
          		<td>£<?= $totalpurchase ?></td>
          	</tr>
          	</tbody>
          </table>
        </div>
          
        </div>
        <?php } ?>
 <?php if ($salecost != NULL) {
    ?>           
	<div class="<?=$feeclass ?>  centered  ">
		<div class="block tooltip-title">
       		<h3>Fees for your Sale</h3>
          <h5 class="">Based on <?= $leaseholdsale ?> sale of<br/> £<?= $salecost ?></h5>
          
          <table  class="table  table-condensed   ">
          <thead>
          	<tr>
          		<th colspan="2"><strong>Our Fees</strong></th>
          	
          	</tr>
          	</thead>
          	<tbody>
          	<tr>
          		<td>for your transaction</td>
          		<td> £<?= $sale_fee + $leaseholdsalefee ?></td>
          	</tr>
          	<tr>
          		<td>for sending bank transfers</td>
          		<td>£<?= $banktransfer_sale ?></td>
          	</tr>
          	<tr>
          		<td>VAT</td>
          		<td>£<?= $salevat ?></td>
          	</tr>
          	<tr>
          		<td>&nbsp;</td>
          		<td>&nbsp;</td>
          	</tr>
          	<tr>
          		<td>&nbsp;</td>
          		<td>&nbsp;</td>
          	</tr>
          	</tbody>
          </table>
          
            <table  class="table  table-condensed">
          <thead>
          	<tr>
          		<th colspan="2"><strong>Other Costs</strong></th>
          		
          	</tr>
          	</thead>
          	<tbody>
          	<tr>
          		<td>Office Copy Entries Duty</td>
          		<td> £<?= $office_copy ?></td>
          	</tr>
          	<tr>
          		<td>&nbsp;</td>
          		<td>&nbsp;</td>
          	</tr>
          	<tr>
          		<td>&nbsp;</td>
          		<td>&nbsp;</td>
          	</tr>
          	<tr>
          		<td>&nbsp;</td>
          		<td>&nbsp;</td>
          	</tr>
          	<tr>
          		<td>&nbsp;</td>
          		<td>&nbsp;</td>
          	</tr>
          		<tr>
          		<td>Sub Total</td>
          		<td>£<?= $totalsale ?></td>
          	</tr>
          	</tbody>
          </table>
         </div>
        </div>
        
        <?php } ?>
    
    
    
</div><!--/Main content er--> 




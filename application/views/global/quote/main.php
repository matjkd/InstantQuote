<div id="conveyancing" style="text-align:center;">
    <img src="<?=base_url()?>images/titles/get_a_conveyancing_quote.png" alt="get a conveyancing quote"/>
    <?=form_open('quote/onscreen')?>
        <div class="form" id="buying" style="text-align:center;">

           <p>
               <strong>Buying Price</strong><br/>
               <?php if(!isset($purchasecost)) { $purchasecost=NULL; } ?>
               <?=form_input('buying_price', $purchasecost)?>
           </p>

            <p><strong>Freehold/LeaseHold</strong><br/>
                 <?php if(!isset($leasehold)) { $leasehold=NULL; } ?>
             <?php if($leasehold!='leasehold') { $leaseholdyes=0; $leaseholdno=1; } else { $leaseholdyes=1; $leaseholdno = 0; }  ?>
             <?=form_radio('leasehold', 'leasehold', $leaseholdyes);?>Leasehold <?=form_radio('leasehold', 'freehold', $leaseholdno);?>Freehold
            </p>

             <p><strong>Are you obtaining a Mortgage</strong><br/>
        <?php if(!isset($mortgage)) { $mortgage=NULL; } ?>
   <?php if($mortgage!=1) { $mortgage=NULL; $mortgageno=1; } else { $mortgageno = 0; }  ?>
              <?=form_radio('mortgage', '1', $mortgage);?>yes <?=form_radio('mortgage', '0', $mortgageno);?>no
             </p>
             
            <?php $is_logged_in = $this->session->userdata('is_logged_in');
                $level = $this->session->userdata('role');

		if($is_logged_in!=NULL || $level == 1)
		{ ?>
                 	
           <p>
               <strong>Buying Fees(admin only)</strong><br/>
               <?php $purchase_fee=NULL; ?>
               <?=form_input('buying_fees', $purchase_fee)?>
           </p>
           
           <?php } ?> 

        </div>

        <div class="form" id="selling" style="text-align:center;">

             <p><strong>Selling Price</strong><br/>
                   <?php if(!isset($salecost)) { $salecost=NULL; } ?>
               <?=form_input('selling_price', $salecost)?>
             </p>
             <p><strong>Freehold/LeaseHold</strong><br/>
                     <?php if(!isset($leaseholdsale)) { $leaseholdsale=NULL; } ?>
             <?php if($leaseholdsale!='leasehold') { $leaseholdsaleyes=0; $leaseholdsaleno=1; } else { $leaseholdsaleyes=1; $leaseholdsaleno = 0; }  ?>
                  <?=form_radio('leaseholdsale', 'leasehold', $leaseholdsaleyes);?>Leasehold <?=form_radio('leaseholdsale', 'freehold', $leaseholdsaleno);?>Freehold
             </p>
             
                <?php $is_logged_in = $this->session->userdata('is_logged_in');
                $level = $this->session->userdata('role');

		if($is_logged_in!=NULL || $level == 1)
		{ ?>
                 	
           <p>
               <strong>Selling Fees(admin only)</strong><br/>
               <?php  $sale_fee=NULL;  ?>
               <?=form_input('selling_fees', $sale_fee)?>
           </p>
           
           <?php } ?> 
             
             
<button type="submit" name="submit" value="Get an Instant Quote" class="submitbutton"><img src="<?=base_url()?>images/titles/get_your_free_quote.png" alt="get your free quote"/></button>
        </div>
    <?=form_close()?>
</div>
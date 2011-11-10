<button class="submitbutton" id="quoteopener">Email Quote</button>

<div id="quotedialog" title="Email your quote" style="display:none;">
   
    <?=form_open('quote/emailquote')?>
        <div class="form" id="instruct">

           <p>
              First Name*<br/>
             
               <?=form_input('firstname2', set_value('firstname2'))?>
           </p>
           
             <p>
               Last Name*<br/>
               
               <?=form_input('lastname2', set_value('lastname2'))?>
           </p>
           <p>
               Email*<br/>
              
               <?=form_input('email2', set_value('email2'))?>
           </p>
           
          

           
             
    <?php if(!isset($purchasecost)) { $purchasecost=NULL; } ?>
               <?=form_hidden('buying_price', $purchasecost)?>
          

          
                 <?php if(!isset($leasehold)) { $leasehold=NULL; } ?>
             <?php if($leasehold!='leasehold') { $leaseholdyes=0; $leaseholdno=1; } else { $leaseholdyes=1; $leaseholdno = 0; }  ?>
           <?=form_hidden('leasehold', $leasehold)?>
            

           
        <?php if(!isset($mortgage)) { $mortgage=NULL; } ?>
   <?php if($mortgage!=1) { $mortgage=NULL; $mortgageno=1; } else { $mortgageno = 0; }  ?>
            <?=form_hidden('mortgage', $mortgage)?>
            

     

          
                   <?php if(!isset($salecost)) { $salecost=NULL; } ?>
                  <?php if(!isset($purchase_fee)) { $purchase_fee=NULL; $leaseholdfee==NULL; } ?>
                  <?php if(!isset($sale_fee)) { $sale_fee=NULL; $leaseholdsalefee==NULL; } ?>
               <?=form_hidden('selling_price', $salecost)?>

             <?=form_hidden('buying_fees', $purchase_fee+$leaseholdfee)?>
   <?=form_hidden('selling_fees', $sale_fee+$leaseholdsalefee)?>
                     <?php if(!isset($leaseholdsale)) { $leaseholdsale=NULL; } ?>
             <?php if($leaseholdsale!='leasehold') { $leaseholdsaleyes=0; $leaseholdsaleno=1; } else { $leaseholdsaleyes=1; $leaseholdsaleno = 0; }  ?>
  <?=form_hidden('leaseholdsale', $leaseholdsale)?>           
<button type="submit" name="submit" value="email quote" class="submitbutton">Email your quote</button>
*required
        </div>
    <?=form_close()?>
</div>
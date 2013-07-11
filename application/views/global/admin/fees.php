<h2>Fees Admin</h2>
<div class="row">
	
	<div class="span4">

   <?=$this->load->view('admin/variables');?>

</div>

<div id="conveyancing" class="span8">
    <?=form_open('admin/add_fee')?>
      
           <p>
               <strong>Fee Type</strong><br/>
               <?php
               $options = array(
                  'purchasefee'  => 'Purchase Fee',
                  'salefee'    => 'Sale Fee',
                  'stampfee'   => 'Stamp Duty Fee',
                  'landfee' => 'Land Registry Fee',
                );
               ?>
               <?=form_dropdown('fee_type', $options)?>
           </p>

            <p><strong>From</strong><br/>
               <?=form_input('low')?>
            </p>

             <p><strong>To</strong><br/>
               <?=form_input('high')?>
            </p>

             <p><strong>Fee</strong><br/>
              <?=form_input('fee')?>
            </p>

        

       
<?=form_submit('submit', 'Submit')?>
   
    <?=form_close()?>
</div>
	
</div>


<div class="row">

<div class="span3">

    <?=$this->load->view('admin/purchase_fees')?>
    </div>

<div class="span3">
<?=$this->load->view('admin/sale_fees')?>
</div>
<div class="span3">
    <?=$this->load->view('admin/stamp_fees')?>
</div>
<div class="span3">
    <?=$this->load->view('admin/land_fees')?>
</div>
</div>
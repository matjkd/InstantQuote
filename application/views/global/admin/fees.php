<h2>Fees Admin</h2>

<div>

   <?=$this->load->view('admin/variables');?>

</div>


<div id="conveyancing">
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
<div style="float:left; padding-left:0px; width:240px; height:270px;">

    <?=$this->load->view('admin/purchase_fees')?>
    </div>

<div style="float:left; padding-left:50px; width:240px; height:270px;">
<?=$this->load->view('admin/sale_fees')?>
</div>
<div style="float:left; padding-left:50px; width:240px; height:270px;">
    <?=$this->load->view('admin/stamp_fees')?>
</div>
<div style="float:left; padding-left:0px; width:240px; height:270px;">
    <?=$this->load->view('admin/land_fees')?>
</div>

<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
foreach($variables as $row):
?>

<div class="field_label">Bank Transfer for Purchase</div>
<div class="edit" id="banktransfer_purchase"><?=$row->banktransfer_purchase?></div>
<div class="clear"></div>



   <div class="field_label"> Bank Transfer Fee for Sale</div>
<div class="edit" id="banktransfer_sale"><?=$row->banktransfer_sale?></div>
<div class="clear"></div>


<div class="field_label">    Mortgage Fee</div>
 <div class="edit" id="mortgage_fee"><?=$row->mortgage_fee?></div>
<div class="clear"></div>


  <div class="field_label">  Leasehold Purchase Fee</div>
  <div class="edit" id="leasehold_purchase"><?=$row->leasehold_purchase?></div>
<div class="clear"></div>


   <div class="field_label"> Leasehold Sale Fee</div>
  <div class="edit" id="leasehold_sale"><?=$row->leasehold_sale?></div>
<div class="clear"></div>


    <div class="field_label">Local Search Fee</div>
 <div class="edit" id="localsearch"><?=$row->localsearch?></div>
<div class="clear"></div>


   <div class="field_label"> Prioirty Search Fee</div>
 <div class="edit" id="priority_search"><?=$row->priority_search?></div>
<div class="clear"></div>


   <div class="field_label"> Landcharge</div>
 <div class="edit" id="landcharge"><?=$row->landcharge?></div>
<div class="clear"></div>


   <div class="field_label"> Office Copies</div>
  <div class="edit" id="office_copy"><?=$row->office_copy?></div>
<div class="clear"></div>

<div class="field_label">Completing Stamp Duty Forms</div>
  <div class="edit" id="stamp_duty_forms"><?=$row->stamp_duty_forms?></div>
<div class="clear"></div>

<?php endforeach; ?>

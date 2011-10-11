<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
foreach($variables as $row):
?>

<div class="field_label">Bank Transfer for Purchase</div>
<div class="edit"><?=$row->banktransfer_purchase?></div>
<div class="clear"></div>



   <div class="field_label"> Bank Transfer Fee for Sale</div>
<div class="edit"><?=$row->banktransfer_sale?></div>
<div class="clear"></div>


<div class="field_label">    Mortgage Fee</div>
 <div class="edit"><?=$row->mortgage_fee?></div>
<div class="clear"></div>


  <div class="field_label">  Leasehold Purchase Fee</div>
  <div class="edit"><?=$row->leasehold_purchase?></div>
<div class="clear"></div>


   <div class="field_label"> Leasehold Sale Fee</div>
  <div class="edit"><?=$row->leasehold_sale?></div>
<div class="clear"></div>


    <div class="field_label">Local Search Fee</div>
 <div class="edit"><?=$row->localsearch?></div>
<div class="clear"></div>


   <div class="field_label"> Prioirty Search Fee</div>
 <div class="edit"><?=$row->priority_search?></div>
<div class="clear"></div>


   <div class="field_label"> Landcharge</div>
 <div class="edit"><?=$row->landcharge?></div>
<div class="clear"></div>


   <div class="field_label"> Office Copies</div>
  <div class="edit"><?=$row->office_copy?></div>
<div class="clear"></div>

<?php endforeach; ?>

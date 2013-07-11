<h2>Fees for Sale</h2>
<table class="table table-striped table-bordered">
<thead>
<th>From</th>
<th>To</th>
<th>Fee</th>
<th></th>
</thead>
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

foreach($salefees as $row):

?>
<tr>
    <td>£<?=$row->low?></td>
    <td>£<?=$row->high?></td>
    <td>£<?=$row->fee?></td>
    <td><a href="<?=base_url()?>admin/delete_fee/<?=$row->fee_id?>"><i class="icon-remove-sign"></i></a></td>

</tr>



<?php endforeach; ?>
</table>
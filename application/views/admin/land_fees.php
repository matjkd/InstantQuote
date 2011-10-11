<h2>Fees for Land Registry</h2>
<table id="datatable3">
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

foreach($landfees as $row):

?>
<tr>
    <td>£<?=$row->low?></td>
    <td>£<?=$row->high?></td>
    <td>£<?=$row->fee?></td>
    <td><a href="<?=base_url()?>admin/delete_fee/<?=$row->fee_id?>">DELETE</a></td>

</tr>

<?php endforeach; ?>
</table>
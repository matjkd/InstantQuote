<div class="modal" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			×
		</button>
		<h3 id="myModalLabel">Email your Quote</h3>
	</div>
	<div class="modal-body">
		<p>
		

    <?= form_open('quote/emailquote') ?>
    

        <p>
            First Name*<br/>

            <?= form_input('firstname2', set_value('firstname2')) ?>
        </p>

        <p>
            Last Name*<br/>

            <?= form_input('lastname2', set_value('lastname2')) ?>
        </p>
        <p>
            Email*<br/>

            <?= form_input('email2', set_value('email2')) ?>
        </p>





        <?php if (!isset($purchasecost)) {
            $purchasecost = NULL;
        } ?>
<?= form_hidden('buying_price', $purchasecost) ?>



        <?php if (!isset($leasehold)) {
            $leasehold = NULL;
        } ?>
        <?php if ($leasehold != 'leasehold') {
            $leaseholdyes = 0;
            $leaseholdno = 1;
        } else {
            $leaseholdyes = 1;
            $leaseholdno = 0;
        } ?>
<?= form_hidden('leasehold', $leasehold) ?>



        <?php if (!isset($mortgage)) {
            $mortgage = NULL;
        } ?>
        <?php if ($mortgage != 1) {
            $mortgage = NULL;
            $mortgageno = 1;
        } else {
            $mortgageno = 0;
        } ?>
<?= form_hidden('mortgage', $mortgage) ?>





<?php if (!isset($salecost)) {
    $salecost = NULL;
} ?>
<?php if (!isset($purchase_fee)) {
    $purchase_fee = NULL;
    $leaseholdfee == NULL;
} ?>
<?php if (!isset($sale_fee)) {
    $sale_fee = NULL;
    $leaseholdsalefee == NULL;
} ?>
<?= form_hidden('selling_price', $salecost) ?>

<?= form_hidden('buying_fees', $purchase_fee + $leaseholdfee) ?>
<?= form_hidden('selling_fees', $sale_fee + $leaseholdsalefee) ?>
<?php if (!isset($leaseholdsale)) {
    $leaseholdsale = NULL;
} ?>
<?php if ($leaseholdsale != 'leasehold') {
    $leaseholdsaleyes = 0;
    $leaseholdsaleno = 1;
} else {
    $leaseholdsaleyes = 1;
    $leaseholdsaleno = 0;
} ?>
<?= form_hidden('leaseholdsale', $leaseholdsale) ?>           
       
        *required
   
	
		</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">
			Close
		</button>
		<button type="submit" name="submit" value="email quote" class="btn btn-primary">
			Email your quote
		</button>
	</div>
</div>
<?= form_close() ?>

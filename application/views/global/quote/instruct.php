<div class="modal" id="instructModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			×
		</button>
		<h3 id="myModalLabel">Instruct</h3>
	</div>
	<div class="modal-body">
		<p>
		

    <?= form_open('quote/instruct') ?>
    

        <p>
            <label>First Name*</label>

            <?= form_input('firstname', set_value('firstname')) ?>
        </p>

        <p>
            Last Name*<br/>

            <?= form_input('lastname', set_value('lastname')) ?>
        </p>
        <p>
            Email*<br/>

            <?= form_input('email', set_value('email')) ?>
        </p>

        <p>
            Postal Address*<br/>

            <?= form_textarea('address', set_value('address')) ?>
        </p>
        <p>
            Comments<br/>

            <?= form_textarea('comments', set_value('comments')) ?>
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
    $leaseholdfee = NULL;
} ?>
<?php if (!isset($sale_fee)) {
    $sale_fee = NULL;
    $leaseholdsalefee = NULL;
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
		<button type="submit" name="submit" value="Instruct us" class="btn btn-primary">
			Instruct Us
		</button>
	</div>
</div>
<?= form_close() ?>

<?= form_close() ?>
</div>



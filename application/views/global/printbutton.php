<form action="<?=base_url()?>quote/printout" method="post" accept-charset="utf-8" style="float:left; margin:0 3px 0 0;">      

          
 
<?=form_open('quote/printout') ?>

<?php
	if (!isset($purchasecost))
	{
		$purchasecost = NULL;
	}
?>
<?=form_hidden('buying_price', $purchasecost) ?>

<?php
	if (!isset($leasehold))
	{
		$leasehold = NULL;
	}
?>
<?php
	if ($leasehold != 'leasehold')
	{
		$leaseholdyes = 0;
		$leaseholdno = 1;
	}
	else
	{
		$leaseholdyes = 1;
		$leaseholdno = 0;
	}
?>
<?=form_hidden('leasehold', $leasehold) ?>

<?php
	if (!isset($mortgage))
	{
		$mortgage = NULL;
	}
?>
<?php
	if ($mortgage != 1)
	{
		$mortgage = NULL;
		$mortgageno = 1;
	}
	else
	{
		$mortgageno = 0;
	}
?>
<?=form_hidden('mortgage', $mortgage) ?>

<?php
	if (!isset($salecost))
	{
		$salecost = NULL;
	}
?>
<?php
	if (!isset($purchase_fee))
	{
		$purchase_fee = NULL;
		$leaseholdfee == NULL;
	}
?>
<?php
	if (!isset($sale_fee))
	{
		$sale_fee = NULL;
		$leaseholdsalefee == NULL;
	}
?>
<?=form_hidden('selling_price', $salecost) ?>

<?=form_hidden('buying_fees', $purchase_fee + $leaseholdfee) ?>
<?=form_hidden('selling_fees', $sale_fee + $leaseholdsalefee) ?>
<?php
	if (!isset($leaseholdsale))
	{
		$leaseholdsale = NULL;
	}
?>
<?php
	if ($leaseholdsale != 'leasehold')
	{
		$leaseholdsaleyes = 0;
		$leaseholdsaleno = 1;
	}
	else
	{
		$leaseholdsaleyes = 1;
		$leaseholdsaleno = 0;
	}
?>
<?=form_hidden('leaseholdsale', $leaseholdsale) ?>

<a href="" onclick="$(this).closest('form').submit()" class="btn-large btn color-bg" type="button"
rel="popover" title="PDF" data-placement="top" data-content="Download or Print your Quote" data-trigger="hover"  data-toggle="modal" data-target="#pdfModal"> PDF </a>

<?=form_close() ?>

<?=form_open('quote/onscreen') ?>
<div class="accordion" id="accordion2">
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">If you are Buying </a>
		</div>
		<div id="collapseOne" class="accordion-body collapse in">
			<div class="accordion-inner">

				<div class="control-group">
					<label class="control-label" for="inputIcon">Buying Price</label>
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on">&pound;</span>
							<?php
								if (!isset($purchasecost))
								{
									$purchasecost = NULL;
								}
 ?>

							<input placeholder="Buying Price" name="buying_price" id="inputIcon" type="text" value="<?=$purchasecost ?>">
						</div>
					</div>
				</div>
				<div class="control-group">
					<div>

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
								$leaseholdno = 'checked';
							}
							else
							{
								$leaseholdyes = 'checked';
								$leaseholdno = 0;
							}
  ?>

						<?=form_radio('leasehold', 'leasehold', $leaseholdyes); ?>
						Leasehold
						&nbsp; &nbsp;
						<?=form_radio('leasehold', 'freehold', $leaseholdno); ?>
						Freehold

					</div>

				</div>

				<div class="control-group">
					<div>
						<label class="control-label" for="inputIcon">Are you obtaining a Mortgage?</label>
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
								$mortgageno = 'checked';
							}
							else
							{
								$mortgageno = 0;
							}
  ?>

						 <?=form_radio('mortgage', '1', $mortgage); ?>
							Yes
							&nbsp; &nbsp;
						 <?=form_radio('mortgage', '0', $mortgageno); ?>
							No 

					</div>

				</div>

			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> If you are Selling </a>
		</div>
		<div id="collapseTwo" class="accordion-body collapse in">
			<div class="accordion-inner">

				<div class="control-group">
					<?php
					if (!isset($salecost))
					{
						$salecost = NULL;
					}
 ?>
					<label class="control-label"  for="inputIcon">Selling Price</label>
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on">&pound;</span>
							<input placeholder="Selling Price" name="selling_price" id="inputIcon" type="text" value="<?=$salecost ?>">
						</div>
					</div>
				</div>
				<div class="control-group">
					<div>
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

					

						<?=form_radio('leaseholdsale', 'leasehold', $leaseholdsaleyes); ?>
						Leasehold
						&nbsp; &nbsp;
						<?=form_radio('leaseholdsale', 'freehold', $leaseholdsaleno); ?>
						Freehold

					</div>

				</div>

			</div>
		</div>
	</div>
</div>
<p>
	<button type="submit" name="submit" value="Get an Instant Quote" class="btn btn-primary btn-large btn-block color-bg">
		Get your FREE Quote &raquo;
	</button>
</p>
<?=form_close() ?>

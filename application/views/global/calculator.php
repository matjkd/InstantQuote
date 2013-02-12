<form>
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
								<input placeholder="Buying Price" name="buying_price" id="inputIcon" type="text">
							</div>
						</div>
					</div>
					<div class="control-group">
						<div class="btn-group" data-toggle-name="is_private" data-toggle="buttons-radio" >
							<label class="control-label" for="inputIcon">Leasehold or Freehold</label>
							<label class="radio">
								<input type="radio" name="leasehold" id="optionsRadios1" value="leasehold" checked>
								Leasehold</label>
							<label class="radio">
								<input type="radio" name="leasehold" id="optionsRadios2" value="freehold">
								Freehold </label>

						</div>
						<input type="hidden" name="leasehold" value="freehold" />
					</div>

					<div class="control-group">
						<div class="btn-group" data-toggle-name="is_private" data-toggle="buttons-radio" >
							<label class="control-label" for="inputIcon">Are you obtaining a Mortgage</label>
							<label class="radio">
								<input type="radio" name="mortgage" id="optionsRadios1" value="Yes" checked>
								Yes</label>
							<label class="radio">
								<input type="radio" name="mortgage" id="optionsRadios2" value="No">
								No </label>

						</div>
						<input type="hidden" name="mortgage" value="0" />
					</div>

				</div>
			</div>
		</div>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> If you are Selling </a>
			</div>
			<div id="collapseTwo" class="accordion-body collapse">
				<div class="accordion-inner">

					<div class="control-group">
						<label class="control-label" name="selling_price" for="inputIcon">Selling Price</label>
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on">&pound;</span>
								<input placeholder="Selling Price" id="inputIcon" type="text">
							</div>
						</div>
					</div>
					<div class="control-group">
						<div class="btn-group" data-toggle-name="is_private" data-toggle="buttons-radio" >
							<label class="control-label" for="inputIcon">Leasehold or Freehold</label>
							<label class="radio">
								<input type="radio" name="leaseholdsale" id="optionsRadios1" value="leasehold" checked>
								Leasehold</label>
							<label class="radio">
								<input type="radio" name="leaseholdsale" id="optionsRadios2" value="freehold">
								Freehold </label>

						</div>
						<input type="hidden" name="leasehold" value="freehold" />
					</div>

					

				</div>
			</div>
		</div>
	</div>
	<p>
		<a class="btn btn-primary btn-large btn-block color-bg"  href="#">Get your FREE Quote &raquo;</a>
	</p>
</form>

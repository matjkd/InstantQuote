<div class="row">
					<div class="span4">

						<?=$this -> load -> view('global/calculator') ?>
					</div>
					<div class="span8">
						<div class="clearfix hero-convey">
							<div class="pull-right color-bg pad10">
							<p class="text-animate-5 clearfix">Call us on</p><br/>
							<p class="text-animate-12 clearfix">01708 757575</p>
							<br/>
							<h4>9:00am - 6:00pm Monday to Friday
							(Standard Call charges apply)</h4>
							</div>
						</div>
					</div>
				</div>
				<!--/slideshow-->

				<!-- End  SLIDER -->

				<!-- middle container (Main Content) -->

				<!-- Catch text -->
				<div class="row">
					<div class="span12">
						<div class="catchText">
							<div class="row">
								<div class="span9">
									<p>
										Online Conveyancing Quote Calculator from the Top Tier Legal 500 Commercial Property Solicitor in Essex
									</p>
								</div>
								<div class="span3">

									<button class="btn-large btn color-bg" type="button" data-toggle="modal" data-target="#myModal">
										Request a Call Back
									</button>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Catch text -->

				<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							×
						</button>
						<h3 id="myModalLabel">Modal header</h3>
					</div>
					<div class="modal-body">
						<p>
							One fine body...
						</p>
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">
							Close
						</button>
						<button class="btn btn-primary">
							Save changes
						</button>
					</div>
				</div>
				

<!-- This row contains // Latest from blog -->
				<div class="row outerDiv">

					<!-- Latest from blog -->
					<?=$this->load->view('extra/bootstrap_news')?>
					
				</div>
				<!--/row-->
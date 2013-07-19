<div class="modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			×
		</button>
		<h3 id="myModalLabel">Login</h3>
	</div>

	<?php

$is_logged_in = $this->session->userdata('is_logged_in');
if(!isset($is_logged_in) || $is_logged_in == true)
{
	?>

	<div class="modal-body">
		you are logged in.
	</div>
	<div class="modal-footer">
		<a class="btn" href="<?=base_url() ?>user/login/logout">logout</a>
		<button class="btn" data-dismiss="modal" aria-hidden="true">
			Close
		</button>
	</div>
	<?php
		} else
		{
	?>
	<?=form_open(base_url() . 'user/login/validate_credentials') ?>
	<div class="modal-body">
		<p>
		<p>
			Usernamee*
			<br/>

			<?= form_input('username') ?>
		</p>

		<p>
			Password*
			<br/>

			<?= form_password('password') ?>
		</p>
		</p>
	</div>

	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">
			Close
		</button>
		<button type="submit" name="submit" value="email quote" class="btn btn-primary">
			Login
		</button>
		<?=form_close() ?>
	</div>
	<?php } ?>
</div>
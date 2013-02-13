<!-- Catch text -->
<div class="row">

	<div class=" ">

		<div class="pull-right " >

<?=$this->load->view('global/printbutton')?>
			
			<a href="" class="btn-large btn color-bg" type="button"
			rel="popover" title="Email" data-placement="top" data-content="Email yourself a copy of your Quote" data-trigger="hover"
			data-toggle="modal" data-toggle="modal" data-target="#emailModal"> Email </a>

			<a href="" class="btn-large btn color-bg" type="button"
			rel="popover" title="Instruct Us" data-placement="top" data-content="Send your quote to us" data-trigger="hover"
			data-toggle="modal" data-toggle="modal" data-target="#instructModal"> Instruct </a>
		</div>

	</div>
</div>
<!-- /Catch text -->
<?=$this->load->view('global/quote/emailquote')?>

<?=$this->load->view('global/quote/instruct')?>
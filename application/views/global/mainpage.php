
<?php foreach($content as $row):?>
<h1><?=$row->title?></h1>e

<?php 
$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{
			echo "<a href='".base_url()."admin/edit/".$row->menu."'>edit this page</a><br/>";
		}	

?>

<?=$row->content?>

<?php if($row->extra != NULL) {
$this->load->view('extra/'.$row->extra);	
} ?>
	
	
	
<?php endforeach;?>
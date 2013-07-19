 <!-- Content
    ============================================================================================================== -->  
	
    <!-- Title -->
    <?php foreach($content as $row):?>
    <div class="page-header">
       <h1><?=$row->title?>
       	<?php 
$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{
			echo "<a href='".base_url()."admin/edit/".$row->menu."'><i class='icon-pencil'></i> </a><br/>";
		}	

?>
       	
       	
       	
       </h1>
    </div> 
    
   	<div class="row outerDiv">
   		
   		        <!-- our services -->
        <div class="span4">
           
<?=$this->load->view('global/calculator')?>

    </div>
   		
       	<!-- our mission -->
       	
       	<div class="span8">
       		
          
           <?=$row->content?>
            <?php endforeach; ?>
        </div>
            

        
        
    
    
    
</div><!--/Main content--> 


 <!-- Content
    ============================================================================================================== -->  
	
    <!-- Title -->
    <?php foreach($content as $row):?>
   
    
   	<div class="row outerDiv">
   		
   		        <!-- our services -->
        <div class="span4">
           
<?=$this->load->view('global/calculator')?>

    </div>
   		
       	<!-- our mission -->
       	
       	<div class="span8">
       		<div class="well">
       			<h1><?=$row->title?></h1>
       			Average Sale Price: <?=$row->sale_price?>
       		</div>
          
           <?=$row->content?>
            <?php endforeach; ?>
        </div>
            

        
        
    
    
    
</div><!--/Main content--> 


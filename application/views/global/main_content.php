 <!-- Content
    ============================================================================================================== -->  
	
    <!-- Title -->
    <?php foreach($content as $row):?>
    <div class="page-header">
       <h1><?=$row->title?></h1>
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


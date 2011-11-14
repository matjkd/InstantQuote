<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->


<?=$this->load->view('global/header')?>

<body>

  <div id="container">
    <div class="container_12" role="main">
        <div id="infobar">
        <?=$this->load->view('login/login_box')?>
        </div>
   <div   id="header">
       <div id="lefttitle"><img src="<?=base_url()?>images/titles/logo.png" alt="get a conveyancing quote"/></div>
        <div  id="righttitle"> <img src="<?=base_url()?>images/logo/logo.png" alt="Kenneth Elliott &amp; Rowe"/></div>
        </div>
    </div>

      <div  class="container_12" role="main">
        <div class="ui-dialog-titlebar" id="menu">
             <div id="top_menu">
              <?=$this->load->view('global/menu')?>
                 
             </div>
            
        </div>
    </div>
<div class="clear"></div>
    <div id="main" class="container_12" role="main">
  
        <div class="grid_3">
           <?=$this->load->view('global/sidebar')?>
        </div>

            <div class="grid_9">
                <?=$this->load->view('global/warning')?>
           <?=$this->load->view($main)?>
        </div>
     



    </div>

        <div class="container_12" role="main">
     <div  id="footer">
    	<div class="container_24">
            <a href="http://www.ker.co.uk">Kenneth Elliott &amp; Rowe Solicitors</a>.  &copy; 2011. Website being developed by <a href="http://www.redstudio.co.uk">Redstudio Design Limited</a>
		</div>
        </div>
        </div>


  </div> <!--! end of #container -->
  

  
<?=$this->load->view('global/footer')?>


</body>
</html>
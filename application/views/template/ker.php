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
   <div class="grid_12"  id="header">
         <img src="<?=base_url()?>images/titles/logo.png" alt="get a conveyancing quote"/>
        </div>
    </div>

      <div  class="container_12" role="main">
        <div class="grid_12" id="menu">
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
           <?=$this->load->view($main)?>
        </div>
     



    </div>

        <div class="container_12" role="main">
     <div class="grid_12"  id="footer">

        </div>
        </div>
<?=$this->load->view('login/login_box')?>

  </div> <!--! end of #container -->

<?=$this->load->view('global/footer')?>


</body>
</html>
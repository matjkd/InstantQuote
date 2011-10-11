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
    <header>
<?=$this->load->view('login/login_box')?>
    </header>
    <div id="main" class="container_12" role="main">
        <?=$this->load->view($main)?>
    </div>
    <footer>

    </footer>
  </div> <!--! end of #container -->

<?=$this->load->view('global/footer')?>


</body>
</html>
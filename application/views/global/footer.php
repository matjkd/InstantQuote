  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
 
   <script src="https://www.google.com/jsapi?key=ABQIAAAAo44bloMTDYnLwRZTm304PxRRSlRlMyCs2K4NnXxvo6kziAd1gBQj06o2R5iihQrCIgEQ_9OS1Rieow" type="text/javascript">
   google.load("jquery", "1.6.4");
  google.load("jqueryui", "1.8.16");
  google.load("webfont", "1.0.22");

   </script>
  <script>window.jQuery || document.write('<script src="<?=base_url()?>js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="<?=base_url()?>js/plugins.js"></script>
  <script defer src="<?=base_url()?>js/script.js"></script>
  <!-- end scripts-->


  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
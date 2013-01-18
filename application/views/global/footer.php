  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
 
   <script src="https://www.google.com/jsapi?key=ABQIAAAAo44bloMTDYnLwRZTm304PxRRSlRlMyCs2K4NnXxvo6kziAd1gBQj06o2R5iihQrCIgEQ_9OS1Rieow" type="text/javascript">
 

   </script>
      <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
      
      <!-- cookie cuttr
================================================== -->
<script src="<?=base_url()?>js/cookiecuttr.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>css/cookiecuttr.css">
<script>
    $(document).ready(function () {
        $.cookieCuttr({
            cookieAnalytics: false,
cookieMessage: 'We use cookies on this website, they are required for it to work. To use the website as intended please...',

        });	
    });

</script>
 
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

  <!-- scripts concatenated and minified via ant build script-->
  <script src="<?=base_url()?>js/wymeditor/jquery.wymeditor.min.js"></script>
  <script defer src="<?=base_url()?>js/plugins.js"></script>
  <script defer src="<?=base_url()?>js/script.js"></script>
  <!-- end scripts-->


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19623681-21']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
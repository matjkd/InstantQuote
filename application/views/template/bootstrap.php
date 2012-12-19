
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 41px;
        padding-bottom: 40px;
      }
    </style>
    <link href="<?=base_url()?>css/bootstrap-responsive.css" rel="stylesheet">
     <link href="<?=base_url()?>css/bootstrapTemplate.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?=base_url()?>favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">kenneth elliott &amp; rowe</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<div style="background:#666;">
    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Conveyancing Quote</h1>
        <p>Conveyancing Calculator from the Top Tier Legal 500 Commercial Property Solicitor in Essex</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>
      
     </div>
     </div>
      <div class="container">  

      <!-- Example row of columns -->
      <div class="row-fluid show-grid">
      	<div class="span12">
      		 <div class="row-fluid">
        <div class="span4 ">
        	
          <h2>Get a Quote Now</h2>
          
          
          <form>
          	
          	
          	<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
      If you are Buying
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
       
				         	<div class="control-group">
				  <label class="control-label" for="inputIcon">Buying Price</label>
				  <div class="controls">
				    <div class="input-prepend">
				      <span class="add-on">&pound;</span>
				      <input placeholder="Buying Price" id="inputIcon" type="text">
				    </div>
				  </div>
				</div>
				      	<div class="control-group">
				 <div class="btn-group" data-toggle-name="is_private" data-toggle="buttons-radio" >
				 	<label class="control-label" for="inputIcon">Leasehold or Freehold</label>
				  <button type="button" value="leasehold" class="btn" data-toggle="button">Leasehold</button>
				  <button type="button" value="freehold" class="btn active" data-toggle="button">Freehold</button>
				</div>
				<input type="hidden" name="leasehold" value="freehold" />
				</div>
				
				<div class="control-group">
				 <div class="btn-group" data-toggle-name="is_private" data-toggle="buttons-radio" >
				 	<label class="control-label" for="inputIcon">Are you obtaining a Mortgage</label>
				  <button type="button" value="1" class="btn" data-toggle="button">Yes</button>
				  <button type="button" value="0" class="btn active" data-toggle="button">No</button>
				</div>
				<input type="hidden" name="mortgage" value="0" />
				</div>

      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
       If you are Selling
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse in">
      <div class="accordion-inner">
        Anim pariatur cliche...
      </div>
    </div>
  </div>
</div>
          	
          	
 
          	
          	
          	
          </form>
          
          
          
           <p><a class="btn btn-primary btn-large btn-block"  href="#">Get your FREE Quote &raquo;</a></p>
        
        </div>
         <div class="span8">
        <div class="span6">
          <h2>Qualified Solicitors</h2>
          
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">Learn More &raquo;</a></p>
       </div>
        <div class="span6">
          <h2>No Hidden Charges</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">Learn More &raquo;</a></p>
        </div>
        <div class="row-fluid">
          <div class="span12">
          
          <h3>"Donec sed odio dui. Cras justo odio
          	, dapibus ac facilisis in, egestas eget
          	 quam. Vestibulum id ligula porta felis
          	  euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus."</h3>
       
        </div>
        </div>
        </div>
      </div>
      </div>
      </div>
      <hr> 
<div class="row-fluid">
<div class="span12">
          <h2>Latest News</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>
      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    
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
  <script src="<?=base_url()?>js/bootstrap.min.js"></script>
  

  </body>
</html>

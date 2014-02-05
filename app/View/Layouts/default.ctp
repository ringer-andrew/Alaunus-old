<?php
/**
 *
 * @copyright     Copyright (c) Alaunus Inc. (http://alaunus.com)
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.0.1
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Alaunus. Modern Healthcare Solutions</title>

    <!-- Library CSS -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.min.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/lib/smart/css/main.css">
    
    <!-- Less Styles -->
   	<link rel="stylesheet/less" type="text/css" href="assets/less/main.less" />
   	
   	<!-- Less Compiler -->
   	<script type="text/javascript" src="assets/lib/less-1.6.2.min.js"></script>
   	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/lib/html5shiv.js"></script>
      <script src="assets/lib/respond.min.js"></script>
    <![endif]-->
    
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>Smart</b></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index2.html">Home Variation</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="pricing.html">Pricing Tables</a></li>
                <li class="divider"></li>
				<li><a href="portfolio4.html">Portfolio 4 Col.</a></li>
				<li><a href="single.html">Single Project</a></li>
                <li class="divider"></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="blog-post.html">Blog Post</a></li>
                <li class="divider"></li>
                <li><a href="404.html">404 Error</a></li>
                <li><a href="soon.html">Coming Soon</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div id="main-content">
   		<?php echo $this->fetch('content'); ?>
	</div>
	
	<!-- Footer Wrap -->
	<div id="f">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h3>About Smart</h3>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
				</div>
				<div class="col-lg-4">
					<h3>Our Studio</h3>
					<p>
						Some Ave. 987<br/>
						Liverpool, <br/>
						United Kingdom.<br>
						+44 5784-4343
					</p>
				</div>
				<div class="col-lg-4">
					<h3>Newsletter</h3>
					<p>Each month we collect the best stuff around the design world and share it with you.</p>
					<button type="button" class="btn btn-theme">SUBSCRIBE</button>
				</div>
			
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /Footer wrap -->
	
	<div id="c">
		<div class="container">
			<div class="pull-right">
			<p>Crafted with  <i class="icon-heart"></i>  by Alvarez.is</p>
			</div>
		</div>
	</div>
	
	<!-- Library Scripts -->
    <script type="text/javascript" src="assets/lib/jquery/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="assets/lib/modernizr.custom.17137.js"></script>
    <script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
 
 	<!-- Page Scripts -->
 	<script type="text/javascript" src="assets/js/main.js"></script>
	
  </body>
</html>


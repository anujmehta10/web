<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include('header.php'); ?>
<!---fonts-->
<!--script-->
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<!--lightboxfiles-->
<script type="text/javascript">
	$(function() {
	$('.team a').Chocolat();
	});
</script>	
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
						<script type="text/javascript">
							$(function() {
							
								$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

							});
						</script>						
<!--script-->
</head>
<body>
	<!---header--->
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<i class="sr-only">Toggle navigation</i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.php"><img src="logo.png" width="160px" height="95px"/></a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav <?php if(in_array($filename,$productmenu)): ?>current<?php endif; ?>">
								<li <?php if($filename=='index.php'):?>class="active"<?php endif;?>><a href="index.php">Home </a></li>
								<li <?php if($filename=='about.php'):?>class="active"<?php endif;?>><a href="about.php">About</a></li>
								<li <?php if($filename=='services.php'):?>class="active"<?php endif;?>><a href="services.php">Services</a></li>
								<li <?php if($filename=='linuxhosting.php' ||$filename=='wordpresshosting.php' ||$filename=='windowshosting.php'||$filename=='cmshosting.php' ):?>class="dropdown active"<?php endif;?>>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
									<ul class="dropdown-menu">
										<li><a href="linuxhosting.php">Linux hosting</a></li>
										<li><a href="wordpresshosting.php">WordPress Hosting</a></li>
										<li><a href="windowshosting.php">Windows Hosting</a></li>
										<li><a href="cmshosting.php">CMS Hosting</a></li>
									</ul>			
								</li>
								<li <?php if($filename=='pricing.php'):?>class="active"<?php endif;?>><a href="pricing.php">Pricing</a></li>
								<li <?php if($filename=='blog.php'):?>class="active"<?php endif;?>><a href="blog.php">Blog</a></li>
								<li <?php if($filename=='contact.php'):?>class="active"<?php endif;?>><a href="contact.php">Contact</a></li>
								<li <?php if($filename=='codes.php'):?>class="active"<?php endif;?>><a href="codes.php"><i class="fa fa-shopping-cart"></i></a></li>
								<?php 
							    	if(isset($_SESSION['user'])){
									echo '<li><a href="#">Logout</a></li>';
								}
								else{
									echo '<li if($filename=="login.php"):class="active" endif;><a href="login.php">Login</a></li>';
								}
								?>
							</ul>		  
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>

	<!---header--->
		<!---blog--->
				<div class="content">
					<div class="blog">
						<div class="container">
							<h2>blog</h2>
							<div class="blog-grids">
								<div class="col-md-1 blog-grid">
									<div class="date">
									<h4>09</h4>
									<p>oct</p>
									</div>
									<h6><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 15</h6>
									<h6><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 10</h6>
								</div>
								<div class="col-md-11 blog-grid1">
									<a href="single.html" class="mask"><img src="images/b1.jpg" class="img-responsive zoom-img" alt=""/></a>
									<h4>Praesent justo dolor, lobortis quis, lobortis dignissim</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at,cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<a href="single.html" class="button3">read more</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="blog-grids">
								<div class="col-md-1 blog-grid">
									<div class="date">
									<h4>19</h4>
									<p>oct</p>
									</div>
									<h6><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 20</h6>
									<h6><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 12</h6>
								</div>
								<div class="col-md-11 blog-grid1">
									<a href="single.html" class="mask"><img src="images/b2.jpg" class="img-responsive zoom-img" alt=""/></a>
									<h4>Praesent justo dolor, lobortis quis, lobortis dignissim</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at,cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<a href="single.html" class="button3">read more</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="blog-grids">
								<div class="col-md-1 blog-grid">
									<div class="date">
									<h4>29</h4>
									<p>oct</p>
									</div>
									<h6><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 25</h6>
									<h6><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 15</h6>
								</div>
								<div class="col-md-11 blog-grid1">
									<a href="single.html" class="mask"><img src="images/b3.jpg" class="img-responsive zoom-img" alt=""/></a>
									<h4>Praesent justo dolor, lobortis quis, lobortis dignissim</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at,cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
									<a href="single.html" class="button3">read more</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!---blog--->
				</div>
			<!---footer--->
				<?php include('footer.php'); ?>
			<!---footer--->
			
			
</body>
</html>
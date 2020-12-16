<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include('header.php');
include_once('admin/Product.php');
$pro=new Product();
 ?>
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
										<!-- <li><a href="linuxhosting.php">Linux hosting</a></li>
										<li><a href="wordpresshosting.php">WordPress Hosting</a></li>
										<li><a href="windowshosting.php">Windows Hosting</a></li>
										<li><a href="cmshosting.php">CMS Hosting</a></li> -->
										<?php 
										$data=$pro->nav();
										if($data!=false){
											for($i=0;$i<count($data);$i++){
												echo '<li><a href="catpage.php">'.$data[$i]['prod_name'].'</a></li>';

											}
										}
										?>
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
		<!-- //contact -->
				<div class="content">
					<div class="contact">
						<div class="container">
							<h2>How To Find Us</h2>
							<div class="contact-bottom">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25747236.632689714!2d-115.51770600214958!3d38.02440374907425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c67c6fb8a88d%3A0x1db86518c8d575d3!2sHostGator!5e0!3m2!1sen!2sin!4v1451469130125"  frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="col-md-4 contact-left">
								<h4>Address</h4>
								<p>est eligendi optio cumque nihil impedit quo minus id quod maxime
									<span>26 56D Rescue,US</span></p>
								<ul>
									<li>Free Phone :+1 078 4589 2456</li>
									<li>Telephone :+1 078 4589 2456</li>
									<li>Fax :+1 078 4589 2456</li>
									<li><a href="mailto:info@example.com">info@example.com</a></li>
								</ul>
							</div>
							<div class="col-md-8 contact-left cont">
								<h4>Contact Form</h4>
								<form>
									<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
									<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
									<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
									<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
									<input type="submit" value="Submit" >
									<input type="reset" value="Clear" >

								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
<!-- //contact -->

				</div>
			<!---footer--->
				<?php include('footer.php'); ?>
			<!---footer--->
			
			
</body>
</html>
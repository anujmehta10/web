<!--
Au
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
								<h1><a href="index.html"><span id="ced">Ced</span><span id="host">Hosting</span></a></h1>
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
		<!---login--->
			<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form method="POST" action="account.php"> 
				 <div class="register-top-grid">
					<h3>personal information</h3>
					 <div>
						<span>First Name<label>*</label></span>
						<input type="text" id="name"> 
					 </div>
					 <div>
						<span>Mobile<label>*</label></span>
						<input type="text" id="mobile"> 
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="text" id="email"> 
					 </div>
					 <div>
						 <span>Security Question<label>*</label></span>
						<select class="custom-select" id="inputGroupSelect01">
	                        <option selected>Please select security question.</option>
	                        <option value="What was your childhood nickname?">What was your childhood nickname?</option>
	                        <option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
	                        <option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
	                        <option value="What was your dream job as a child?">What was your dream job as a child?</option>
	                        <option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
                    	</select> 
					 </div>
					 <div><input type="text" id="securityanswer"></div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>login information</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input type="password" id="password1">
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="password" id="password2">
							 </div>
					 </div>
				<div class="clearfix"> </div>
				<div class="register-but">
					   <input type="button" value="submit" id="submit">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
		 </div>
	</div>
<!-- registration -->

			</div>
				<script>
					$('#submit').click(function(){
						// var name=$('#name').val();
						// var mobile=$('#mobile').val();
						// var email=$('#email').val();
						var securityque=$('#inputGroupSelect01').val();
						var securityans=$('#securityanswer').val();
						// var password1=$('#password1').val();
						// var password2=$('#password2').val();

						var name=($('#name').val()).trim();
						var mobile=($('#mobile').val()).trim();
						var email=($('#email').val()).trim();
						// var securityque=($('#securityque').val()).trim();
						// var securityans=($('#securityans').val()).trim();
						var password1=($('#password1').val()).trim();
						var password2=($('#password2').val()).trim();
						var vname=/^([a-zA-Z]+\s?)*$/;
						var vmobile=/^(0)?[0-9]{10}$/;
						var vemail=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
						var vpassword=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/;
						if(name=="" || mobile=="" || email=="" || securityque=="" || securityans=="" || password1=="" || password2==""){
							alert("All Fields are mandotary");
							return false;
						}
						else if(!(name.match(vname))){
							alert("name invalid");
							return false;
						}
						else if(!(password1.match(vpassword))){
							alert("password invalid");
							return false;
						}
						else if(!(mobile.match(vmobile))){
							alert("mobile invalid");
							return false;
						}
						else if(!(email.match(vemail))){
							alert("email invalid");
							return false;
						}

						else if(password1 != password2){
							alert("Password do not match");
						}  
						else if(securityque=="Please select security question."){
							alert("Please Choose Security question");
						}
						else{
							if(name!="" && mobile!="" && email!="" && securityans!="" && password1!="")
							{
								// alert(securityans);
								$.ajax({
					                url: 'inter.php',
					                type:'POST',
					                datatype:'json',
					                data:{
					                    account:true,
					                    name: name,
					                    mobile: mobile,
					                    email: email,
					                    securityque: securityque,
					                    securityans: securityans,
					                    password1:password1
					                    
					                },					              					         
					               	success: function(result) {
				                    	//console.log("result");
				                    	alert("Sign in successfully");
				                    
				                       },
				                	error:function(){
				                    	alert("error");
					                }
					            }); 
					        }else{
					        	alert("Please fill all the details");
					        }
					        
					    }
								
					    });


					</script>


				<?php include('footer.php'); ?>

</body>
</html>
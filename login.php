<?php session_start();
include('config.php');
$obj=new DB_con();
include('header.php'); 
if(isset($_SESSION['user'])){
    header('location:user_dashboard.php');
}elseif(isset($_SESSION['admin'])){
      header('location:admin_dashboard.php');
  }
  else{
    $r=false;
}
?>
	<!---header--->
		<!---login--->
			<div class="content">
				<div class="main-1">
					<div class="container">
						<div class="login-page">
							<div class="account_grid">
								<div class="col-md-6 login-left">
									 <h3>new customers</h3>
									 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
									 <a class="acount-btn" href="account.php">Create an Account</a>
								</div>
								<div class="col-md-6 login-right">
									<h3>registered</h3>
									<p>If you have an account with us, please log in.</p>
									<form method="POST" action="login.php">
									  <div>
										<span>Email Address<label>*</label></span>
										<input type="text" name="email" id="email" class="textinput"> 
									  </div>
									  <div>
										<span>Password<label>*</label></span>
										<input type="password" name="password" id="password" class="textinput"> 
									  </div>
									  <a class="forgot" href="#">Forgot Your Password?</a>
									  <input type="button" nam="submit" id="submit" value="Login">
									</form>
								</div>	
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- login -->
				<!---footer--->
				<?php include('footer.php'); ?>
			<!---footer--->
			<script>
				
				$('#submit').click(function(){
					var email=$('#email').val();
					var password=$('#password').val();
						if(email!="" && password!="")
						{
							 $.ajax({
				                url: 'inter.php',
				                method:'POST',
				                data:{
				                    login:true,
				                    email: email,
				                    password: password    
				                },
				                datatype:'json',
				                success: function(result) {
				                    //console.log(result);
				                    alert(result);
				               
				                       },
				                error:function(){
				                    alert("error");
				                }
				            }); 
				        }
				        else{

				        }
				    });


			</script>

</body>
</html>
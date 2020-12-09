<!--
Au
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php  include('header.php'); 
include('config.php');
?>

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
						var name=$('#name').val();
						var mobile=$('#mobile').val();
						var email=$('#email').val();
						var securityque=$('#inputGroupSelect01').val();
						var securityans=$('#securityanswer').val();
						var password1=$('#password1').val();
						var password2=$('#password2').val();

						var name=($('#name').val()).trim();
						var mobile=($('#mobile').val()).trim();
						var email=($('#email').val()).trim();
						var securityque=($('#securityque').val()).trim();
						var securityans=($('#securityans').val()).trim();
						var password1=($('#password1').val()).trim();
						var password2=($('#password2').val()).trim();
						var vname=/^([a-aZ-Z]+\s?)*$/;
						var vmobile=/^\d{10}$/;
						var vemail=/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
						var vpassword=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/;
						if(name=="" || mobile=="" || email=="" || securityque=="" || securityans=="" || password1=="" || password2==""){
							alert("All Fields are mandotary");
						}














						if(password1 != password2){
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
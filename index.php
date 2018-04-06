	<!DOCTYPE html>
	<html>
	<head>
		<title>Index page</title>
		 <meta charset="utf-8">
 		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 		 <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style1.css">

	</head>
	<body>       
		          <div class="first_box" id="wrapper">
					 <div class="main_box"> 
						 <div class="form_box">
	               				<div class="heading">
	               					<h1>SignUp</h1>
	               				</div>
		                  		<form name="signup" method="POST" action="signup.php">
		                              <div class="form_element">
			                              	<label for="name">
			                              		Full Name
			                                       	</label>
			                              	<input type="text" name="name" id="name" required="">

			                              	<span>

			                              	</span>
		                              </div>
		                              <div class="form_element">
			                              	<label for="email">
			                              		Email
			                              	</label>
			                              	<input type="text" name="email" id="email" required="">

			                              	<span>

			                              	</span>
		                              </div>
		                              <div class="form_element">
			                              	<label for="password">
			                              		Password
			                              	</label>
			                              	<input type="password" name="password" id="password1" required="">

			                              	<span>

			                              	</span>
		                              </div>
		                              <div class="form_element">
		                              		<label for="confirm">
		                              			Confirm Password
		                              		</label>
		                              		<input type="password" name="confirmpassword" id="password2" required="">

		                              		<span>

		                              		</span>
		                              </div>
		                              <div class="form_element">
		                              		<label for="dob">
		                              			Date of Birth
		                              		</label>
		                              		<input type="date" name="dob" id="dob" required="">

		                              		<span>

		                              		</span>
		                              </div>
		                              <div class="form_element">
		                              		<label for="gender">
		                              		Gender
		                              		</label>
		                              		<select name="gender" id="gender" required="">
		                                     <option value="female">Female</option>
		                                     <option value="male">Male</option>
		                                     <option value="other">Other</option>
		                                     <option value="decline">Decline to answer</option>
		                              		</select>

		                              		<span>

		                              		</span>
		                              </div>
		                              <div class="form_element">
		                              		<label for="mobile">
		                                    Mobile
		                              		</label>
		                              		<input type="text" name="mobile" id="mobile" required="">

		                              		<span>

		                              		</span>
		                              </div>
		                              <div class="form_element">
		                              		<label for="address">
		                              			Address
		                              		</label>
		                              		<input type="text" name="address" id="address" required="">

		                              		<span>

		                              		</span>
		                              </div>
		                              <div class="btn">
		                              		<label>

		                              		</label>
		                              		<input type="submit" value="SignUp">

		                              		<span>

		                              		</span>
		                              </div>
		                  		</form>
	                  	 </div>
                       <!-- Sign in form-->
	                  	 <div class="form_box">
		                  	 	<div class="heading">
		                  	 		<h1>Sign In</h1>
		                  	 	</div>
		                  	 	<form name="signin" method="POST" action="signin.php">
		                  	 		<div class="form_element">
		                  	 			<label for="email">
		                  	 				Username
		                  	 			</label>
		                  	 			<input type="text" name="email" id="email" required="">
		                  	 			<span>
		                  	 				
		                  	 			</span>
		                  	 		</div>
		                  	 		<div class="form_element">
		                  	 			<label for="password">
		                  	 				Password
		                  	 			</label>
		                  	 			<input type="password" name="password" id="password1" required="">
		                  	 		</div>
		                  	 		<div class="btn">
		                  	 			<input type="submit" value="SignIn">
		                  	 		</div>
		                  	 	</form>
	                  	 </div>
	                 </div> 
	              </div>  
	</body>
	</html>

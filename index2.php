

<!DOCTYPE HTML>
<html>
    <head>
		<title>Jutsu Art Store</title>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/main.css">

		<link rel="stylesheet" href="css/index.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon" type="image/png" href="icon/fav-icon (2).png" />
		

	</head>

	<body>
		<header>
			<div>
				<div class="bg"></div>
					<div class="fade-in-image">
						<img src="image/transparent-alt.png" class="img" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
					</div>
					

					<div class="offcanvas offcanvas-end inset4" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width: 50%;">
						
						<div class="offcanvas-body" style="margin-top: 5%; ">
							<div class="container" style="background: #E4EBF5;" id="container">
								
								<div class="form-container sign-in-container">
									<form method="post" style="background: #E4EBF5;" id="signinForm" action="signin_action3.php" >
										<h1>Login</h1><br>
										<div class="col-md-1 col-lg-12 ml-auto">	
												<div class="row">
													<!--Username-->
													<div class="input-group col-lg-12 mb-1">
														<input id="email" type="text" name="email" placeholder="Email" class="form-control bg-white border-left-0 border-md neumorphic7 inset5" required="required">
													</div>
								
													<!-- Password -->
													<div class="input-group col-lg-12 mb-1">
														<input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md neumorphic7 inset5" required="required">
													</div>
								
													<!-- Submit Button -->
                    								<div style="align-items: center;">
														<button type="submit" name="submit" value="Sign In" style="width: 50%; ">Sign In</button>
													</div>
													<div style="margin-top: 10px;">
														<a href="#">Forgot your password?</a>
													</div>
								
												</div>
										</div>
									</form>
								</div>
								<div class="form-container sign-up-container">
								
									<form method="post" style="background: #E4EBF5;" action="signup_action2.php">
										<h1 style="margin-top: -20px;">Register</h1><br>
										<div class="col-md-1 col-lg-12 ml-auto">	
												<div class="row">
								
													<!-- First Name -->
													<h5 style="text-align: left;">How do we call you?</h5>
													<div class="input-group col-lg-12 mb-1">
														<input id="fname" type="text" name="fname" placeholder="First Name" class="form-control bg-white border-left-0 border-md neumorphic7 inset5" required="required">
													</div>
								
													<!-- Last Name -->
													<div class="input-group col-lg-12 mb-1">
														<input id="lname" type="text" name="lname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md neumorphic7 inset5" required="required">
													</div>
								
													
													<!-- Email Address -->
													<h5 style="text-align: left;">Contact info</h5>
													<div class="input-group col-lg-12 mb-1">
														<input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md neumorphic7 inset5" required="required">
													</div>
								
													<!-- Phone Number
													<div class="input-group col-lg-12 mb-4">
														<input id="phone_number" type="tel" name="phone_number" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3 neumorphic7 inset5" required="required">
													</div> -->
													
													<!-- Password -->
													<h5 style="text-align: left;">Make it personal!</h5>
													<div class="input-group col-lg-12 mb-1">
														<input id="password2" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md neumorphic7 inset5" required="required">
													</div>
								
													<!-- Submit Button -->
													<div style="align-items: center;">
														<button type="submit" name="submit" id="btnsignup" value="Sign Up"style="width: 50%; ">Sign Up</button>
													</div>
												</div>
										</div>
									</form>
								</div>
								<div class="overlay-container">
									<div class="overlay">
										<div class="overlay-panel overlay-left">
											<h1>Welcome Back!</h1>
											<p>To keep connected with us please login with your username and password</p>
											<button class="ghost" id="signIn" style="padding: 12px 45px;">Sign In</button>
										</div>
										<div class="overlay-panel overlay-right">
											<h1>Hello, Friend!</h1>
											<p>If you haven't made an account yet, just step right up!</p>
											<button class="ghost" id="signUp" style="padding: 12px 45px;">Sign Up</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--<a href="home.html"><img src="/HTML/Jutsu/assets/image/begin.png" class="within" style="width: 30%;"></a>-->
			</div>
		</header>

		<script>
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');

            signUpButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
            });

            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
            });
        </script>

	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<script src="js/slim.min.js"></script>
		<script type="text/javascript" src="auth.js"></script>
	</body>
<html>


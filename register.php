<?php include '_config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.css">
    <link rel="stylesheet" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="sign.css">
    <link rel="stylesheet" href="util.css">
    <title>Register</title>
</head>

<body>
<div class="limiter">
		<div class="container-login100" style="background-image: url('imgs/bgg.jpeg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-49">
						Sign-Up
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Username is required">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" id="name" name="name" placeholder="Type your Full Name">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" id="email" name="email" placeholder="Type your Email ID">
						<span class="focus-input100" data-symbol="&#64;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Email is required">
						<span class="label-input100">Phone number</span>
						<input class="input100" type="number" id="phone_number" name="phone_number" placeholder="Type your Phone no.">
						<span class="focus-input100" data-symbol="&#64;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" id="password" name="password" placeholder="Type your Password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" id="cpassword" name="cpassword" placeholder="Confirm your Password">
						<span class="focus-input100 uil uil-li" data-symbol="&#xf190;"></span>
					</div>
					<br><br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit">
								Sign Up
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-45 p-b-20">
						<span>
							Or Sign-Up using...
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-100">
						<span class="txt1 p-b-17">
							Already have an account?
						</span>

						<a href="login.php" class="txt2">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


    <div id="dropDownSelect1"></div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="sign.js"></script>
</body>

</html>
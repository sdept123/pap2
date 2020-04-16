<?php
	
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="loginBD.php" method="POST">
					<span class="login100-form-title p-b-34">
						LOGIN
					</span>				
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Escreve o Email">
						<input id="email" class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Escreve a Password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" value="Login">
							ENTRAR
						</button>
					</div>
					<div class="w-full text-center">
						<p class="text-center">
            				<?php 
							//Recuperando o valor da variável global, os erro de login.
							if(isset($_SESSION['loginErro'])){
                				echo $_SESSION['loginErro'];
								unset($_SESSION['loginErro']);
								
           					}?>
        				</p>
					</div>
					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Esqueci 
						</span>

						<a href="#" class="txt2">
							nome / password?
						</a>
					</div>
					<div class="w-full text-center">
						<a href="registar.php" class="txt3">
							Registar
						</a>
					</div>
				
				</form>
				
				<div class="login100-more" style="background-image: url('images/bg-3.jpg');"></div>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main1.js"></script>

</body>
</html>
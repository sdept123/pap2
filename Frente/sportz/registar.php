<?php include 'db.inc.php';?>
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
				<form class="login100-form validate-form" enctype="multipart/form-data"  action="registaruser.php" method="POST">					
					<span class="login100-form-title p-b-34">
						REGISTAR
                    </span>	
					Nome:	
					<input type="hidden" name="id" value="<?php if(isset($tblutilizador)){echo $tblutilizador[0];}?>">
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Escreva o Nome">
						<input id="nome" class="input100" type="text" name="nome" value="<?php if(isset($tblutilizador)){echo $tblutilizador[1];}?>" required autofocus >
						<span class="focus-input100"></span>
                    </div>
                    E-mail:
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Escreva o Email"value="<?php if(isset($tblutilizador)){echo $tblutilizador[4];}?>" required>
						<input class="input100" type="email" name="email" id="email"  >
						<span class="focus-input100"></span>
                    </div>	
                    Password:		
                    <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Escreva a Password"value="<?php if(isset($tblutilizador)){echo $tblutilizador[5];}?>" required>
						<input class="input100" type="password" name="pass" id="pass" >
						<span class="focus-input100"></span>
                    </div>		
                    Data de Nascimento:
                    <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Escreva Data de nascimento"value="<?php if(isset($tblutilizador)){echo $tblutilizador[2];}?>" required>
						<input class="input100" type="date" name="datanascimento" id="datanascimento" >
						<span class="focus-input100"></span>
					</div>		
					Contacto:
                    <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Escreva o Contacto"value="<?php if(isset($tblutilizador)){echo $tblutilizador[3];}?>" required>
						<input class="input100" type="text" name="contacto" id="contacto" >
						<span class="focus-input100"></span>
                    </div>	 
					              	
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" >
							REGISTAR
						</button>
					</div>
					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Já tenho
						</span>

						<a href="login.php" class="txt2">
							conta.
						</a>
					</div>
					
					
				</form>

				<div class="login100-more" style="background-image: url('images/bg-2.jpg');"></div>
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

<!DOCTYPE html>



<html lang="en">



<head>



	<title>LOGIN</title>

	<meta charset="UTF-8">



	<meta name="viewport" content="width=device-width, initial-scale=1">



	<!--===============================================================================================-->	



	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>



	<!--===============================================================================================-->



	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/bootstrap/css/bootstrap.min.css">



	<!--===============================================================================================-->



	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">



	<!--===============================================================================================-->



	<link rel="stylesheet" type="text/css" href=" <?= base_url('assets/login/') ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">



	<!--===============================================================================================-->



	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/animate/animate.css">



	<!--===============================================================================================-->	



	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/css-hamburgers/hamburgers.min.css">



	<!--===============================================================================================-->



	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/animsition/css/animsition.min.css">



	<!--===============================================================================================-->



	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/select2/select2.min.css">



	<!--===============================================================================================-->	



	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/daterangepicker/daterangepicker.css">



	<!--===============================================================================================-->



	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/util.css">



	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/main.css">



	<!--===============================================================================================-->



</head>



<body>



	



	<div class="limiter">



		<div class="container-login100" style="background-image: url('https://asset-2.tstatic.net/palembang/foto/bank/images/5-perlengkapan-sekolah-anak-SD-ini-dibuat-sebagai-rekomendasi-untuk-dipersiapkan.jpg');">



			<div class="wrap-login100 p-t-30 p-b-50">



				<span class="login100-form-title p-b-41">



					ADMIN PPDB<br>







				</span>



				<form method="post" action="<?= base_url('login/act_login') ?>" class="login100-form validate-form p-b-33 p-t-5">







					<div class="wrap-input100 validate-input" data-validate = "Enter username">



						<input class="input100" type="text" name="username" placeholder="Username">



						<span class="focus-input100" data-placeholder="&#xe82a;"></span>



					</div>







					<div class="wrap-input100 validate-in put" data-validate="Enter password">



						<input class="input100" type="password" name="pass" id="myInput" placeholder="Password">



						<span class="focus-input100" data-placeholder="&#xe80f;"></span>



					</div>

								<div class='container'>


 							<input type="checkbox" class="mt-3 ml-4 nput100" onclick="myFunction()"> Show Password


					</div>


						




					<div class="container-login100-form-btn m-t-32">



						<button class="login100-form-btn" type="submit">



							Login



						</button>



					</div>







				</form>



			</div>



		</div>



	</div>











	<div id="dropDownSelect1"></div>







	<!--===============================================================================================-->



	<script src="<?= base_url('assets/login/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>



	<!--===============================================================================================-->



	<script src="<?= base_url('assets/login/') ?>vendor/animsition/js/animsition.min.js"></script>



	<!--===============================================================================================-->



	<script src="<?= base_url('assets/login/') ?>vendor/bootstrap/js/popper.js"></script>



	<script src="<?= base_url('assets/login/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>



	<!--===============================================================================================-->



	<script src="<?= base_url('assets/login/') ?>vendor/select2/select2.min.js"></script>



	<!--===============================================================================================-->



	<script src="<?= base_url('assets/login/') ?>vendor/daterangepicker/moment.min.js"></script>



	<script src="<?= base_url('assets/login/') ?>vendor/daterangepicker/daterangepicker.js"></script>



	<!--===============================================================================================-->



	<script src="<?= base_url('assets/login/') ?>vendor/countdowntime/countdowntime.js"></script>



	<!--===============================================================================================-->



	<script src="<?= base_url('assets/login/') ?>js/main.js"></script>



	<script src="<?php echo base_url() ?>assets/alert.js"></script>



	<?php echo "<script>".$this->session->flashdata('message')."</script>"?> 

 <script>
        function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
    </script>






</body>



</html>
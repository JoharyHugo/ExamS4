<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/bootstrap-4.1/bootstrap.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendors/animate/animate.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/css-hamburgers/hamburgers.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/select2/select2.min.css")?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/updatesakafo/css/util.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/updatesakafo/css/main.css")?>">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="<?php echo base_url("assets/img/sport.jpg"); ?>" alt="IMG">
			</div>

			<form class="contact1-form validate-form" action="<?php echo   site_url('sportAdmin/updateSport');?>" method="post">
				<span class="contact1-form-title">
					Update Sport
				</span>

				<input type="hidden" value="<?php  echo $idSport; ?>" name="idSport" id="duree">
     
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="nom" placeholder="Nom Sport">
					<span class="shadow-input1"></span>
				</div>

				

				

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Modifier
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendors/jquery/jquery-3.2.1.min.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendors/bootstrap/js/popper.js");?>"></script>
	<script src="<?php echo base_url("assets/vendors/bootstrap/js/bootstrap.min.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/select2/select2.min.js");?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/tilt/tilt.jquery.min.js");?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/updatesakafo/js/main.js"); ?>"></script>

</body>
</html>

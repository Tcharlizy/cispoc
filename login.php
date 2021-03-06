<!DOCTYPE html>
<html lang="en">
<head>
	<title>Serviço de Saúde da Cidade de Maputo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" async></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" async></script>
	<link rel="stylesheet" href="js/alert/alertify.min.css"/>
	<link rel="stylesheet" href="js/alert/default.min.css"/>
<!--===============================================================================================-->
<script>
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
  }
function showPosition(position)
  {
	  var latitude =position.coords.latitude;
	  var longitude =position.coords.longitude;
	  window.location=('UnidadeSanitaria.php?&link=1&lat='+latitude+'&lon='+longitude);
   console.log(position.coords.latitude);
   console.log(position.coords.longitude);
   
  }

</script>

<script>
function getLocationCarteira()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition1);
    }
  }
function showPosition1(position)
  {
	  var latitude =position.coords.latitude;
	  var longitude =position.coords.longitude;
	  window.location=('CarteiraProfissional.php?&link=1&lat='+latitude+'&lon='+longitude); 
  }

</script>



<script type="text/javascript">
function do_login()
{
 var usuario=$("#usuario").val();
 var senha=$("#senha").val();
 if(usuario!="" && senha!=""){
  $.ajax({
  type:'post',
  url:'login.ajax.php',
  data:{do_login:"do_login", usuario:usuario, senha:senha}, success:function(response) {
  if(response=="ok"){window.location.href="index.php";} else {$("#loading_spinner").css({"display":"none"});
	alertify.error("<?php echo $TEXT['login-invalid']; ?>");}}});}
 else if(usuario!=""){
	 alertify.error("<?php echo $TEXT['login-nopassword']; ?>");}
 else if(senha!=""){
	 alertify.error("<?php echo $TEXT['login-nologinname']; ?>");}
 else {
	 alertify.error("<?php echo $TEXT['login-fill']; ?>");}
 return false;
}
function gotoUrl(url){location.href=url;}
</script>

</head>
<body style="background-color: #fff;" >
	
	<div class="limiter" >
	
		<div class="container-login100" >
			<div class="wrap-login100" style="background-color: #fff;">
				<div class="pharagraf_div" >
				<p class="pharagraf">Centro de Investigação e Treino em</p>
				<p class="pharagraf">Saúde da Polana Caniço(CISPOC)</p>			
				<p>&nbsp;</p>
				</div>
	
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.jpg" alt="IMG">
				</div>

				<form class="login100-form" method="POST" action="login.ajax.php" onsubmit="return do_login();">
				
					

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="usuario" id="usuario" placeholder="NUIT">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="senha" id="senha" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button id="but_submit" class="login100-form-btn">
							Login
						</button>
						
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Esqueceu 
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
				
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
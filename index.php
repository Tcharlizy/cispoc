<?php
  include("conexao.php");
  session_start();
  		if (isset($_SESSION['adm'])) {
		$user = $_SESSION['adm'];
        $iduser = $_SESSION['iduser'];
		
		}else if(isset($_SESSION['nor'])){
				$user = $_SESSION['adm'];
				 $iduser = $_SESSION['iduser'];
				
				}else{
		echo'<script type="text/javascript">window.location="logout.php"</script>';
        }
		
$sql =  "select * from `gestao_usuarios` where `NOME_USUARIO`='$user'";
$resultado = mysqli_query($con, $sql) or die ("Dados nao encontrados!");
$registo = mysqli_fetch_array($resultado);
$nome= $registo['NOME'];
$sector= $registo['SECTOR'];
$idv= $registo['ID_USUARIO'];
$type= $registo['type'];
if($type==11){
	echo'<script type="text/javascript">window.location="CarteiraProfissional.php?&link=2&id='.$idv.'&type='.$type.'"</script>';
}else
	if($type==26){
		echo'<script type="text/javascript">window.location="UnidadeSanitaria.php?&link=2&id='.$idv.'&type='.$type.'"</script>';
	}

?>

<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-GB">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.1.0.379"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musemenu.js", "webpro.js", "musewpdisclosure.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "require.js", "index.css"], "outOfDate":[]};
</script>

  	<script src="alert/alertify.min.js"></script>
	<link rel="stylesheet" href="alert/alertify.min.css"/>
	<link rel="stylesheet" href="alert/default.min.css"/>
	<script type="text/javascript" src="alert/jquery.min.js"></script>
		
	<script type="text/javascript">
	function myFunction(myMessage) {
		alertify.alert('Advertência', 'Não tem permissão para efetuar esta operação!', function(){ alertify.error('Permissão Negada'); });
	}
	</script>
  <title>Home</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=444006867"/>
  <link rel="stylesheet" type="text/css" href="css/homesaudeindex.css?crc=60900355" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_index.css?crc=4237284551"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script src="https://webfonts.creativecloud.com/roboto:n7,n3,n4,n5:default.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
    <!--HTML Widget code-->



<style>

/* css for loader1 */

#u5211 .loader1,
.loader1:before,
.loader1:after {
  background: #00A859;
  -webkit-animation: load1 1s infinite ease-in-out;
  animation: load1 1s infinite ease-in-out;
  width: 1em;
  height: 4em;
}
#u5211 .loader1:before,
.loader1:after {
  position: absolute;
  top: 0;
  content: '';
}
#u5211 .loader1:before {
  left: -1.5em;
}
#u5211 .loader1 {
  text-indent: -9999em;
  margin: 8em auto;
  position: relative;
  font-size: 10px;
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}
#u5211 .loader1:after {
  left: 1.5em;
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}
@-webkit-keyframes load1 {
  0%,
  80%,
  100% {
    box-shadow: 0 0 #00A859;
    height: 4em;
  }
  40% {
    box-shadow: 0 -2em #00A859;
    height: 5em;
  }
}
@keyframes load1 {
  0%,
  80%,
  100% {
    box-shadow: 0 0 #00A859;
    height: 4em;
  }
  40% {
    box-shadow: 0 -2em #00A859;
    height: 5em;
  }
}

/* end of loader1 css */

/* css for loader 2 */


#u5211 .loader2 {
  margin: 4em auto;
  font-size: 10px;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  position: relative;
  text-indent: -9999em;
  -webkit-animation: load5 1.1s infinite ease;
  animation: load5 1.1s infinite ease;
}
@-webkit-keyframes load5 {
  0%,
  100% {
    box-shadow: 0em -2.6em 0em 0em #00A859, 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.5), -1.8em -1.8em 0 0em rgba(0,0,0, 0.7);
  }
  12.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.7), 1.8em -1.8em 0 0em #00A859, 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.5);
  }
  25% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.5), 1.8em -1.8em 0 0em rgba(0,0,0, 0.7), 2.5em 0em 0 0em #00A859, 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  37.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.5), 2.5em 0em 0 0em rgba(0,0,0, 0.7), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  50% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.5), 1.75em 1.75em 0 0em rgba(0,0,0, 0.7), 0em 2.5em 0 0em #00A859, -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  62.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.5), 0em 2.5em 0 0em rgba(0,0,0, 0.7), -1.8em 1.8em 0 0em #00A859, -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  75% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.5), -1.8em 1.8em 0 0em rgba(0,0,0, 0.7), -2.6em 0em 0 0em #00A859, -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  87.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.5), -2.6em 0em 0 0em rgba(0,0,0, 0.7), -1.8em -1.8em 0 0em #00A859;
  }
}
@keyframes load5 {
  0%,
  100% {
    box-shadow: 0em -2.6em 0em 0em #00A859, 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.5), -1.8em -1.8em 0 0em rgba(0,0,0, 0.7);
  }
  12.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.7), 1.8em -1.8em 0 0em #00A859, 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.5);
  }
  25% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.5), 1.8em -1.8em 0 0em rgba(0,0,0, 0.7), 2.5em 0em 0 0em #00A859, 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  37.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.5), 2.5em 0em 0 0em rgba(0,0,0, 0.7), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  50% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.5), 1.75em 1.75em 0 0em rgba(0,0,0, 0.7), 0em 2.5em 0 0em #00A859, -1.8em 1.8em 0 0em rgba(0,0,0, 0.2), -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  62.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.5), 0em 2.5em 0 0em rgba(0,0,0, 0.7), -1.8em 1.8em 0 0em #00A859, -2.6em 0em 0 0em rgba(0,0,0, 0.2), -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  75% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.5), -1.8em 1.8em 0 0em rgba(0,0,0, 0.7), -2.6em 0em 0 0em #00A859, -1.8em -1.8em 0 0em rgba(0,0,0, 0.2);
  }
  87.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(0,0,0, 0.2), 1.8em -1.8em 0 0em rgba(0,0,0, 0.2), 2.5em 0em 0 0em rgba(0,0,0, 0.2), 1.75em 1.75em 0 0em rgba(0,0,0, 0.2), 0em 2.5em 0 0em rgba(0,0,0, 0.2), -1.8em 1.8em 0 0em rgba(0,0,0, 0.5), -2.6em 0em 0 0em rgba(0,0,0, 0.7), -1.8em -1.8em 0 0em #00A859;
  }
}


/* end of loader2 css */

/* css for loader 3 */


#u5211 .loader3,
.loader3:before,
.loader3:after {
  border-radius: 50%;
}
#u5211 .loader3:before,
.loader3:after {
  position: absolute;
  content: '';
}
#u5211 .loader3:before {
  width: 5.2em;
  height: 10.2em;
  background: #00A859;
  border-radius: 10.2em 0 0 10.2em;
  top: -0.1em;
  left: -0.1em;
  -webkit-transform-origin: 5.2em 5.1em;
  transform-origin: 5.2em 5.1em;
  -webkit-animation: load2 2s infinite ease 1.5s;
  animation: load2 2s infinite ease 1.5s;
}
#u5211 .loader3 {
  font-size: 10px;
  text-indent: -99999em;
  margin: 5em auto;
  position: relative;
  width: 10em;
  height: 10em;
  box-shadow: inset 0 0 0 1em #000000;
}
#u5211 .loader3:after {
  width: 5.2em;
  height: 10.2em;
  background: #00A859;
  border-radius: 0 10.2em 10.2em 0;
  top: -0.1em;
  left: 5.1em;
  -webkit-transform-origin: 0px 5.1em;
  transform-origin: 0px 5.1em;
  -webkit-animation: load2 2s infinite ease;
  animation: load2 2s infinite ease;
}
@-webkit-keyframes load2 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes load2 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

/*  end of loder3 css */


/* css for loader 4 */

#u5211 .loader4 {
  font-size: 10px;
  margin: 5em auto;
  text-indent: -9999em;
  width: 11em;
  height: 11em;
  border-radius: 50%;
  background: #00A859;
  transform-origin:center center 0;
  background: -moz-linear-gradient(left, #00A859 10%, rgba(255, 255, 255, 0) 42%);
  background: -webkit-linear-gradient(left, #00A859 10%, rgba(255, 255, 255, 0) 42%);
  background: -o-linear-gradient(left, #00A859 10%, rgba(255, 255, 255, 0) 42%);
  background: -ms-linear-gradient(left, #00A859 10%, rgba(255, 255, 255, 0) 42%);
  background: linear-gradient(to right, #00A859 10%, rgba(255, 255, 255, 0) 42%);
  position: relative;
  -webkit-animation: load3 1.4s infinite linear;
  animation: load3 1.4s infinite linear;
}
#u5211 .loader4:before {
  width: 50%;
  height: 50%;
  background: #00A859;
  border-radius: 100% 0 0 0;
  position: absolute;
  top: 0;
  left: 0;
  content: '';
}
#u5211 .loader4:after {
  background: #000000;
  width: 75%;
  height: 75%;
  border-radius: 50%;
  content: '';
  margin: auto;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}
@-webkit-keyframes load3 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes load3 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

/*  end of loader 4  css */


/* css for loader 5 */


#u5211 .loader5 {
  font-size: 10px;
  margin: 5em auto;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  position: relative;
  text-indent: -9999em;
  -webkit-animation: load4 1.3s infinite linear;
  animation: load4 1.3s infinite linear;
}
@-webkit-keyframes load4 {
  0%,
  100% {
    box-shadow: 0em -3em 0em 0.2em #00A859, 2em -2em 0 0em #00A859, 3em 0em 0 -0.5em #00A859, 2em 2em 0 -0.5em #00A859, 0em 3em 0 -0.5em #00A859, -2em 2em 0 -0.5em #00A859, -3em 0em 0 -0.5em #00A859, -2em -2em 0 0em #00A859;
  }
  12.5% {
    box-shadow: 0em -3em 0em 0em #00A859, 2em -2em 0 0.2em #00A859, 3em 0em 0 0em #00A859, 2em 2em 0 -0.5em #00A859, 0em 3em 0 -0.5em #00A859, -2em 2em 0 -0.5em #00A859, -3em 0em 0 -0.5em #00A859, -2em -2em 0 -0.5em #00A859;
  }
  25% {
    box-shadow: 0em -3em 0em -0.5em #00A859, 2em -2em 0 0em #00A859, 3em 0em 0 0.2em #00A859, 2em 2em 0 0em #00A859, 0em 3em 0 -0.5em #00A859, -2em 2em 0 -0.5em #00A859, -3em 0em 0 -0.5em #00A859, -2em -2em 0 -0.5em #00A859;
  }
  37.5% {
    box-shadow: 0em -3em 0em -0.5em #00A859, 2em -2em 0 -0.5em #00A859, 3em 0em 0 0em #00A859, 2em 2em 0 0.2em #00A859, 0em 3em 0 0em #00A859, -2em 2em 0 -0.5em #00A859, -3em 0em 0 -0.5em #00A859, -2em -2em 0 -0.5em #00A859;
  }
  50% {
    box-shadow: 0em -3em 0em -0.5em #00A859, 2em -2em 0 -0.5em #00A859, 3em 0em 0 -0.5em #00A859, 2em 2em 0 0em #00A859, 0em 3em 0 0.2em #00A859, -2em 2em 0 0em #00A859, -3em 0em 0 -0.5em #00A859, -2em -2em 0 -0.5em #00A859;
  }
  62.5% {
    box-shadow: 0em -3em 0em -0.5em #00A859, 2em -2em 0 -0.5em #00A859, 3em 0em 0 -0.5em #00A859, 2em 2em 0 -0.5em #00A859, 0em 3em 0 0em #00A859, -2em 2em 0 0.2em #00A859, -3em 0em 0 0em #00A859, -2em -2em 0 -0.5em #00A859;
  }
  75% {
    box-shadow: 0em -3em 0em -0.5em #00A859, 2em -2em 0 -0.5em #00A859, 3em 0em 0 -0.5em #00A859, 2em 2em 0 -0.5em #00A859, 0em 3em 0 -0.5em #00A859, -2em 2em 0 0em #00A859, -3em 0em 0 0.2em #00A859, -2em -2em 0 0em #00A859;
  }
  87.5% {
    box-shadow: 0em -3em 0em 0em #00A859, 2em -2em 0 -0.5em #00A859, 3em 0em 0 -0.5em #00A859, 2em 2em 0 -0.5em #00A859, 0em 3em 0 -0.5em #00A859, -2em 2em 0 0em #00A859, -3em 0em 0 0em #00A859, -2em -2em 0 0.2em #00A859;
  }
}
@keyframes load4 {
  0%,
  100% {
    box-shadow: 0em -3em 0em 0.2em #00A859, 2em -2em 0 0em #00A859, 3em 0em 0 -0.5em #00A859, 2em 2em 0 -0.5em #00A859, 0em 3em 0 -0.5em #00A859, -2em 2em 0 -0.5em #00A859, -3em 0em 0 -0.5em #00A859, -2em -2em 0 0em #00A859;
  }
  12.5% {
    box-shadow: 0em -3em 0em 0em #00A859, 2em -2em 0 0.2em #00A859, 3em 0em 0 0em #00A859, 2em 2em 0 -0.5em #00A859, 0em 3em 0 -0.5em #00A859, -2em 2em 0 -0.5em #00A859, -3em 0em 0 -0.5em #00A859, -2em -2em 0 -0.5em #00A859;
  }
  25% {
    box-shadow: 0em -3em 0em -0.5em #00A859, 2em -2em 0 0em #00A859, 3em 0em 0 0.2em #00A859, 2em 2em 0 0em #00A859, 0em 3em 0 -0.5em #00A859, -2em 2em 0 -0.5em #00A859, -3em 0em 0 -0.5em #00A859, -2em -2em 0 -0.5em #00A859;
  }
  37.5% {
    box-shadow: 0em -3em 0em -0.5em #00A859, 2em -2em 0 -0.5em #00A859, 3em 0em 0 0em #00A859, 2em 2em 0 0.2em #00A859, 0em 3em 0 0em #00A859, -2em 2em 0 -0.5em #00A859, -3em 0em 0 -0.5em #00A859, -2em -2em 0 -0.5em #00A859;
  }
  50% {
    box-shadow: 0em -3em 0em -0.5em #00A859, 2em -2em 0 -0.5em #00A859, 3em 0em 0 -0.5em #00A859, 2em 2em 0 0em #00A859, 0em 3em 0 0.2em #00A859, -2em 2em 0 0em #00A859, -3em 0em 0 -0.5em #00A859, -2em -2em 0 -0.5em #00A859;
  }
  62.5% {
    box-shadow: 0em -3em 0em -0.5em #00A859, 2em -2em 0 -0.5em #00A859, 3em 0em 0 -0.5em #00A859, 2em 2em 0 -0.5em #00A859, 0em 3em 0 0em #00A859, -2em 2em 0 0.2em #00A859, -3em 0em 0 0em #00A859, -2em -2em 0 -0.5em #00A859;
  }
  75% {
    box-shadow: 0em -3em 0em -0.5em #00A859, 2em -2em 0 -0.5em #00A859, 3em 0em 0 -0.5em #00A859, 2em 2em 0 -0.5em #00A859, 0em 3em 0 -0.5em #00A859, -2em 2em 0 0em #00A859, -3em 0em 0 0.2em #00A859, -2em -2em 0 0em #00A859;
  }
  87.5% {
    box-shadow: 0em -3em 0em 0em #00A859, 2em -2em 0 -0.5em #00A859, 3em 0em 0 -0.5em #00A859, 2em 2em 0 -0.5em #00A859, 0em 3em 0 -0.5em #00A859, -2em 2em 0 0em #00A859, -3em 0em 0 0em #00A859, -2em -2em 0 0.2em #00A859;
  }
}

/* end of loader 5 css */


/* css for loader 6 */

#u5211 .loader6 {
  font-size: 10px;
  text-indent: -9999em;
  overflow: hidden;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  margin: 0.8em auto;
  position: relative;
  -webkit-animation: load6 1.7s infinite ease;
  animation: load6 1.7s infinite ease;
  transform-origin:center center 0;
}
@-webkit-keyframes load6 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    box-shadow: -0.11em -0.83em 0 -0.4em #00A859, -0.11em -0.83em 0 -0.42em #00A859, -0.11em -0.83em 0 -0.44em #00A859, -0.11em -0.83em 0 -0.46em #00A859, -0.11em -0.83em 0 -0.477em #00A859;
  }
  5%,
  95% {
    box-shadow: -0.11em -0.83em 0 -0.4em #00A859, -0.11em -0.83em 0 -0.42em #00A859, -0.11em -0.83em 0 -0.44em #00A859, -0.11em -0.83em 0 -0.46em #00A859, -0.11em -0.83em 0 -0.477em #00A859;
  }
  30% {
    box-shadow: -0.11em -0.83em 0 -0.4em #00A859, -0.51em -0.66em 0 -0.42em #00A859, -0.75em -0.36em 0 -0.44em #00A859, -0.83em -0.03em 0 -0.46em #00A859, -0.81em 0.21em 0 -0.477em #00A859;
  }
  55% {
    box-shadow: -0.11em -0.83em 0 -0.4em #00A859, -0.29em -0.78em 0 -0.42em #00A859, -0.43em -0.72em 0 -0.44em #00A859, -0.52em -0.65em 0 -0.46em #00A859, -0.57em -0.61em 0 -0.477em #00A859;
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
    box-shadow: -0.11em -0.83em 0 -0.4em #00A859, -0.11em -0.83em 0 -0.42em #00A859, -0.11em -0.83em 0 -0.44em #00A859, -0.11em -0.83em 0 -0.46em #00A859, -0.11em -0.83em 0 -0.477em #00A859;
  }
}
@keyframes load6 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    box-shadow: -0.11em -0.83em 0 -0.4em #00A859, -0.11em -0.83em 0 -0.42em #00A859, -0.11em -0.83em 0 -0.44em #00A859, -0.11em -0.83em 0 -0.46em #00A859, -0.11em -0.83em 0 -0.477em #00A859;
  }
  5%,
  95% {
    box-shadow: -0.11em -0.83em 0 -0.4em #00A859, -0.11em -0.83em 0 -0.42em #00A859, -0.11em -0.83em 0 -0.44em #00A859, -0.11em -0.83em 0 -0.46em #00A859, -0.11em -0.83em 0 -0.477em #00A859;
  }
  30% {
    box-shadow: -0.11em -0.83em 0 -0.4em #00A859, -0.51em -0.66em 0 -0.42em #00A859, -0.75em -0.36em 0 -0.44em #00A859, -0.83em -0.03em 0 -0.46em #00A859, -0.81em 0.21em 0 -0.477em #00A859;
  }
  55% {
    box-shadow: -0.11em -0.83em 0 -0.4em #00A859, -0.29em -0.78em 0 -0.42em #00A859, -0.43em -0.72em 0 -0.44em #00A859, -0.52em -0.65em 0 -0.46em #00A859, -0.57em -0.61em 0 -0.477em #00A859;
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
    box-shadow: -0.11em -0.83em 0 -0.4em #00A859, -0.11em -0.83em 0 -0.42em #00A859, -0.11em -0.83em 0 -0.44em #00A859, -0.11em -0.83em 0 -0.46em #00A859, -0.11em -0.83em 0 -0.477em #00A859;
  }
}


/* end of loader6 css */


/* css for loader 7 */

#u5211 .loader7:before,
.loader7:after,
.loader7 {
  border-radius: 50%;
  width: 2.5em;
  height: 2.5em;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation: load7 1.8s infinite ease-in-out;
  animation: load7 1.8s infinite ease-in-out;
}
#u5211 .loader7 {
  margin: 8em auto;
  font-size: 10px;
  position: relative;
  text-indent: -9999em;
  -webkit-animation-delay: 0.16s;
  animation-delay: 0.16s;
}
#u5211 .loader7:before {
  left: -3.5em;
}
#u5211 .loader7:after {
  left: 3.5em;
  -webkit-animation-delay: 0.32s;
  animation-delay: 0.32s;
}
#u5211 .loader7:before,
.loader7:after {
  content: '';
  position: absolute;
  top: 0;
}
@-webkit-keyframes load7 {
  0%,
  80%,
  100% {
    box-shadow: 0 2.5em 0 -1.3em #00A859;
  }
  40% {
    box-shadow: 0 2.5em 0 0 #00A859;
  }
}
@keyframes load7 {
  0%,
  80%,
  100% {
    box-shadow: 0 2.5em 0 -1.3em #00A859;
  }
  40% {
    box-shadow: 0 2.5em 0 0 #00A859;
  }
}


/* end of loader 7 css */


/* css for loader 8 */

#u5211 .loader8 {
  margin: 6em auto;
  font-size: 10px;
  position: relative;
  text-indent: -9999em;
  border-top: 1.1em solid rgba(255, 255, 255, 0.2);
  border-right: 1.1em solid rgba(255, 255, 255, 0.2);
  border-bottom: 1.1em solid rgba(255, 255, 255, 0.2);
  border-left: 1.1em solid #00A859;
  -webkit-animation: load8 1.1s infinite linear;
  animation: load8 1.1s infinite linear;
  transform-origin:center center 0;
  
}
#u5211 .loader8,
.loader8:after {
  border-radius: 50%;
  width: 10em;
  height: 10em;
}
@-webkit-keyframes load8 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes load8 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

/*  end of loader 8 css */


#u5211 .preloader {
    position:fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background-color:#FFFFFF; /* change if the mask should have another color then white */
    opacity:0.9;
    //z-index:99; /* makes sure it stays on top */

}

#u5211 .status{ margin:20% auto; }




@media screen and (max-width: 980px) {

#u5211 .status{ margin:50% auto; }

}

@media screen and (max-width: 860px) {

#u5211 .status{ margin:50% auto; }

}

@media screen and (max-width: 740px) {

#u5211 .status{ margin:50% auto; }

}

@media screen and (max-width: 640px) {

#u5211 .status{ margin:50% auto; }

  
}

@media screen and (max-width: 480px) {

#u5211 .status{ margin:50% auto; }

}

@media screen and (max-width: 360px) {

#u5211 .status{ margin:80% auto; }

}


</style>

 </head>
 <body class="">

  <div class="clearfix borderbox" id="page"><!-- group -->
   <div class="size_fixed grpelem" id="u5211" data-sizePolicy="fixed" data-pintopage="page_fixedLeft"><!-- custom html -->
    

<div class="preloader"> 
<div class="loader7 status">Loading...</div>
</div>
  

   </div>
   <div class="clearfix grpelem" id="pu4952"><!-- group -->
    <div id="u4952-wrapper">
     <div id="u4952"><!-- simple frame --></div>
    </div>
    <div id="u343-wrapper">
     <div class="rgba-background" id="u343"><!-- simple frame --></div>
    </div>
   </div>
   <div id="u127"><!-- simple frame --></div>
   <div style="position: fixed" class="clearfix grpelem" id="pmenuu584"><!-- column -->
    <nav class="MenuBar clearfix colelem" id="menuu584"><!-- vertical box -->
     <div class="MenuItemContainer clearfix colelem" id="u585"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox rounded-corners clearfix grpelem" id="u586" href="index.php?link=1"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u589-5" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><p><span id="u589">​</span><span class="actAsInlineDiv normal_text" id="u1653"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u1645" data-sizePolicy="fixed" data-pintopage="page_fixedLeft"><!-- svg --><img class="actAsDiv svg" id="u1646" src="images/pasted-svg-177266x198.svg?crc=164475744" width="9" height="10" alt="" data-mu-svgfallback="images/pasted%20svg%20177266x198_poster_.png?crc=380559010"/></span></span>&nbsp; Sair</p></div></a>
     </div>
    </nav>
    <ul class="AccordionWidget clearfix colelem" id="accordionu4373" data-visibility="changed" style="visibility:hidden"><!-- vertical box -->
     <?php
	 if($type==0){echo'
	 
     <a href="index.php?link=13"><li class="AccordionPanel clearfix colelem" id="u4508"><!-- vertical box --><div class="AccordionPanelTab transition clearfix colelem" id="u4509-6" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><p id="u4509-2">Criar</p><p id="u4509-4">Protocolo </p></div></li></a> 
     <a href="index.php?link=15"><li class="AccordionPanel clearfix colelem" id="u4508"><!-- vertical box --><div class="AccordionPanelTab transition clearfix colelem" id="u4509-6" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><p id="u4509-2">Listar</p><p id="u4509-4">Protocolo </p></div></li></a> 
	 ';}else
		 if($type==1){
			 echo '
			<a href="index.php?link=7"><li class="AccordionPanel clearfix colelem" id="u4508"><!-- vertical box --><div class="AccordionPanelTab transition clearfix colelem" id="u4509-6" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><p id="u4509-2">Verificar o </p><p id="u4509-4">Estado</p></div></li></a> 
		 ';
		 }else
		 if($type==2){
			 echo '
			<a href="index.php?link=8"><li class="AccordionPanel clearfix colelem" id="u4508"><!-- vertical box --><div class="AccordionPanelTab transition clearfix colelem" id="u4509-6" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><p id="u4509-2">Verificar o </p><p id="u4509-4">Estado</p></div></li></a> 
		 ';
		 }
	 ?>
	 
	 
	 <a href="index.php?link=9"><li class="AccordionPanel clearfix colelem" id="u4508"><!-- vertical box --><div class="AccordionPanelTab transition clearfix colelem" id="u4509-6" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><p id="u4509-2">Definiçõesde</p><p id="u4509-4">Utilizador </p></div></li></a> 
    </ul>
    <nav class="MenuBar clearfix colelem" id="menuu4036"><!-- vertical box -->
     <div class="MenuItemContainer clearfix colelem" id="u4037"><!-- horizontal box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox transition clearfix grpelem" id="u4040" href="javascript:myFunction('You clicked!')"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u4043-5" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><p><span id="u4043">​</span><span class="actAsInlineDiv normal_text" id="u4044" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=-1,M12=0,M21=0,M22=-1,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u4045" data-sizePolicy="fixed" data-pintopage="page_fixedLeft"><!-- svg --><img class="actAsDiv svg" id="u4046" src="images/pasted-svg-177266x198.svg?crc=164475744" width="9" height="10" alt="" data-mu-svgfallback="images/pasted%20svg%20177266x198_poster_.png?crc=380559010"/></span></span>&nbsp; relatÓrio</p></div></a>
     </div>
    </nav>
   </div>
   <div class="clearfix grpelem" id="ppu1713"><!-- column -->
    <div class="clearfix colelem" id="pu1713"><!-- group -->
     <div style="position: fixed" class="grpelem" id="u1713"><!-- simple frame --></div>
     <div class="clearfix grpelem" id="u1666-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
      <p id="u1666-2" style="position: fixed; padding-left:20px">CENTRO DE INVESTIGAÇÃO E TREINO EM SAÚDE DA POLANA CANIÇO (CISPOC)</p>
     </div>
    </div>
    <div class="clearfix colelem" id="u4181-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
     <p style="margin-top:4px">
	 <?php
		$link=$_GET["link"];
		if(($sector==2) or ($sector==3)){
			$pag[1]			="entrada_1.php";
		}
		else{
			$pag[1]			="entrada.php";
		}
		
		$pag[2]			="novaUnidadeSanitaria.php";
		$pag[3]			="busca.php";
		$pag[4]			="busca_carteira.php";
		$pag[5]			="verCarteira.php";
		$pag[6]			="verUnidade.php";
		$pag[7]			="verCarteira_individual.php";
		$pag[8]			="verUnidade_individual.php";
		$pag[9]			="trocarSenha.php";
		$pag[10]		="registoAuditoria.php";
		$pag[11]		="busca_auditoria.php";
		$pag[12]		="relatorio.php";
		$pag[13]		="criar_protocolo.php";
		$pag[14]		="adicionar_assinantes.php";
		$pag[15]		="busca_protocolo.php";
	
			if(!empty($link))
			{
				if (file_exists($pag[$link]))
				{
				include $pag[$link];
				}
				else
				{
				print "a página não foi encontrada";
				}
			}
	 ?>
	 
	 </p>
    </div>
   </div>
   <div class="clearfix" id="u2113"><!-- group -->
    <div class="clearfix" id="u2106-5" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
     <p ><span id="u2106">User:</span><?php echo " ",$nome,"    ";?><a href="logout.php"><b style="color:red;">X</b></a></p>
    </div>
    <div class="museBGSize" id="u564"><!-- simple frame --></div>
   </div>
   <div class="verticalspacer" data-offset-top="440" data-content-above-spacer="439" data-content-below-spacer="61" data-sizePolicy="fixed" data-pintopage="page_fixedLeft"></div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js?crc=209076791" type="text/javascript">\x3C/script>');
</script>
  <!-- Other scripts -->
  <script type="text/javascript">
   // Decide weather to suppress missing file error or not based on preference setting
var suppressMissingFileError = true
</script>
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(f+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(f)):alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musemenu","webpro","musewpdisclosure","jquery.musepolyfill.bgsize","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#accordionu4373', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:true,defaultIndex:-1}); });/* #accordionu4373 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=3861931657" type="text/javascript" async data-main="scripts/museconfig.js?crc=144853533" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
  
  <!--HTML Widget code-->
  
		
		<script type="text/javascript">
    
        $(window).load(function() { // makes sure the whole site is loaded
            $('.status').delay(1*0).fadeOut(1*10); // will first fade out the loading animation
            $('.preloader').delay((1*0)+100).fadeOut(1*10); // will fade out the white DIV that covers the website.
            
        })
    
    </script>
		
		
   </body>
</html>

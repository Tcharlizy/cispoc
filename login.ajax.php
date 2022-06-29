<?php
include("conexao.php");

if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    	  $usuario  = $_POST['usuario'];
          $senha 	= $_POST['senha'];

          $result = mysqli_query($con,"SELECT * FROM `gestao_usuarios` WHERE `NOME_USUARIO`='$usuario' AND `SENHA`='$senha'");

          $num = mysqli_num_rows($result);

          if ($num == 1) {

          	while($percorer=mysqli_fetch_array($result)){

          		$adm= $percorer['CATEGORIA'];
          		$usuario = $percorer['NOME_USUARIO'];
				$iduser  = $percorer['ID_USUARIO'];
          		session_start();
				
          		if ($adm==1) {

          			$_SESSION['adm'] = $usuario;
					$_SESSION['iduser'] = $iduser;
          		
          		}else{
          			$_SESSION['nor']= $usuario;
					$_SESSION['iduser'] = $iduser;
          		}
				header("location: index.php?link=1");
  
          	}
          }else{

          	echo '<script type="text/javascript"> alert("O nome do usuario ou senha invalido!"); window.location="login.php"</script>';
          }

mysqli_close($con);

    

    }


?>
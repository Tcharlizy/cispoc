<?php
include("conexao.php");

  $msg = false;
  if(isset($_FILES['carteira_trabalho'])){
	  echo "Prov";
	$provincia				= $_POST["provincia"];
	$senha					= $_POST["senha"];
	$nome_usuario			= $_POST["nome_usuario"];
	$telefone				= $_POST["telefone"];
	$bi						= $_POST["bi"];
	$morada					= $_POST["morada"];
	$responsavel			= $_POST["responsavel"];
	$centro_formacao		= $_POST['centro_formacao'];	
	$cert_profissional		= $_FILES['cert_profissional'];
	$pedido					= $_FILES['pedido'];
	$foto_passe				= $_FILES['foto_passe'];
	$bi_anexo				= $_FILES['bi_anexo'];
	$carteira_trabalho		= $_FILES['carteira_trabalho'];
	$cv						= $_FILES['cv'];
	$estado					= "1";

	
    $cert_profissional_doc = strtolower(substr($_FILES['cert_profissional']['name'], -4)); //pega a extensao do arquivo
	$cert_profissional_new = md5(time()+1).$nome_usuario . $cert_profissional_doc; //define o nome do arquivo
    
	$pedido_doc = strtolower(substr($_FILES['pedido']['name'], -4)); //pega a extensao do arquivo
    $pedido_new = md5(time()+2).$nome_usuario . $pedido_doc; //define o nome do arquivo
	
	$foto_passe_doc = strtolower(substr($_FILES['foto_passe']['name'], -4)); //pega a extensao do arquivo
    $foto_passe_new = md5(time()+3).$nome_usuario . $foto_passe_doc; //define o nome do arquivo
	
	$bi_anexo_doc = strtolower(substr($_FILES['bi_anexo']['name'], -4)); //pega a extensao do arquivo
    $bi_anexo_new = md5(time()+4).$nome_usuario . $bi_anexo_doc; //define o nome do arquivo
	
	$carteira_trabalho_doc = strtolower(substr($_FILES['carteira_trabalho']['name'], -4)); //pega a extensao do arquivo
    $carteira_trabalho_new = md5(time()+5).$nome_usuario . $carteira_trabalho_doc; //define o nome do arquivo
	
	$cv_doc = strtolower(substr($_FILES['cv']['name'], -4)); //pega a extensao do arquivo
    $cv_new = md5(time()+6).$nome_usuario . $cv_doc; //define o nome do arquivo
    
	
	$diretorio = "docs/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['cert_profissional']['tmp_name'], $diretorio.$cert_profissional_new); //efetua o upload
    move_uploaded_file($_FILES['pedido']['tmp_name'], $diretorio.$pedido_new); //efetua o upload
    move_uploaded_file($_FILES['foto_passe']['tmp_name'], $diretorio.$foto_passe_new); //efetua o upload
    move_uploaded_file($_FILES['bi_anexo']['tmp_name'], $diretorio.$bi_anexo_new); //efetua o upload
    move_uploaded_file($_FILES['carteira_trabalho']['tmp_name'], $diretorio.$carteira_trabalho_new); //efetua o upload
    move_uploaded_file($_FILES['cv']['tmp_name'], $diretorio.$cv_new); //efetua o upload
	
    
    $sql_code = "INSERT INTO `gestao_usuarios` (`ID_USUARIO`, `ID_PROVINCIA`, `NOME_USUARIO`, `SENHA`, `CATEGORIA`, `SECTOR`, `NOME`, `APELIDO`, `EMAIL`, `TELEFONE`, `VALIDADE_CONTA`, `TIPO`, `MORADA`, `UNIDADE`, `DATA`, `ESTADO`, `cert_profissional`, `pedido`, `foto_passe`, `bi_anexo`, `carteira_trabalho`, `cv`, `centro_formacao`, `bi`, `type`) 
	VALUES (NULL, '$provincia', '$nome_usuario', '$senha', '1', '3', '$responsavel', NULL, NULL, '$telefone', NULL, NULL, '$morada', NULL, NOW(), '1', '$cert_profissional_new', '$pedido_new', '$foto_passe_new', '$bi_anexo_new', '$carteira_trabalho_new', '$cv_new', '$centro_formacao', '$bi', '1');";
	mysqli_query($con, $sql_code) or die("Dados nao gravados!");
  }

echo '<script type="text/javascript">window.location="CarteiraProfissional.php?&link=1&cod=2"</script>';
?>
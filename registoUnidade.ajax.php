<?php
include("conexao.php");

  $msg = false;
  if(isset($_FILES['r_criminal'])){
	$provincia						= $_POST["provincia"];
	$nome_usuario					= $_POST["nome_usuario"];
	$sector							= '2';
	$responsavel					= $_POST["responsavel"];
	//$email							= $_POST["email"];
	$telefone						= $_POST["telefone"];
	$senha							= $_POST["senha"];
	$tipo							= $_POST["tipo"];
	$morada							= $_POST["morada"];
	$nome_u_clinica					= $_POST["nome_u_clinica"];
	$quadro_pessoal1				= $_POST['quadro_pessoal1'];
	$quadro_pessoal2				= $_POST['quadro_pessoal2'];
	$quadro_pessoal3				= $_POST['quadro_pessoal3'];
	$quadro_pessoal4				= $_POST['quadro_pessoal4'];
	$quadro_pessoal5				= $_POST['quadro_pessoal5'];
	$quadro_pessoal6				= $_POST['quadro_pessoal6'];
	$quadro_pessoal7				= $_POST['quadro_pessoal7'];
	$quadro_pessoal8				= $_POST['quadro_pessoal8'];
	$quadro_pessoal9				= $_POST['quadro_pessoal9'];
	$nuit_numero					= $_POST["nuit_numero"];
	$latitude						= $_POST["latitude"];
	$longitude						= $_POST["longitude"];

	
	
	$r_criminal						= $_FILES['r_criminal'];
	$compromisso_honra				= $_FILES['compromisso_honra'];
	$nuit_anexo						= $_FILES['nuit_anexo'];
	$certidao_reserva				= $_FILES['certidao_reserva'];
	$bi_dos_socios1					= $_FILES['bi_dos_socios1'];
	$bi_dos_socios2					= $_FILES['bi_dos_socios2'];
	$bi_dos_socios3					= $_FILES['bi_dos_socios3'];
	$bi_dos_socios4					= $_FILES['bi_dos_socios4'];
	$bi_dos_socios5					= $_FILES['bi_dos_socios5'];
	$bi_dos_socios6					= $_FILES['bi_dos_socios6'];
	$bi_dos_socios7					= $_FILES['bi_dos_socios7'];
	$bi_dos_socios8					= $_FILES['bi_dos_socios8'];
	$bi_dos_socios9					= $_FILES['bi_dos_socios9'];

	$memoria_descritiva				= $_FILES['memoria_descritiva'];
	$quadro_pessoal_anexo1			= $_FILES['quadro_pessoal_anexo1'];
	$quadro_pessoal_anexo2			= $_FILES['quadro_pessoal_anexo2'];
	$quadro_pessoal_anexo3			= $_FILES['quadro_pessoal_anexo3'];
	$quadro_pessoal_anexo4			= $_FILES['quadro_pessoal_anexo4'];
	$quadro_pessoal_anexo5			= $_FILES['quadro_pessoal_anexo5'];
	$quadro_pessoal_anexo6			= $_FILES['quadro_pessoal_anexo6'];
	$quadro_pessoal_anexo7			= $_FILES['quadro_pessoal_anexo7'];
	$quadro_pessoal_anexo8			= $_FILES['quadro_pessoal_anexo8'];
	$quadro_pessoal_anexo9			= $_FILES['quadro_pessoal_anexo9'];
	$requerimento					= $_FILES['requerimento'];
	$estado					= "0";

	
    $r_criminal_doc = strtolower(substr($_FILES['r_criminal']['name'], -4)); //pega a extensao do arquivo
	$r_criminal_new = md5(time()+1).$nome_usuario . $r_criminal_doc; //define o nome do arquivo
    
	$compromisso_honra_doc = strtolower(substr($_FILES['compromisso_honra']['name'], -4)); //pega a extensao do arquivo
    $compromisso_honra_new = md5(time()+2).$nome_usuario . $compromisso_honra_doc; //define o nome do arquivo
	
	$nuit_anexo_doc = strtolower(substr($_FILES['nuit_anexo']['name'], -4)); //pega a extensao do arquivo
    $nuit_anexo_new = md5(time()+3).$nome_usuario . $nuit_anexo_doc; //define o nome do arquivo
	
	$certidao_reserva_doc = strtolower(substr($_FILES['certidao_reserva']['name'], -4)); //pega a extensao do arquivo
    $certidao_reserva_new = md5(time()+3).$nome_usuario . $certidao_reserva_doc; //define o nome do arquivo
	
	
	$requerimento_doc = strtolower(substr($_FILES['requerimento']['name'], -4)); //pega a extensao do arquivo
    $requerimento_new = md5(time()+3).$nome_usuario . $requerimento_doc; //define o nome do arquivo
	
	$bi_dos_socios1_doc = strtolower(substr($_FILES['bi_dos_socios1']['name'], -4)); //pega a extensao do arquivo
    $bi_dos_socios1_new = md5(time()+4).$nome_usuario . $bi_dos_socios1_doc; //define o nome do arquivo
	$bi_dos_socios2_doc = strtolower(substr($_FILES['bi_dos_socios2']['name'], -4)); //pega a extensao do arquivo
    $bi_dos_socios2_new = md5(time()+5).$nome_usuario . $bi_dos_socios2_doc; //define o nome do arquivo
	$bi_dos_socios3_doc = strtolower(substr($_FILES['bi_dos_socios3']['name'], -4)); //pega a extensao do arquivo
    $bi_dos_socios3_new = md5(time()+6).$nome_usuario . $bi_dos_socios3_doc; //define o nome do arquivo
	$bi_dos_socios4_doc = strtolower(substr($_FILES['bi_dos_socios4']['name'], -4)); //pega a extensao do arquivo
    $bi_dos_socios4_new = md5(time()+7).$nome_usuario . $bi_dos_socios4_doc; //define o nome do arquivo
	$bi_dos_socios5_doc = strtolower(substr($_FILES['bi_dos_socios5']['name'], -4)); //pega a extensao do arquivo
    $bi_dos_socios5_new = md5(time()+8).$nome_usuario . $bi_dos_socios5_doc; //define o nome do arquivo
	$bi_dos_socios6_doc = strtolower(substr($_FILES['bi_dos_socios6']['name'], -4)); //pega a extensao do arquivo
    $bi_dos_socios6_new = md5(time()+9).$nome_usuario . $bi_dos_socios6_doc; //define o nome do arquivo
	$bi_dos_socios7_doc = strtolower(substr($_FILES['bi_dos_socios7']['name'], -4)); //pega a extensao do arquivo
    $bi_dos_socios7_new = md5(time()+10).$nome_usuario . $bi_dos_socios7_doc; //define o nome do arquivo
	$bi_dos_socios8_doc = strtolower(substr($_FILES['bi_dos_socios8']['name'], -4)); //pega a extensao do arquivo
    $bi_dos_socios8_new = md5(time()+11).$nome_usuario . $bi_dos_socios8_doc; //define o nome do arquivo
	$bi_dos_socios9_doc = strtolower(substr($_FILES['bi_dos_socios9']['name'], -4)); //pega a extensao do arquivo
    $bi_dos_socios9_new = md5(time()+12).$nome_usuario . $bi_dos_socios9_doc; //define o nome do arquivo

	
	$memoria_descritiva_doc = strtolower(substr($_FILES['memoria_descritiva']['name'], -4)); //pega a extensao do arquivo
    $memoria_descritiva_new = md5(time()+22).$nome_usuario . $memoria_descritiva_doc; //define o nome do arquivo
	
	
	$quadro_pessoal_anexo1_doc = strtolower(substr($_FILES['quadro_pessoal_anexo1']['name'], -4)); //pega a extensao do arquivo
    $quadro_pessoal_anexo1_new = md5(time()+23).$nome_usuario . $quadro_pessoal_anexo1_doc; //define o nome do arquivo
	$quadro_pessoal_anexo2_doc = strtolower(substr($_FILES['quadro_pessoal_anexo2']['name'], -4)); //pega a extensao do arquivo
    $quadro_pessoal_anexo2_new = md5(time()+24).$nome_usuario . $quadro_pessoal_anexo2_doc; //define o nome do arquivo
	$quadro_pessoal_anexo3_doc = strtolower(substr($_FILES['quadro_pessoal_anexo3']['name'], -4)); //pega a extensao do arquivo
    $quadro_pessoal_anexo3_new = md5(time()+25).$nome_usuario . $quadro_pessoal_anexo3_doc; //define o nome do arquivo
	$quadro_pessoal_anexo4_doc = strtolower(substr($_FILES['quadro_pessoal_anexo4']['name'], -4)); //pega a extensao do arquivo
    $quadro_pessoal_anexo4_new = md5(time()+26).$nome_usuario . $quadro_pessoal_anexo4_doc; //define o nome do arquivo
	$quadro_pessoal_anexo5_doc = strtolower(substr($_FILES['quadro_pessoal_anexo5']['name'], -4)); //pega a extensao do arquivo
    $quadro_pessoal_anexo5_new = md5(time()+27).$nome_usuario . $quadro_pessoal_anexo5_doc; //define o nome do arquivo
	$quadro_pessoal_anexo6_doc = strtolower(substr($_FILES['quadro_pessoal_anexo6']['name'], -4)); //pega a extensao do arquivo
    $quadro_pessoal_anexo6_new = md5(time()+28).$nome_usuario . $quadro_pessoal_anexo6_doc; //define o nome do arquivo
	$quadro_pessoal_anexo7_doc = strtolower(substr($_FILES['quadro_pessoal_anexo7']['name'], -4)); //pega a extensao do arquivo
    $quadro_pessoal_anexo7_new = md5(time()+29).$nome_usuario . $quadro_pessoal_anexo7_doc; //define o nome do arquivo
	$quadro_pessoal_anexo8_doc = strtolower(substr($_FILES['quadro_pessoal_anexo8']['name'], -4)); //pega a extensao do arquivo
    $quadro_pessoal_anexo8_new = md5(time()+30).$nome_usuario . $quadro_pessoal_anexo8_doc; //define o nome do arquivo
	$quadro_pessoal_anexo9_doc = strtolower(substr($_FILES['quadro_pessoal_anexo9']['name'], -4)); //pega a extensao do arquivo
    $quadro_pessoal_anexo9_new = md5(time()+31).$nome_usuario . $quadro_pessoal_anexo9_doc; //define o nome do arquivo
    
	
	$diretorio = "docs/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['r_criminal']['tmp_name'], $diretorio.$r_criminal_new); //efetua o upload
    move_uploaded_file($_FILES['compromisso_honra']['tmp_name'], $diretorio.$compromisso_honra_new); //efetua o upload
    move_uploaded_file($_FILES['nuit_anexo']['tmp_name'], $diretorio.$nuit_anexo_new); //efetua o upload
    move_uploaded_file($_FILES['certidao_reserva']['tmp_name'], $diretorio.$certidao_reserva_new); //efetua o upload
    move_uploaded_file($_FILES['bi_dos_socios1']['tmp_name'], $diretorio.$bi_dos_socios1_new); //efetua o upload
    move_uploaded_file($_FILES['bi_dos_socios2']['tmp_name'], $diretorio.$bi_dos_socios2_new); //efetua o upload
    move_uploaded_file($_FILES['bi_dos_socios3']['tmp_name'], $diretorio.$bi_dos_socios3_new); //efetua o upload
    move_uploaded_file($_FILES['bi_dos_socios4']['tmp_name'], $diretorio.$bi_dos_socios4_new); //efetua o upload
    move_uploaded_file($_FILES['bi_dos_socios5']['tmp_name'], $diretorio.$bi_dos_socios5_new); //efetua o upload
    move_uploaded_file($_FILES['bi_dos_socios6']['tmp_name'], $diretorio.$bi_dos_socios6_new); //efetua o upload
    move_uploaded_file($_FILES['bi_dos_socios7']['tmp_name'], $diretorio.$bi_dos_socios7_new); //efetua o upload
    move_uploaded_file($_FILES['bi_dos_socios8']['tmp_name'], $diretorio.$bi_dos_socios8_new); //efetua o upload
    move_uploaded_file($_FILES['bi_dos_socios9']['tmp_name'], $diretorio.$bi_dos_socios9_new); //efetua o upload
    move_uploaded_file($_FILES['memoria_descritiva']['tmp_name'], $diretorio.$memoria_descritiva_new); //efetua o upload
	
    move_uploaded_file($_FILES['quadro_pessoal_anexo1']['tmp_name'], $diretorio.$quadro_pessoal_anexo1_new); //efetua o upload
    move_uploaded_file($_FILES['quadro_pessoal_anexo2']['tmp_name'], $diretorio.$quadro_pessoal_anexo2_new); //efetua o upload
    move_uploaded_file($_FILES['quadro_pessoal_anexo3']['tmp_name'], $diretorio.$quadro_pessoal_anexo3_new); //efetua o upload
    move_uploaded_file($_FILES['quadro_pessoal_anexo4']['tmp_name'], $diretorio.$quadro_pessoal_anexo4_new); //efetua o upload
    move_uploaded_file($_FILES['quadro_pessoal_anexo5']['tmp_name'], $diretorio.$quadro_pessoal_anexo5_new); //efetua o upload
    move_uploaded_file($_FILES['quadro_pessoal_anexo6']['tmp_name'], $diretorio.$quadro_pessoal_anexo6_new); //efetua o upload
    move_uploaded_file($_FILES['quadro_pessoal_anexo7']['tmp_name'], $diretorio.$quadro_pessoal_anexo7_new); //efetua o upload
    move_uploaded_file($_FILES['quadro_pessoal_anexo8']['tmp_name'], $diretorio.$quadro_pessoal_anexo8_new); //efetua o upload
    move_uploaded_file($_FILES['quadro_pessoal_anexo9']['tmp_name'], $diretorio.$quadro_pessoal_anexo9_new); //efetua o upload
    move_uploaded_file($_FILES['requerimento']['tmp_name'], $diretorio.$requerimento_new); //efetua o upload

	

	
    
    $sql_code = "
	INSERT INTO `gestao_usuarios` (`ID_USUARIO`, `ID_PROVINCIA`, `NOME_USUARIO`, `SENHA`, `CATEGORIA`, `SECTOR`, `NOME`, `APELIDO`, `EMAIL`, `TELEFONE`, `VALIDADE_CONTA`, `TIPO`, `MORADA`, `UNIDADE`, `DATA`, `ESTADO`, 
	
	`cert_profissional`, `pedido`, `foto_passe`, `bi_anexo`, `carteira_trabalho`, `cv`, `centro_formacao`, `bi`, `type`, `r_criminal`, `compromisso_honra`, `nuit_numero`, `nuit_anexo`, `certidao_reserva`, `memoria_descritiva`, `quadro_pessoal1`, `quadro_pessoal2`, `quadro_pessoal3`, `quadro_pessoal4`, `quadro_pessoal5`, `quadro_pessoal6`, `quadro_pessoal7`, `quadro_pessoal8`, `quadro_pessoal9`, `quadro_pessoal_anexo1`, `quadro_pessoal_anexo2`, `quadro_pessoal_anexo3`, `quadro_pessoal_anexo4`, `quadro_pessoal_anexo5`, `quadro_pessoal_anexo6`, `quadro_pessoal_anexo7`, `quadro_pessoal_anexo8`, `quadro_pessoal_anexo9`, `requerimento`, `bi_dos_socios1`, `bi_dos_socios2`, `bi_dos_socios3`, `bi_dos_socios4`, `bi_dos_socios5`, `bi_dos_socios6`, `bi_dos_socios7`, `bi_dos_socios8`, `bi_dos_socios9`, `lat`, `lng`) 
	
	VALUES (NULL, '2', '$nome_usuario', '$senha', '1', '2', '$responsavel', NULL, NULL, '$telefone', NULL, '$tipo', '$morada', '$nome_u_clinica', NOW(), '1', 
	
	NULL, NULL, NULL, NULL, NULL, '', '', '', '2', '$r_criminal_new', '$compromisso_honra_new', '$nuit_numero', '$nuit_anexo_new', '$certidao_reserva_new', '$memoria_descritiva_new', '$quadro_pessoal1', '$quadro_pessoal2', '$quadro_pessoal3', '$quadro_pessoal4', '$quadro_pessoal5', '$quadro_pessoal6', '$quadro_pessoal7', '$quadro_pessoal8', '$quadro_pessoal9', '$quadro_pessoal_anexo1_new', '$quadro_pessoal_anexo2_new', '$quadro_pessoal_anexo3_new', '$quadro_pessoal_anexo4_new', '$quadro_pessoal_anexo5_new', '$quadro_pessoal_anexo6_new', '$quadro_pessoal_anexo7_new', '$quadro_pessoal_anexo8_new', '$quadro_pessoal_anexo9_new', '$requerimento_new', '$bi_dos_socios1_new', '$bi_dos_socios2_new', '$bi_dos_socios3_new', '$bi_dos_socios4_new', '$bi_dos_socios5_new', '$bi_dos_socios6_new', '$bi_dos_socios7_new', '$bi_dos_socios8_new', '$bi_dos_socios9_new', '$latitude', '$longitude');
	";
	mysqli_query($con, $sql_code) or die("Dados nao gravados!");
  }

echo '<script type="text/javascript">window.location="UnidadeSanitaria.php?&link=1&cod=2"</script>';
?>
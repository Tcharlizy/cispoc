<?php
include("conexao.php");
	require_once('phpmailer/src/PHPMailer.php');
	require_once('phpmailer/src/SMTP.php');
	require_once('phpmailer/src/Exception.php');
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

  $msg = false;

  if(isset($_FILES['doc_upload'])){
	$nome				= $_POST["nome"];
	$email				= $_POST["email"];
	$doc_identificacao	= $_POST["doc_identificacao"];
	$nuit				= $_POST["nuit"];
	$telefone			= $_POST["telefone"];
	$produto			= $_POST["produto"];
	$valor				= $_POST["valor"];
	$pais				= $_POST["pais"];
	$provincia			= $_POST["provincia"];
	$morada				= $_POST["morada"];
	$doc_upload			= $_FILES['doc_upload'];
	$nuit_upload		= $_FILES['nuit_upload'];
	//$nuit_upload		= $_POST["nuit_upload"];
	$message			= $_POST["message"];
	//$data				= $_POST["data"];
	$estado				= "0";
	
	
    $extensao_doc = strtolower(substr($_FILES['doc_upload']['name'], -4)); //pega a extensao do arquivo
	$novo_doc = md5(time()+1).$nuit . $extensao_doc; //define o nome do arquivo
    $extensao_nuit = strtolower(substr($_FILES['nuit_upload']['name'], -4)); //pega a extensao do arquivo
    $novo_nuit = md5(time()+2).$nuit . $extensao_nuit; //define o nome do arquivo
    $diretorio = "docs/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['doc_upload']['tmp_name'], $diretorio.$novo_doc); //efetua o upload
	
    move_uploaded_file($_FILES['nuit_upload']['tmp_name'], $diretorio.$novo_nuit); //efetua o upload
	
    //$sql_code = "INSERT INTO arquivo (codigo, arquivo, titulo, data, userid) VALUES(null, '$novo_nome','$titulo', NOW(), '$iduser')";
    $sql_code = "INSERT INTO `emprestimos` (`id_emprestimo`, `nome`, `email`, `valor`, `doc_identificacao`, `nuit`, `telefone`, `produto`, `pais`, `provincia`, `morada`, `doc_upload`, `nuit_upload`, `message`, `data`, `estado`) VALUES (NULL, '$nome', '$email', '$valor', '$doc_identificacao', '$nuit', '$telefone', '$produto', '$pais', '$provincia', '$morada', '$novo_doc', '$novo_nuit', '$message', NOW(), '$estado');";
	mysqli_query($con, $sql_code) or die("Dados nao gravados!");
  }


 
$mail = new PHPMailer(true);
 
try {
	$dir="docs/";
	
	//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'gersonotico@gmail.com';
	$mail->Password = 'Amilson@#2021';
	$mail->Port = 587;
	$mail->SMTPOptions = array(
		'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
		)
	);
 
	$mail->setFrom('gersonotico@gmail.com');
	$mail->addAddress('gerson.notico@confianca.co.mz');
	$mail->addAddress('gerson.notico@confianca.co.mz');
 
	$mail->isHTML(true);
	$mail->Subject = 'Pedido de Emprestimo';
	$mail->Body = 'Recebeu este email porque o Sr (a) preencheu o formul&aacute;rio de pedido de empr&eacute;stimo com os seguintes dados:<br>
	Nome: <b>'.$nome.'</b><br>
	Email: <b>'.$email.'</b><br>
	Nuit: <b>'.$nuit.'</b><br>
	Valor: <b>'.$valor.'.00 MZN</b><br>
	Telefone: <b>'.$telefone.'</b><br>
	Provincia: <b>'.$provincia.'</b><br>
	Morada: <b>'.$morada.'</b><br>
	Produto: <b>'.$produto.'</b>';
	$mail->AddAttachment($dir.$novo_nuit);


	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	//echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}
echo '<script type="text/javascript">window.location="index.php?link=9&id=1"</script>';
?>
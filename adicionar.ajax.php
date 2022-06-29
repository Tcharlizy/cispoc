
<?php
include("conexao.php");


  if(isset($_POST['id'])){
	$id				= $_POST["id"];
	$sequencia		= $_POST["sequencia"];
	$codigo			= $_POST["codigo"];
	
	$sql =  "select * from `protocolo` where `id`='$id'";
	$resultado = mysqli_query($con, $sql) or die ("Dados nao encontrados!");
	$registo = mysqli_fetch_array($resultado);
	
	$nome_new=$registo["nome"];
	$email=$registo["email"];
	
	
    $sql_code = "INSERT INTO `protocolo` (`id`, `codigo`, `nome`, `email`, `sequencia`, `estado`) VALUES (NULL, '$codigo', '$nome_new', '$email', '$sequencia', '1')";
	mysqli_query($con, $sql_code) or die("Dados nao gravados!");
	
//	 if($mysqli->query($sql_code)){
//      $msg = "Arquivo enviado com sucesso!";
//	 }
//    else{
//      $msg = "Falha ao enviar arquivo.";
//	}
echo'<script type="text/javascript">window.location="index.php?link=14&cd='.$codigo.'"</script>';

  }

?>
<script src="alert/alertify.min.js"></script>
<link rel="stylesheet" href="alert/alertify.min.css"/>
<link rel="stylesheet" href="alert/default.min.css"/>
<script type="text/javascript" src="alert/jquery.min.js"></script>
<?php
  include("conexao.php");
	$cod = 2;
	$ctg = 1;

	
	if($ctg==1){
		$categoria="Lista de clinicas e unidades sanitárias";
		$tablela ="gestao_usuarios";
		$idg ="ID_USUARIO";
		$link1="b57506fc9125a8f5687031df7ad4fc454175da53";
		
		$tag1="Nome do responsável";
		$tag2="Nome da unidade sanitária/ Clinica";
		$tag3="Estado";
		$campo1 = "NOME";
		$campo2 = "UNIDADE";
		$campo3 = "TELEFONE";
		
	} else if($ctg==2){
		$categoria="Consequências dos acidentes de viação";
		$tablela ="consequencias_dos_acidentes";
		$idg ="ID_CONSEQUENCIA";
		$link1="180dad09f9b61e1ec403493efd788ed2101e47c9";
		
		$tag1="Consequências";
		$tag2="Atual";
		$tag3="Anterior";
		$campo1 = "CONSEQUENCIAS";
		$campo2 = "ACTUAL";
		$campo3 = "ANTERIOR";
		
	} 
	else{
		echo "Nenhuma categoria";
	}


?>

<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-GB">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.1.0.379"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  
  <title>Home</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/busca.css?crc=4065110607" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_index.css?crc=4141586219"/>
  <![endif]-->
  <!-- Other scripts -->
  <!-- JS includes -->
  <script src="https://webfonts.creativecloud.com/roboto:n7,n3,i3,n4:default.js" type="text/javascript"></script>
  
		<script type="text/javascript">
		function myFunction(myMessage) {
			alertify.alert('Advertência', 'Não tem permissão para efetuar esta operação!', function(){ alertify.error('Permissão Negada'); });
		}
		</script>


   </head>
 <body>

  <table width="100%" >
	<tr style="background-color: #f1f1f1; color: #000">
	<td style="height: 40px; font-size:16px">Nome do responsável</td><td>Estado</td><td>Hora</td><td>Localização</td>
	</tr>


	<?php
	//data_inicial
	//data_final
	
	
	
	if(isset($_POST['data_inicial'])){
	@$data_inicial			= $_POST["data_inicial"];
	@$data_final			= $_POST["data_final"];
	}
	if(@$data_inicial!=""){
		$sql =  "select * from `$tablela` where `ID_USUARIO`<>'2' and `ESTADO`='1' order by `ID_USUARIO` asc limit 0,10";
	}
	else{
		$sql =  "select * from `$tablela` where `ID_USUARIO`<>'2' and `ESTADO`='1' order by `ID_USUARIO` asc limit 0,50";
	}

	
	$resultado = mysqli_query($con, $sql) or die ("Dados nao encontrados!");
	
	while ($registo = mysqli_fetch_array($resultado))
					{			
						
		?>
	<tr>
	<td style="height: 30px; font-size:16px;  border-bottom: #f1f1f1 solid 1px;"><?=$registo["NOME"]?></td>
	<td style="height: 30px; font-size:16px;  border-bottom: #f1f1f1 solid 1px;">
	<?php
			if($registo["ESTADO"]=="1"){
				echo "<b style='color:red'>Pendente</b>";
			}else
				if($registo["ESTADO"]=='2'){
					echo "<b style='color:green'>Aprovado</b>";
				}else
					if($registo["ESTADO"]=="3"){
						echo "<b style='color:red; text-decoration: line-through'>Expirado</b>";
					}else if($registo["ESTADO"]=="0"){
						echo "<span style='color:red; text-decoration: line-through'>Rejeitado</span>";
					
					}
	   ?></td>
	<td style="height: 30px; font-size:16px;  border-bottom: #f1f1f1 solid 1px;"><?=$registo["DATA"]?></td>
	<td style="height: 30px; font-size:16px;  border-bottom: #f1f1f1 solid 1px;"><a href="https://www.google.com/maps?hl=en&q=<?=$registo["lat"]?>,<?=$registo["lng"]?>" target="blank">Ver</a></td>
	</tr>

	   
	<?php 
				}
		mysqli_free_result($resultado);
	
	?>

  </table> 
   <div class="verticalspacer" data-offset-top="144" data-content-above-spacer="143" data-content-below-spacer="19" data-sizePolicy="fixed" data-pintopage="page_fixedLeft"></div>
  </div>
</body>
</html>

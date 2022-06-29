<script src="alert/alertify.min.js"></script>
<link rel="stylesheet" href="alert/alertify.min.css"/>
<link rel="stylesheet" href="alert/default.min.css"/>
<script type="text/javascript" src="alert/jquery.min.js"></script>
<?php
  include("conexao.php");
	$cod = $_GET["cod"];
	$ctg = $_GET["ctg"];
	if($cod==2){
	echo '<script type="text/javascript">alertify.error("Apagou com Sucesso!");</script>';
	}
	
	if($ctg==1){
		$categoria="Carteira profissional";
		$tablela ="gestao_usuarios";
		$idg ="ID_USUARIO";
		$link1="b57506fc9125a8f5687031df7ad4fc454175da53";
		
		$tag1="Nome do Requerente";
		$tag2="Nuit/BI";
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

  <div class="clearfix borderbox" id="page"><!-- column -->
   <div class="clearfix colelem" id="pu742"><!-- column -->
    <div class="clearfix colelem" id="u742"><!-- group -->
     <div class="clearfix grpelem" id="u743"><!-- group -->
      <div class="clearfix grpelem" id="u761-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
       <p id="u761-2"><?php echo $categoria;?></p>
      </div>
      <form class="form-grp clearfix grpelem" id="widgetu744" method="post" enctype="multipart/form-data" action=""><!-- none box -->
       <div class="clearfix grpelem" id="pu760-3"><!-- group -->
        <div class="clearfix grpelem" id="u760-3" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
         <p>&nbsp;</p>
        </div>
        <div class="clearfix grpelem" id="u754-3" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
         <p>&nbsp;</p>
        </div>
        <div class="clearfix grpelem" id="u745-3" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
         <p>&nbsp;</p>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu750" data-required="true"><!-- none box -->
        <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix grpelem" id="u751-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u751-3"><input class="wrapped-input" type="date" id="widgetu750_input" name="data_inicial" required tabindex="1"/><label class="wrapped-input fld-prompt" id="widgetu750_prompt" for="widgetu750_input"><span class="actAsPara"></span></label></div></span>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu756" data-required="true"><!-- none box -->
        <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix grpelem" id="u759-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u759-3"><input class="wrapped-input" type="date" id="widgetu756_input" name="data_final" required tabindex="2"/><label class="wrapped-input fld-prompt" id="widgetu756_prompt" for="widgetu756_input"><span class="actAsPara"></span></label></div></span>
       </div>
       <button class="submit-btn NoWrap transition rounded-corners clearfix grpelem" id="u755-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" type="submit" value="Buscar" tabindex="3"><!-- content -->
        <div style="margin-top:-9px;height:9px;">
         <p>Buscar</p>
        </div>
       </button>
      </form>
     </div>
    </div>
    <div class="clearfix colelem" id="u725"><!-- group -->
     <div class="clearfix grpelem" id="u726"><!-- group -->
      <div class="clearfix grpelem" id="u731-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
       <p id="u731-2"><?php echo $tag1; ?></p>
      </div>
      <div class="clearfix grpelem" id="u728-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
       <p id="u728-2"><?php echo $tag2;?></p>
      </div>
      <div class="clearfix grpelem" id="pu729-4"><!-- group -->
       <div class="clearfix grpelem" id="u729-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
        <p id="u729-2">Telefone</p>
       </div>
       <div class="clearfix grpelem" id="u730-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
        <p id="u730-2"><?php echo $tag3; ?></p>
       </div>
      </div>
      <div class="clearfix grpelem" id="u727-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
       <p id="u727-2">Acções</p>
      </div>
     </div>
    </div>
	<!-- ciclo-->
	
	<?php
	//data_inicial
	//data_final
	
	
	if(isset($_POST['data_inicial'])){
	@$data_inicial			= $_POST["data_inicial"];
	@$data_final			= $_POST["data_final"];
	}
	if(@$data_inicial!=""){
		$sql =  "select * from `$tablela` where `ID_USUARIO`<>'2' and type='1' order by `ID_USUARIO` asc limit 0,50";
	}
	else{
		$sql =  "select * from `$tablela` where `ID_USUARIO`<>'2' and type='1' order by `ID_USUARIO` asc limit 0,50";
	}

	
	$resultado = mysqli_query($con, $sql) or die ("Dados nao encontrados!");
	
	while ($registo = mysqli_fetch_array($resultado))
					{			
						
		?>
    <div class="clearfix colelem" id="u732"><!-- group -->
     <div class="clearfix grpelem" id="u737"><!-- group -->
      <div class="grpelem" id="u734"><!-- simple frame --></div>
      <div class="clearfix grpelem" id="u738-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
       <p id="u738-2"><?=$registo["$campo1"]?></p>
      </div>
      <div class="clearfix grpelem" id="u736-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
       <p id="u736-2"><?php echo $registo["NOME_USUARIO"]; echo " | "; echo $registo["bi"]?></p>
      </div>
      <div class="clearfix grpelem" id="u741-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
       <p id="u741-2"><?=$registo["TELEFONE"]?></p>
      </div>
      <div class="clearfix grpelem" id="u739-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
       <p id="u739-2"><?php
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
	   ?></p>
      </div>
      <a href="index.php?link=5&id=<?php echo $registo["ID_USUARIO"];?>&op=ver"><div class="grpelem" id="u740"><!-- simple frame --></div></a>
      <a href="javascript:myFunction('You clicked!')"><div class="grpelem" id="u733"><!-- simple frame --></div></a>
      <a href="javascript:myFunction('You clicked!')"><div class="grpelem" id="u735"><!-- simple frame --></div></a>
     </div>
    </div>
		
	<?php 
				}
		mysqli_free_result($resultado);
	
	?>

   </div>
   <div class="verticalspacer" data-offset-top="144" data-content-above-spacer="143" data-content-below-spacer="19" data-sizePolicy="fixed" data-pintopage="page_fixedLeft"></div>
  </div>
</body>
</html>

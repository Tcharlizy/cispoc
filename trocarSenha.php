<?php
  include("conexao.php");
	$id_provincia = 2;
	$data = date('Y-m-d');
	@$loc = $_GET["loc"];
	if($loc==0){
		$link="definicoes.php?";
	}else if($loc==1){
		$link="home.index.php?";
	}
	else if($loc==2){
		$link="home.php?";
	}
	else if($loc==3){
		$link="home.prm.php?";
	} else{
		echo "Nao definido";
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
  <link rel="stylesheet" type="text/css" href="css/crimesindex.css?crc=4106715173" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_index.css?crc=237637406"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script src="https://webfonts.creativecloud.com/roboto:n7,n4,n3,i3:default.js" type="text/javascript"></script>
  
<script src="alert/alertify.min.js"></script>
<link rel="stylesheet" href="alert/alertify.min.css"/>
<link rel="stylesheet" href="alert/default.min.css"/>
<script type="text/javascript" src="alert/jquery.min.js"></script>

	<script type="text/javascript">
				jQuery(document).ready(function(){
					jQuery('#rr').submit(function(){
						var dados = jQuery( this ).serialize();

							jQuery.ajax({
							type: "POST",
							url: "",
							data: dados,
						success: function( data )
						{
					alertify.alert('Sucesso', 'Dados gravados com sucesso!', function(){ alertify.success('Ok'); });
					$("#rrr").trigger('reset');
				}
			});
			
			return false;
		});
	});
	
	
				
	</script>
   </head>
 <body>

  <div style="margin-top:25px" class="clearfix borderbox" id="page"><!-- column -->
   <div class="clearfix colelem" id="u379"><!-- group -->
    <div class="clearfix grpelem" id="pu426"><!-- column -->
     <div class="clearfix colelem" id="u426"><!-- group -->
      <div class="clearfix grpelem" id="u422-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
       <p id="u422-2">Definiçõs de utilizadores</p>
      </div>
      <a href="<?php echo $link; ?>link=1"><div class="transition grpelem" id="u425"><!-- simple frame --></div></a>
     </div>
     <div class="shadow clearfix colelem" id="u380"><!-- group -->
      <div class="clearfix grpelem" id="pu424-4"><!-- column -->
       <div class="clearfix colelem" id="u424-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
        <p id="u424-2">Trocar Senha</p>
       </div>
       <form class="form-grp clearfix colelem" id="widgetu381" method="post" enctype="multipart/form-data" action=""><!-- none box -->
	   
			<input type="hidden" name="id_provincia" value="<?php echo $id_provincia;?>" />
			<input type="hidden" name="dadosform" value="trocarSenha" />
			<input type="hidden" name="data" value="<?php echo $data;?>" />
			<input type="hidden" name="iduser" value="<?php echo $iduser;?>" />
        
		<div class="clearfix grpelem" id="ppwidgetu389"><!-- column -->
         <div class="clearfix colelem" id="pwidgetu389"><!-- group -->
          <div class="fld-grp clearfix grpelem" id="widgetu389" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu392-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u392-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu389_input"><!-- content --><span class="actAsPara">Senha atual:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u391-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u391-3"><input class="wrapped-input" type="password" id="widgetu406_input" name="senhaAtual" required placeholder="Inserir" tabindex="2"/><label class="wrapped-input fld-prompt" id="widgetu389_prompt" for="widgetu389_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu406" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu407-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u407-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu406_input"><!-- content --><span class="actAsPara">Nova Senha:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u409-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u409-3"><input class="wrapped-input" type="password" id="widgetu406_input" name="NovaSenha" required placeholder="Inserir" tabindex="2"/><label class="wrapped-input fld-prompt" id="widgetu406_prompt" for="widgetu406_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu397" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu399-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u399-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu397_input"><!-- content --><span class="actAsPara">Repetir nova Senha:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u400-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u400-3"><input class="wrapped-input" type="password" id="widgetu397_input" name="RepetirNovaSenha" required placeholder="Inserir" tabindex="3"/><label class="wrapped-input fld-prompt" id="widgetu397_prompt" for="widgetu397_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
         </div>
         <div class="clearfix colelem" id="pu382-3"><!-- group -->
          <div class="clearfix grpelem" id="u382-3" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
           <p>&nbsp;</p>
          </div>
          <div class="clearfix grpelem" id="u388-3" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
           <p>&nbsp;</p>
          </div>
          <div class="clearfix grpelem" id="u387-3" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
           <p>&nbsp;</p>
          </div>
          <button class="submit-btn NoWrap clearfix grpelem" id="u401-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" type="submit" value="Salvar" tabindex="8"><!-- content -->
           <div style="margin-top:-12px;height:12px;">
            <p>Salvar</p>
           </div>
          </button>
         </div>
        </div>
       </form>
	  
	   
      </div>
     </div>
    </div>
   </div>
   <div class="verticalspacer" data-offset-top="457" data-content-above-spacer="456" data-content-below-spacer="19" data-sizePolicy="fixed" data-pintopage="page_fixedLeft"></div>
  </div>
  <!-- Other scripts -->
</body>
</html>


	   <?php
		   if(isset($_POST['senhaAtual'])){
			$senhaAtual			= $_POST["senhaAtual"];
			$NovaSenha			= $_POST["NovaSenha"];
			$RepetirNovaSenha	= $_POST["RepetirNovaSenha"];
			$forca_pass         = strlen($NovaSenha);
			
			$sql =  "select * from `gestao_usuarios` where `NOME_USUARIO`='$user'";
			$resultado  = mysqli_query($con, $sql) or die ("Dados nao encontrados!");
			$registo 	= mysqli_fetch_array($resultado);
			$senha		= $registo['SENHA'];
			$iduser		= $registo['ID_USUARIO'];
		
			if($NovaSenha!=$RepetirNovaSenha){
				echo '<script type="text/javascript">alertify.error("Erro! As senhas não coincidem!");</script>';
			} else if($forca_pass<6){
				echo '<script type="text/javascript">alertify.error("Erro! No minimo seis caracteres!");</script>';
			}
			else if($senhaAtual!=$senha){
				echo '<script type="text/javascript">alertify.error("Erro! Senha atual incorreta!");</script>';
			} else{

				$sql="UPDATE `gestao_usuarios` SET `SENHA` = '$NovaSenha' WHERE `gestao_usuarios`.`ID_USUARIO` = '$iduser';";
			
				mysqli_query($con, $sql) or die("Dados nao gravados!");
				echo '<script type="text/javascript">alertify.success("Senha alterada com sucesso!");</script>';
				
			}
		   }
	   ?>
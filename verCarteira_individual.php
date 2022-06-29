<?php
  include("conexao.php");

	$id_provincia = 2;
	
	if(@$cod==2){
		echo '<script type="text/javascript">alertify.success("Pedido enviado com sucesso.")</script>';
	}
	
	$id  = $iduser;
	
	
?>



<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-GB">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.1.0.379"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  
  <title>Home</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/novaUnidadeSanitaria.css?crc=143172347" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_index.css?crc=4081006519"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script src="https://webfonts.creativecloud.com/roboto:n7,n4,n3,i3:default.js" type="text/javascript"></script>
   </head>
  <!-- Chamendo bibloteca para alerta--->
<script src="alert/alertify.min.js"></script>
<link rel="stylesheet" href="alert/alertify.min.css"/>
<link rel="stylesheet" href="alert/default.min.css"/>
<script type="text/javascript" src="alert/jquery.min.js"></script>

	<script type="text/javascript">
				jQuery(document).ready(function(){
					jQuery('#widgetu849').submit(function(){
						var dados = jQuery( this ).serialize();

							jQuery.ajax({
							type: "POST",
							url: "sql.ajax.php",
							data: dados,
						success: function( data )
						{
					alertify.alert('Sucesso', 'Carteira profissional aprovada com sucesso!', function(){ alertify.success('Ok'); });
					 $("#widgetu849").trigger('reset');
					 window.location="index.php?link=4&ctg=1&cod=1";
					 
				}
			});
			
			return false;
		});
	});
	
	
				
	</script>  
   
 <body >

  <div  class="clearfix borderbox" id="page"><!-- column -->
   <div class="clearfix colelem" id="pu847"><!-- column -->
    <div class="clearfix colelem" id="u847"><!-- group -->
     <div class="clearfix grpelem" id="u843-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
      <p id="u843-2">Visualizar carteira profissional</p>
     </div>
     <a href=""><div class="transition grpelem" id="u848"><!-- simple frame --></div></a>
     <a href="login.php"><div class="transition grpelem" id="u844"><!-- simple frame --></div></a>
    </div>
    <div class="shadow clearfix colelem" id="u845"><!-- group -->
     <div class="clearfix grpelem" id="pu846-4"><!-- column -->
      <div class="clearfix colelem" id="u846-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
       <p id="u846-2">Estado:
	   	   <?php
			if($registo["ESTADO"]=="1"){
				echo "<b style='color:red'>Aguardando pela aprovação. </b>";
			}else
				if($registo["ESTADO"]=='2'){
					echo "<b style='color:green'>Aprovado</b>";
				}else
					if($registo["ESTADO"]=="3"){
						echo "<b style='color:red; text-decoration: line-through'>Expirado</b>";
					}else if($registo["ESTADO"]=="0"){
						echo "<span style='color:red; text-decoration: line-through'>Rejeitado</span>";
					
					}
	   ?>
	   </p>
      </div>
      <div class="clearfix colelem" id="pwidgetu849"><!-- group -->
       <form class="form-grp clearfix grpelem" id="widgetu849" method="post" enctype="multipart/form-data" action=""><!-- none box -->
	   	<!-- Enviar id da atividade oculta -->
			<input type="hidden" name="dadosform" value="aprovar" />
			<input type="hidden" name="id_aprove" value="<?php echo $id;?>" />
			<input type="hidden" name="iduser" value="<?php echo $iduser;?>" />
        <div class="clearfix grpelem" id="ppwidgetu872"><!-- column -->
         <div class="clearfix colelem" id="pwidgetu872"><!-- group -->
          <div class="fld-grp clearfix grpelem" id="widgetu872" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu875-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u875-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu872_input"><!-- content --><span class="actAsPara">Província:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u873-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u873-3">
			Maputo
			<label class="wrapped-input fld-prompt" id="widgetu872_prompt" for="widgetu872_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu855" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu857-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u857-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu855_input"><!-- content --><span class="actAsPara">Senha:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u856-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u856-3">********<label class="wrapped-input fld-prompt" id="widgetu855_prompt" for="widgetu855_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu881" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu882-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u882-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu881_input"><!-- content --><span class="actAsPara">Nuit:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u883-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u883-3"><?=$registo["ID_USUARIO"]?><label class="wrapped-input fld-prompt" id="widgetu881_prompt" for="widgetu881_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu860" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu861-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u861-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu860_input"><!-- content --><span class="actAsPara">Telefone:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u863-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u863-3"><?=$registo["TELEFONE"]?><label class="wrapped-input fld-prompt" id="widgetu860_prompt" for="widgetu860_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu877" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu880-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u880-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu877_input"><!-- content --><span class="actAsPara">Documento de identificação:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u879-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u879-3">
						<?=$registo["bi"]?>
						
			<label class="wrapped-input fld-prompt" id="widgetu877_prompt" for="widgetu877_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
         </div>
         <div class="fld-grp clearfix colelem" id="widgetu1074" data-required="true"><!-- none box -->
          <div class="clearfix grpelem" id="pu1076-4"><!-- column -->
           <label class="fld-label actAsDiv clearfix colelem" id="u1076-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu1074_input"><!-- content --><span class="actAsPara">Morada:</span></label>
           <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u1077-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u1077-3"><?=$registo["MORADA"]?><label class="wrapped-input fld-prompt" id="widgetu1074_prompt" for="widgetu1074_input"><span class="actAsPara"></span></label></div></span>
          </div>
         </div>
         <div class="clearfix colelem" id="pwidgetu868"><!-- group -->
          <div class="fld-grp clearfix grpelem" id="widgetu868" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu870-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u870-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu868_input"><!-- content --><span class="actAsPara">Nome Completo:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><?=$registo["NOME"]?><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu885" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu887-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u887-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu885_input"><!-- content --><span class="actAsPara">Centro de Formação:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><?=$registo["centro_formacao"]?><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
         </div>
		 
		   <div class="clearfix colelem" id="pwidgetu868"><!-- group -->
		   <p>&nbsp;</p>
		   <p>Anexos</p>
		   <p>&nbsp;</p>
          <div class="fld-grp clearfix grpelem" id="widgetu868" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu870-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u870-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu868_input"><!-- content --><span class="actAsPara">Certificado de aptidão profissional:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><a style="text-decoration:none; color: #0000ff; font-size:16px" href="docs/<?=$registo["cert_profissional"]?>" target="blank">Ver o arquivo <?=$registo["cert_profissional"]?></a><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu885" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu887-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u887-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu885_input"><!-- content --><span class="actAsPara">Curriculum Vitae:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><a style="text-decoration:none; color: #0000ff; font-size:16px" href="docs/<?=$registo["cv"]?>" target="blank">Ver o arquivo <?=$registo["cv"]?></a><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
         </div>
		 
		 <div class="clearfix colelem" id="pwidgetu868"><!-- group -->
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
          <div class="fld-grp clearfix grpelem" id="widgetu868" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu870-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u870-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu868_input"><!-- content --><span class="actAsPara">Fotocopia de BI :</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><a style="text-decoration:none; color: #0000ff; font-size:16px" href="docs/<?=$registo["bi_anexo"]?>" target="blank">Ver o arquivo <?=$registo["bi_anexo"]?></a><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu885" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu887-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u887-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu885_input"><!-- content --><span class="actAsPara">Carteira de Idoneidade de Local de trabalho:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><a style="text-decoration:none; color: #0000ff; font-size:16px" href="docs/<?=$registo["carteira_trabalho"]?>" target="blank">Ver o arquivo <?=$registo["carteira_trabalho"]?></a><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
         </div>
		 
		  <div class="clearfix colelem" id="pwidgetu868"><!-- group -->
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
          <div class="fld-grp clearfix grpelem" id="widgetu868" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu870-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u870-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu868_input"><!-- content --><span class="actAsPara">Foto tipo passe:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><a style="text-decoration:none; color: #0000ff; font-size:16px" href="docs/<?=$registo["foto_passe"]?>" target="blank">Ver o arquivo <?=$registo["foto_passe"]?></a><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu885" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu887-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u887-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu885_input"><!-- content --><span class="actAsPara">Pedido de reconhecimento e registo profissional:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><a style="text-decoration:none; color: #0000ff; font-size:16px" href="docs/<?=$registo["pedido"]?>" target="blank">Ver o arquivo <?=$registo["pedido"]?></a><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
         </div>
         <div class="clearfix colelem" id="pu854-4"><!-- group -->
          <div class="clearfix grpelem" id="u854-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
           <p>Submitting Form...</p>
          </div>
          <div class="clearfix grpelem" id="u876-3" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
           <p>&nbsp;</p>
          </div>
          <div class="clearfix grpelem" id="u893-3" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
           <p>&nbsp;</p>
          </div>
		  
          <button style="background-color: #fff;";
		   
		  class="submit-btn NoWrap clearfix grpelem" id="u859-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" type="submit" value="Salvar" tabindex="11"><!-- content -->
           <div style="margin-top:-12px;height:12px;">
            <p><?php
				if($registo["ESTADO"]=='1'){
					echo "";	
				}else
					if($registo["ESTADO"]==''){
						echo "";
					}
			
			?></p>
           </div>
          </button>
         </div>
        </div>
       </form>
       <div class="grpelem" id="u1092"><!-- simple frame --></div>
      </div>
     </div>
    </div>
   </div>
   <div class="verticalspacer" data-offset-top="528" data-content-above-spacer="527" data-content-below-spacer="37" data-sizePolicy="fixed" data-pintopage="page_fixedLeft"></div>
  </div>
  <!-- Other scripts -->
</body>
</html>

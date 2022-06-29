<?php
  include("conexao.php");
	$id_provincia = 2;
	@$cod  = $_GET["cod"];
	if(@$cod==2){
		echo '<script type="text/javascript">alertify.success("Pedido enviado com sucesso.")</script>';
	}
?>

  
<?php
	
	@$lat  = $_GET["lat"];
	@$lon  = $_GET["lon"];
	
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
					jQuery('#widgecctuw849s').submit(function(){
						var dados = jQuery( this ).serialize();

							jQuery.ajax({
							type: "POST",
							url: "registoUnidade.ajax.php",
							data: dados,
						success: function( data )
						{
					alertify.alert('Sucesso', 'Dados gravados com sucesso!', function(){ alertify.success('Ok'); });
					 $("#widgetu849").trigger('reset');
				}
			});
			
			return false;
		});
	});
	
	
				
	</script>  
   
 <body ">

  <div  class="clearfix borderbox" id="page"><!-- column -->
   <div class="clearfix colelem" id="pu847"><!-- column -->
    <div class="clearfix colelem" id="u847"><!-- group -->
     <div class="clearfix grpelem" id="u843-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
      <p id="u843-2">Registo de Unidade Sanitária</p>
     </div>
     <a href="#"><div class="transition grpelem" id="u848"><!-- simple frame --></div></a>
     <a href="login.php"><div class="transition grpelem" id="u844"><!-- simple frame --></div></a>
    </div>
    <div class="shadow clearfix colelem" id="u845"><!-- group -->
     <div class="clearfix grpelem" id="pu846-4"><!-- column -->
      <div class="clearfix colelem" id="u846-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
       <p id="u846-2"><b>Pré-registo de Unidade Sanitária</b></p>
       <p id="u846-2" style="color:red">Atenção se já fez registo faca login para verificar o estado do pedido!</p>
       <p id="u846-2" style="color:red">Os dados de login serão usados para saber o estado assim com atualizar os documentos.</p>
      </div>
      <div class="clearfix colelem" id="pwidgetu849"><!-- group -->
       <form class="form-grp clearfix grpelem" id="widgetu849" method="post" enctype="multipart/form-data" action="registoUnidade.ajax.php"><!-- none box -->
	   	<!-- Enviar id da atividade oculta -->
			<input type="hidden" name="dadosform" value="u_sanitaria" />
			<input type="hidden" name="iduser" value="<?php echo $iduser;?>" />
			<input type="hidden" name="latitude" value="<?php echo $lat;?>" />
			<input type="hidden" name="longitude" value="<?php echo $lon;?>" />
        <div class="clearfix grpelem" id="ppwidgetu872"><!-- column -->
         <div class="clearfix colelem" id="pwidgetu872"><!-- group -->
          <div class="fld-grp clearfix grpelem" id="widgetu872" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu875-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u875-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu872_input"><!-- content --><span class="actAsPara">Província:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u873-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u873-3">
			<SELECT  style="width:100%; border:none; height:100%; background-color: transparent;" required name="provincia" >
			<option value="">--Província--
			<option value="Maputo">Maputo
			</option></SELECT>
			<label class="wrapped-input fld-prompt" id="widgetu872_prompt" for="widgetu872_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu855" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu857-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u857-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu855_input"><!-- content --><span class="actAsPara">Senha:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u856-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u856-3"><input type="password" name="senha" style="width:100%; border:none; height:100%; background-color: transparent;" required placeholder="password" /><label class="wrapped-input fld-prompt" id="widgetu855_prompt" for="widgetu855_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu881" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu882-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u882-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu881_input"><!-- content --><span class="actAsPara">Nuit:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u883-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u883-3"><input class="wrapped-input" type="number" id="widgetu881_input" name="nome_usuario" tabindex="2" required placeholder="Inserir Nuit"/><label class="wrapped-input fld-prompt" id="widgetu881_prompt" for="widgetu881_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu860" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu861-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u861-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu860_input"><!-- content --><span class="actAsPara">Telefone:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u863-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u863-3"><input class="wrapped-input" type="text" id="widgetu860_input" name="telefone" placeholder="Telefone" tabindex="4" required /><label class="wrapped-input fld-prompt" id="widgetu860_prompt" for="widgetu860_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu877" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu880-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u880-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu877_input"><!-- content --><span class="actAsPara">Tipo:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u879-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u879-3">
						<SELECT style="width:100%; border:none; height:100%; background-color: transparent;" required name="tipo" >
						<option value="">--Tipo--
						<option value="2">Unidade Sanitária
						<option value="3">Clinica
						<option value="4">Outro
						</option></SELECT>
			<label class="wrapped-input fld-prompt" id="widgetu877_prompt" for="widgetu877_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
         </div>
         <div class="fld-grp clearfix colelem" id="widgetu1074" data-required="true"><!-- none box -->
          <div class="clearfix grpelem" id="pu1076-4"><!-- column -->
           <label class="fld-label actAsDiv clearfix colelem" id="u1076-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu1074_input"><!-- content --><span class="actAsPara">Morada:</span></label>
           <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u1077-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u1077-3"><input class="wrapped-input" type="text" id="widgetu1074_input" name="morada" tabindex="6" required placeholder="Inserir Bairro/Avenida/Rua"/><label class="wrapped-input fld-prompt" id="widgetu1074_prompt" for="widgetu1074_input"><span class="actAsPara"></span></label></div></span>
          </div>
         </div>
         <div class="clearfix colelem" id="pwidgetu868"><!-- group -->
          <div class="fld-grp clearfix grpelem" id="widgetu868" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu870-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u870-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu868_input"><!-- content --><span class="actAsPara">Nome do Responsável:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><input class="wrapped-input" type="text" id="widgetu868_input" name="responsavel" tabindex="7" required placeholder="Inserir"/><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu885" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu887-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u887-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu885_input"><!-- content --><span class="actAsPara">Nome da Unidade Sanitária/Clinica:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="text" id="widgetu885_input" name="nome_u_clinica" tabindex="8" required placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
         </div>
		 

		 
		 <div class="clearfix colelem" id="pwidgetu868"><!-- group -->
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
          <div class="fld-grp clearfix grpelem" id="widgetu868" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu870-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u870-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu868_input"><!-- content --><span class="actAsPara">Registo Criminal:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><input class="wrapped-input"  type="file" id="widgetu868_input" name="r_criminal" tabindex="7" required placeholder="Inserir"/><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu885" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu887-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u887-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu885_input"><!-- content --><span class="actAsPara">Termo de Compromisso de Honra:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="compromisso_honra" tabindex="8" required placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
         </div>
		 
		 <div class="clearfix colelem" id="pwidgetu868"><!-- group -->
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
          <div class="fld-grp clearfix grpelem" id="widgetu868" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu870-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u870-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu868_input"><!-- content --><span class="actAsPara">Nuit:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><input class="wrapped-input" type="number" id="widgetu868_input" name="nuit_numero" tabindex="7" required placeholder="Inserir nuit"/><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu885" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu887-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u887-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu885_input"><!-- content --><span class="actAsPara">Anexo Nuit:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="nuit_anexo" tabindex="8" required placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
         </div>
		 
		 <div class="clearfix colelem" id="pwidgetu868"><!-- group -->
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
          <div class="fld-grp clearfix grpelem" id="widgetu868" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu870-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u870-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu868_input"><!-- content --><span class="actAsPara">Certidão de reserva :</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><input class="wrapped-input" type="file" id="widgetu868_input" name="certidao_reserva" tabindex="7" required placeholder="Inserir"/><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu885" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu887-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u887-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu885_input"><!-- content --><span class="actAsPara">Memoria descritiva e justificativa:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="memoria_descritiva" tabindex="8" required placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
         </div>
		 
		  <div class="clearfix colelem" id="pwidgetu868"><!-- group -->
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
          <div class="fld-grp clearfix grpelem" id="widgetu868" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu870-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u870-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu868_input"><!-- content --><span class="actAsPara">Quadro pessoal:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><input class="wrapped-input" type="text" id="widgetu868_input" name="quadro_pessoal1" tabindex="7" required placeholder="Inserir Cargo"/><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><input class="wrapped-input" type="text" id="widgetu868_input" name="quadro_pessoal2" tabindex="7" required placeholder="Inserir Cargo"/><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><input class="wrapped-input" type="text" id="widgetu868_input" name="quadro_pessoal3" tabindex="7"  placeholder="Inserir Cargo"/><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><input class="wrapped-input" type="text" id="widgetu868_input" name="quadro_pessoal4" tabindex="7"  placeholder="Inserir Cargo"/><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><input class="wrapped-input" type="text" id="widgetu868_input" name="quadro_pessoal5" tabindex="7"  placeholder="Inserir Cargo"/><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><input class="wrapped-input" type="text" id="widgetu868_input" name="quadro_pessoal6" tabindex="7"  placeholder="Inserir Cargo"/><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><input class="wrapped-input" type="text" id="widgetu868_input" name="quadro_pessoal7" tabindex="7"  placeholder="Inserir Cargo"/><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><input class="wrapped-input" type="text" id="widgetu868_input" name="quadro_pessoal8" tabindex="7"  placeholder="Inserir Cargo"/><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><input class="wrapped-input" type="text" id="widgetu868_input" name="quadro_pessoal9" tabindex="7"  placeholder="Inserir Cargo"/><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu885" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu887-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u887-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu885_input"><!-- content --><span class="actAsPara">Carteira Profissional:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="quadro_pessoal_anexo1" tabindex="8" required placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="quadro_pessoal_anexo2" tabindex="8" required placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="quadro_pessoal_anexo3" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="quadro_pessoal_anexo4" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="quadro_pessoal_anexo5" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="quadro_pessoal_anexo6" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="quadro_pessoal_anexo7" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="quadro_pessoal_anexo8" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="quadro_pessoal_anexo9" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
         </div>
		 
		 		   <div class="clearfix colelem" id="pwidgetu868"><!-- group -->
          <div class="fld-grp clearfix grpelem" id="widgetu868" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu870-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u870-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu868_input"><!-- content --><span class="actAsPara">Requerimento:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u871-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u871-3"><input class="wrapped-input" type="file" id="widgetu868_input" name="requerimento" tabindex="7" required placeholder="Inserir"/><label class="wrapped-input fld-prompt" id="widgetu868_prompt" for="widgetu868_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu885" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu887-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u887-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu885_input"><!-- content --><span class="actAsPara">Copia do BI dos sócios: (Minimo 1 anexo)</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="bi_dos_socios1" tabindex="8" required placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="bi_dos_socios2" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="bi_dos_socios3" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="bi_dos_socios4" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="bi_dos_socios5" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="bi_dos_socios6" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="bi_dos_socios7" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="bi_dos_socios8" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u886-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u886-3"><input class="wrapped-input" type="file" id="widgetu885_input" name="bi_dos_socios9" tabindex="8"  placeholder="Centro de Formação"/><label class="wrapped-input fld-prompt" id="widgetu885_prompt" for="widgetu885_input"><span class="actAsPara"></span></label></div></span>
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
          <button class="submit-btn NoWrap clearfix grpelem" id="u859-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" type="submit" value="Salvar" tabindex="11"><!-- content -->
           <div style="margin-top:-12px;height:12px;">
            <p>Salvar<?php echo '<script>document.write(latitude)</script>';?></p>
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

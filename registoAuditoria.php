<?php
  include("conexao.php");
	$id_provincia = 2;
	@$cod  = $_GET["cod"];
	if(@$cod==2){
		echo '<script type="text/javascript">alertify.success("Pedido enviado com sucesso.")</script>';
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
					alertify.alert('Sucesso', 'Dados gravados com sucesso!', function(){ alertify.success('Ok'); });
					 $("#widgetu849").trigger('reset');
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
      <p id="u843-2">Gestão de Auditoria </p>
     </div>
     <a href="index.php?link=11"><div class="transition grpelem" id="u848"><!-- simple frame --></div></a>
     <a href="index.php?link=1"><div class="transition grpelem" id="u844"><!-- simple frame --></div></a>
    </div>
    <div class="shadow clearfix colelem" id="u845"><!-- group -->
     <div class="clearfix grpelem" id="pu846-4"><!-- column -->
      <div class="clearfix colelem" id="u846-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content -->
       <p id="u846-2"><b>Registo de Auditoria</b></p>
       <p id="u846-2"><span style="color: red"><b>#</b> Por favor em casa de mais de um item use “;” como separador.</span></p>

      </div>
      <div class="clearfix colelem" id="pwidgetu849"><!-- group -->
       <form class="form-grp clearfix grpelem" id="widgetu849" method="post" enctype="multipart/form-data" action=""><!-- none box -->
	   	<!-- Enviar id da atividade oculta -->
			<input type="hidden" name="dadosform" value="auditoria" />
			<input type="hidden" name="iduser" value="<?php echo $iduser;?>" />
        <div class="clearfix grpelem" id="ppwidgetu872"><!-- column -->
         <div class="clearfix colelem" id="pwidgetu872"><!-- group -->
          <div class="fld-grp clearfix grpelem" id="widgetu872" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu875-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u875-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu872_input"><!-- content --><span class="actAsPara">Unidade sanitária/ Clinica:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u873-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u873-3">
			<SELECT style="width:100%; border:none; height:100%; background-color: transparent;" required name="unidade_sanitaria" >
			<option value="">--Unidade sanitária/ Clinica--
			<?php
			$sql =  "select * from `gestao_usuarios` where `type`='2'";
			$resultado = mysqli_query($con, $sql) or die ("Dados nao encontrados!");
			while ($registo = mysqli_fetch_array($resultado))
					{			
						
				?>
			
			<option value="Maputo"><?=$registo["UNIDADE"]?></option>
			
			<?php 
				}
				mysqli_free_result($resultado);
			
			?>
			</SELECT>
			<label class="wrapped-input fld-prompt" id="widgetu872_prompt" for="widgetu872_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu855" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu857-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u857-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu855_input"><!-- content --><span class="actAsPara">Vistoria para :</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u856-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u856-3"><input type="text" name="vistoria_para" style="width:100%; border:none; height:100%; background-color: transparent;" required placeholder="Vistoria Para" /><label class="wrapped-input fld-prompt" id="widgetu855_prompt" for="widgetu855_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu881" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu882-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u882-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu881_input"><!-- content --><span class="actAsPara">Distrito:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u883-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u883-3"><input class="wrapped-input" type="text" id="widgetu881_input" name="distrito" tabindex="2" required placeholder="Inserir Distrito"/><label class="wrapped-input fld-prompt" id="widgetu881_prompt" for="widgetu881_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu860" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu861-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u861-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu860_input"><!-- content --><span class="actAsPara">Data da Auditoria:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u863-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u863-3"><input class="wrapped-input" type="date" id="widgetu860_input" name="data_auditoria" placeholder="Telefone" tabindex="4" required /><label class="wrapped-input fld-prompt" id="widgetu860_prompt" for="widgetu860_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu877" data-required="true"><!-- none box -->
           <div class="clearfix grpelem" id="pu880-4"><!-- column -->
            <label class="fld-label actAsDiv clearfix colelem" id="u880-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu877_input"><!-- content --><span class="actAsPara">Local:</span></label>
            <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u879-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u879-3">
						<input style="width:100%; border:none; height:100%; background-color: transparent;" placeholder="Bairro, Av., Quarteirão, Rua, Casa n°"  required name="local" ></input>
						
			<label class="wrapped-input fld-prompt" id="widgetu877_prompt" for="widgetu877_input"><span class="actAsPara"></span></label></div></span>
           </div>
          </div>
         </div>
         <div class="fld-grp clearfix colelem" id="widgetu1074" data-required="true"><!-- none box -->
          <div class="clearfix grpelem" id="pu1076-4"><!-- column -->
           <label class="fld-label actAsDiv clearfix colelem" id="u1076-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu1074_input"><!-- content --><span class="actAsPara"><b>Composta por:</b> <span style="color: red">#</span></span></label>
           <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u1077-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u1077-3"><input class="wrapped-input" type="text" id="widgetu1074_input" name="composta_por" tabindex="6" required placeholder="Médica de Clinica Geral 1ª classe; Médica de Clinica Geral 1ª classe; Técnica de Medicina; Enfermeiro Geral ,acompanhados pela representante do respectivo do estabelecimento."/><label class="wrapped-input fld-prompt" id="widgetu1074_prompt" for="widgetu1074_input"><span class="actAsPara"></span></label></div></span>
          </div>
		  
         </div>
		 <div class="fld-grp clearfix colelem" id="widgetu1074" data-required="true"><!-- none box -->
          <div class="clearfix grpelem" id="pu1076-4"><!-- column -->
           <label class="fld-label actAsDiv clearfix colelem" id="u1076-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu1074_input"><!-- content --><span class="actAsPara"><b>Objectivos:</b> <span style="color: red"><span style="color: red">#</span></span></label>
           <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u1077-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u1077-3"><input class="wrapped-input" type="text" id="widgetu1074_input" name="objectivos" tabindex="6" required placeholder="Objectivo 1; Objectivos 2; Objectivos 3...."/><label class="wrapped-input fld-prompt" id="widgetu1074_prompt" for="widgetu1074_input"><span class="actAsPara"></span></label></div></span>
          </div>
         </div>
		 
		 <div class="fld-grp clearfix colelem" id="widgetu1074" data-required="true"><!-- none box -->
          <div class="clearfix grpelem" id="pu1076-4"><!-- column -->
           <label class="fld-label actAsDiv clearfix colelem" id="u1076-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu1074_input"><!-- content --><span class="actAsPara"><b>Constatações Positivas:</b><span style="color: red">#</span> </span></label>
           <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u1077-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u1077-3"><input class="wrapped-input" type="text" id="widgetu1074_input" name="constatacoes_pos" tabindex="6" required placeholder="Constatação 1; Constatação 2; Constatação 3...."/><label class="wrapped-input fld-prompt" id="widgetu1074_prompt" for="widgetu1074_input"><span class="actAsPara"></span></label></div></span>
          </div>
         </div>
		 
		 <div class="fld-grp clearfix colelem" id="widgetu1074" data-required="true"><!-- none box -->
          <div class="clearfix grpelem" id="pu1076-4"><!-- column -->
           <label class="fld-label actAsDiv clearfix colelem" id="u1076-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu1074_input"><!-- content --><span class="actAsPara"><b>Constatcoes negativas:</b><span style="color: red">#</span></span></label>
           <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u1077-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u1077-3"><input class="wrapped-input" type="text" id="widgetu1074_input" name="constatacoes_neg" tabindex="6" placeholder="Constatação 1; Constatação 2; Constatação 3...."/><label class="wrapped-input fld-prompt" id="widgetu1074_prompt" for="widgetu1074_input"><span class="actAsPara"></span></label></div></span>
          </div>
         </div>
		 
		 <div class="fld-grp clearfix colelem" id="widgetu1074" data-required="true"><!-- none box -->
          <div class="clearfix grpelem" id="pu1076-4"><!-- column -->
           <label class="fld-label actAsDiv clearfix colelem" id="u1076-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu1074_input"><!-- content --><span class="actAsPara"><b>Recomendações:</b><span style="color: red">#</span></span></label>
           <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u1077-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u1077-3"><input class="wrapped-input" type="text" id="widgetu1074_input" name="recomendacoes" tabindex="6" placeholder="Recomendação 1; Recomendação 2; Recomendação 3...."/><label class="wrapped-input fld-prompt" id="widgetu1074_prompt" for="widgetu1074_input"><span class="actAsPara"></span></label></div></span>
          </div>
         </div>
		 
		 <div class="fld-grp clearfix colelem" id="widgetu1074" data-required="true"><!-- none box -->
          <div class="clearfix grpelem" id="pu1076-4"><!-- column -->
           <label class="fld-label actAsDiv clearfix colelem" id="u1076-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu1074_input"><!-- content --><span class="actAsPara"><b>Condições reunidos:</b><span style="color: red">#</span></span></label>
           <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u1077-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u1077-3">
		   <SELECT style="width:100%; border:none; height:100%; background-color: transparent;" required name="condicoes_reunidas" >
			<option value="">--Condições reunidas--
	
			<option value="1">Sim</option>
			<option value="0">Não</option>
		
			</SELECT>
		   <label class="wrapped-input fld-prompt" id="widgetu1074_prompt" for="widgetu1074_input"><span class="actAsPara"></span></label></div></span>
          </div>
         </div>
		 
		 <div class="fld-grp clearfix colelem" id="widgetu1074" data-required="true"><!-- none box -->
          <div class="clearfix grpelem" id="pu1076-4"><!-- column -->
           <label class="fld-label actAsDiv clearfix colelem" id="u1076-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" for="widgetu1074_input"><!-- content --><span class="actAsPara"><b>Condições para:</b><span style="color: red">#</span></span></label>
           <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix colelem" id="u1077-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true"><!-- content --><div id="u1077-3"><input class="wrapped-input" type="text" id="widgetu1074_input" name="condicoes_nao_reunidas" tabindex="6" placeholder="Condições reunidas para"/><label class="wrapped-input fld-prompt" id="widgetu1074_prompt" for="widgetu1074_input"><span class="actAsPara"></span></label></div></span>
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
            <p>Salvar</p>
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

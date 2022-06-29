<?php
	ob_start();
	include_once("conexao.php");
	$id = $_GET["id"];
	
		$sql =  "select * FROM `auditoria`where `id_auditoria`='$id'";
		$resultado = mysqli_query($con, $sql) or die ("Dados nao encontrados!");
		$registo = mysqli_fetch_array($resultado);
		$participantes  = explode(";", $registo["composta_por"]);
		$objectivos 	= explode(";", $registo["objectivos"]);
		$objectivos_count=count($objectivos);
		
		$constatacoes 	= explode(";", $registo["constatacoes_pos"]);
		$constatacoes_count=count($constatacoes);
		
		$constatacoes_negativas 	= explode(";", $registo["constatacoes_neg"]);
		$constatacoes__negativas_count=count($constatacoes_negativas);
		
		$recomendacoes 	= explode(";", $registo["recomendacoes"]);
		$recomendacoes_count=count($recomendacoes);

?>

<script>
    function exportHTML(){
       var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
            "xmlns:w='urn:schemas-microsoft-com:office:word' "+
            "xmlns='http://www.w3.org/TR/REC-html40'>"+
            "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
       var footer = "</body></html>";
       var sourceHTML = header+document.getElementById("docx").innerHTML+footer;
       
       var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
       var fileDownload = document.createElement("a");
       document.body.appendChild(fileDownload);
       fileDownload.href = source;
       fileDownload.download = 'RELATÓRIO.doc';
       fileDownload.click();
       document.body.removeChild(fileDownload);
    }
</script>

<html xmlns:office="urn:schemas-microsoft-com:office:office"
      xmlns:word="urn:schemas-microsoft-com:office:word"
      xmlns="http://www.w3.org/TR/REC-html40">
<body>
<div style="width:70%; display; margin-left:15%">
<br>
<a>
   <img src="images/302190h4LOXZXt.png"  alt="Exportar" width=20 onclick="exportHTML(); ">
</a>

<div id="docx">

<style>
    table, tr, td, th{
        border: none;
        border-collapse: collapse;
        padding: 5px;
        text-align: left;
    }

    .normal {
        font-family:"Calibri",sans-serif; 
        line-height:107%;
        font-size:11.0pt;
        mso-ascii-font-family:Calibri;
        mso-ascii-theme-font:minor-latin;
    }

    @page portrait_A4_page  {
        size:595.3pt 841.9pt;
        margin:70.0pt 70.0pt 70.0pt 70.0pt;
        mso-header-margin:35.4pt;
        mso-footer-margin:35.4pt;
        mso-paper-source:0;
    }

    div.portrait_A4_page { page:portrait_A4_page; }

    @page landscape_A4_page {
        size:841.9pt 595.3pt;
        mso-page-orientation:landscape;
        margin:70.0pt 70.0pt 70.0pt 70.0pt;
        mso-header-margin:35.45pt;
        mso-footer-margin:35.45pt;
        mso-paper-source:0;
    }

    div.landscape_A4_page { page:landscape_A4_page; }
	    @page portrait1_A4_page  {
        size:595.3pt 841.9pt;
		mso-page-orientation:Portrait;
        margin:70.0pt 70.0pt 70.0pt 70.0pt;
        mso-header-margin:35.4pt;
        mso-footer-margin:35.4pt;
        mso-paper-source:0;
    }

    div.portrait1_A4_page { page:portrait1_A4_page; }
	p.double {border-style: double;}
	

</style>

<div class="portrait_A4_page">
  <span class=normal>
  <div align="" width="925px;">
  <h5 align="center"><img src="http://localhost/images/emblema.png" alt="some text" style="width:40px; height: inherit;" /></h5>
  <h5 style="text-align: center; font-family:Calibri (Corpo); font-size:12pt;"><b>REPÚBLICA DE MOÇAMBIQUE</b>
  <br align="center"><img src="http://localhost/images/rep.png" alt="some text" width=90 />
  <br><b>CIDADE DE MAPUTO</b></h5>
  <h5 style="text-align: center; font-family:Calibri (Corpo); font-size:14pt;"><b>CONSELHO DOS SERVIÇOS DE REPRESENTAÇÃO DE ESTADO</b>
  <br><b>SERVIÇO DE SAUDE DA CIDADE</b></h5>
  <p>&nbsp;</p>
  <p>&nbsp;</p>


<p style="line-height: 1.5; text-align: justify; font-family:Calibri (Corpo)">Realizou-se no dia <?=$registo["data_auditoria"]?>, uma vistoria para <?=$registo["vistoria_para"]?>, Localizado no B° <?=$registo["local"]?> Distrito <?=$registo["distrito"]?>, Cidade de Maputo, por uma equipa de Serviço de Saúde da Cidade de Maputo composta por:</p>
	<ul class="a">
	<table width="100%">
	
	   <tr><td><li><?=@$participantes[0]?></td><td>..........</td><td>Médica de Clinica Geral 1ª classe;</li></td></tr>
	   <tr><td><li><?=@$participantes[1]?></td><td>..........</td><td>Médica de Clinica Geral 1ª classe;</li></td></tr>
	   <tr><td><li><?=@$participantes[2]?></td><td>..........</td><td>Técnica de Medicina;</li></td></tr>
	   <tr><td><li><?=@$participantes[3]?></td><td>..........</td><td>Enfermeiro Geral;</li></td></tr>
	</ul>

	</table>
	<p style="line-height: 1.5; text-align: justify; font-family:Calibri (Corpo)">Acompanhados pela representante do respectivo do estabelecimento.</p>	
	
	<p style="line-height: 1.5; text-align: justify; font-family:Calibri (Corpo)"><b>Objectivos:</b></p>	
	<ul class="a">
	<?php
		for ($i = 0; $i <$objectivos_count-1; $i++) {
		?>
		<li align="left"><?php echo $objectivos[$i],";";?></li>
		<?php
		}
	?>
	  
	</ul>
	
	<p style="line-height: 1.5; text-align: justify; font-family:Calibri (Corpo)"><b>Constatações Positivas:</b></p>	
	<ul class="a">
	<?php
		for ($i = 0; $i <$constatacoes_count-1; $i++) {
		?>
		<li align="left"><?php echo $constatacoes[$i],";";?></li>
		<?php
		}
	?>
	  
	</ul>
	<?php
		if($constatacoes__negativas_count>1){
			echo '<p style="line-height: 1.5; text-align: justify; font-family:Calibri (Corpo)"><b>Constatcoes negativas:</b></p>';
		}
	?>
	<ul class="a">
	<?php
		for ($i = 0; $i <$constatacoes__negativas_count-1; $i++) {
		?>
		<li align="left"><?php echo $constatacoes_negativas[$i],";";?></li>
		<?php
		}
	?>
	</ul>

	
	<p style="line-height: 1.5; text-align: justify; font-family:Calibri (Corpo)"><b>Recomendações:</b></p>	
	<ul class="a">
	<?php
		for ($i = 0; $i <$recomendacoes_count-1; $i++) {
		?>
		<li align="left"><?php echo $recomendacoes[$i],";";?></li>
		<?php
		}
	?>
	</ul>
	
	<p style="line-height: 1.5; text-align: justify; font-family:Calibri (Corpo)"><b>Conclusão:</b></p>	
	<p style="line-height: 1.5; text-align: justify; font-family:Calibri (Corpo)">A comissão técnica concluiu que 
	<?php
		if($registo["condicoes_reunidas"]==1){
			echo "<b>estão reunidos</b>";
		}else{
			echo "<b>nao estao reunidos</b>";
		}
	?>

	os requisitos exigidos por lei n° 24/2009 de 28 de Setembro para <?=$registo["condicoes_nao_reunidas"],"."?></b></p>	

	
	<p style="line-height: 1.5; text-align: justify; font-family:Calibri (Corpo)"><b>Equipe de vistoria:</b></p>	
	<table width="100%">
	   <tr><td><li><?=@$participantes[0]?></td><td>..........</td><td>Médica de Clinica Geral 1ª classe;</li></td></tr>
	   <tr><td><li><?=@$participantes[1]?></td><td>..........</td><td>Médica de Clinica Geral 1ª classe;</li></td></tr>
	   <tr><td><li><?=@$participantes[2]?></td><td>..........</td><td>Técnica de Medicina;</li></td></tr>
	   <tr><td><li><?=@$participantes[3]?></td><td>..........</td><td>Enfermeiro Geral;</li></td></tr>
	</ul>
	</table>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p style="line-height: 1.5; text-align: center; font-family:Calibri (Corpo)">Maputo, 11 de Abril de 2022</p>
	<p style="line-height: 1.5; text-align: center; font-family:Calibri (Corpo)">A Chefe do DS</p>
	<p style="line-height: 1.5; text-align: center; font-family:Calibri (Corpo)">_____________________________</p>
	<p style="line-height: 1.5; text-align: center; font-family:Calibri (Corpo)">Maria do Céu Garife</p>
	<p style="line-height: 1.5; text-align: center; font-family:Calibri (Corpo)">(Médica de Clinica Geral de 1ª)</p>
	
 
 <style>
	ul.a {
	  list-style-type: circle;
	  text-align: left;
	}
</style>

	</div>

	
	</div>
  </span>
     
</div>    
	
 
</body>
</html>
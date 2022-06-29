<?php
	include("conexao.php");
	date_default_timezone_set('Africa/Maputo');
	$criado = date('Y-m-d H:i:s');

	//Os comandos so serao executados caso seja feito um POST
	if(isset($_POST)){
		$dadosform	= $_POST["dadosform"];
		$iduser			=$_POST["iduser"];
		if($dadosform=="u_sanitaria"){
				/* Recuperar os Dados do Formulário de Envio gestaoUtilizador*/
				$id_provincia			= $_POST["id_provincia"];
				$nome_usuario			= $_POST["nome_usuario"];
				$validade				= $_POST["validade"];
				$sector					= $_POST["sector"];
				$nome					= $_POST["nome"];
				$email					= $_POST["email"];
				$telefone				= $_POST["telefone"];
				$senha					= $_POST["senha"];
				$tipo					= $_POST["tipo"];
				$morada					= $_POST["morada"];
				$responsavel			= $_POST["responsavel"];
				$nome_u_clinica			= $_POST["nome_u_clinica"];
				//Adicionar dados recuperados
				$sql="INSERT INTO `gestao_usuarios` (`ID_USUARIO`, `ID_PROVINCIA`, `NOME_USUARIO`, `SENHA`, `CATEGORIA`, `SECTOR`, `NOME`, `APELIDO`, `EMAIL`, `TELEFONE`, `VALIDADE_CONTA`, `TIPO`, `MORADA`, `UNIDADE`, `DATA`, `ESTADO`) 
				VALUES (NULL, '$id_provincia', '$nome_usuario', '$senha', '1', '2', '$responsavel', NULL, NULL, '$telefone', NULL, '$tipo', '$morada', '$nome_u_clinica', NOW(), 'Novo');";
				
				mysqli_query($con, $sql) or die("Dados nao gravados!");
				//mysqli_close($con);
		}
		else if($dadosform=="aprovar") {
				/* Recuperar os Dados do Formulário de Envio encontrosRealizados*/
				$id_aprove			= $_POST["id_aprove"];
			
				//Atualizar dados recuperados
				$sql="UPDATE `gestao_usuarios` SET `ESTADO` = '2'
				WHERE `ID_USUARIO` = '$id_aprove';";
				
				mysqli_query($con, $sql) or die("Dados nao gravados!");
			
		}
		else if($dadosform=="aprove_us") {
				/* Recuperar os Dados do Formulário de Envio encontrosRealizados*/
				$id			= $_POST["id"];
			
				//Atualizar dados recuperados
				$sql="UPDATE `gestao_usuarios` SET `ESTADO` = '2'
				WHERE `ID_USUARIO` = '$id';";
				
				mysqli_query($con, $sql) or die("Dados nao gravados!");
			
		}
		
			else if($dadosform=="auditoria"){
						/* Recuperar os Dados do Formulário de Envio visitasEfectuadas*/
				$unidade_sanitaria				= $_POST["unidade_sanitaria"];
				$vistoria_para					= $_POST["vistoria_para"];
				$distrito						= $_POST["distrito"];
				$data_auditoria					= $_POST["data_auditoria"];
				$local							= $_POST["local"];
				$composta_por					= $_POST["composta_por"];
				$objectivos						= $_POST["objectivos"];
				$constatacoes_pos				= $_POST["constatacoes_pos"];
				$constatacoes_neg				= $_POST["constatacoes_neg"];
				$recomendacoes					= $_POST["recomendacoes"];
				$condicoes_reunidas				= $_POST["condicoes_reunidas"];
				$condicoes_nao_reunidas			= $_POST["condicoes_nao_reunidas"];

					
				//Adicionar dados recuperados
				$sql="INSERT INTO `auditoria` (`id_auditoria`, `unidade_sanitaria`, `vistoria_para`, `distrito`, `data_auditoria`, `local`, `composta_por`, `objectivos`, `constatacoes_pos`, `constatacoes_neg`, `recomendacoes`, `condicoes_reunidas`, `condicoes_nao_reunidas`,`data_a`, `estado`)
				VALUES (NULL, '$unidade_sanitaria', '$vistoria_para', '$distrito', '$data_auditoria', '$local', '$composta_por', '$objectivos', '$constatacoes_pos', '$constatacoes_neg', '$recomendacoes', '$condicoes_reunidas', '$condicoes_nao_reunidas', NOW(), '1') ;";
				
				mysqli_query($con, $sql) or die("Dados nao gravados!");
			
		}
			else if($dadosform=="visitasDistritos"){
						/* Recuperar os Dados do Formulário de Envio visitasDistritos*/
				$id_provincia			= $_POST["id_provincia"];
				$local_visitado			= $_POST["local_visitado"];
				$data					= $_POST["data"];
				$grau_cumprimento		= $_POST["grau_cumprimento"];
				$objectivo				= $_POST["objectivo"];
				$participantes			= $_POST["participantes"];
				$prazo					= $_POST["prazo"];
				$recomendacoes			= $_POST["recomendacoes"];
				$responsavel			= $_POST["responsavel"];
				$tematica				= $_POST["tematica"];
				$distrito_visitado		= $_POST["distrito_visitado"];
				
				//Adicionar dados recuperados
				$sql="INSERT INTO `visitas_distritais` (`ID_VISITAS_DISTRITAIS`, `ID_PROVINCIA`, `LOCAL_VISITADO`, `DATA`, `GRAU_CUMPRIMENTO`, `OBJECTIVO`, `PARTICIPANTES`, `PRAZO`, `RECOMENDACOES`, `RESPONSAVEL`, `TEMATICA`, `DISTRITO_VISITADO`, `CRIADO`, `MODIFICADO`, `ID_USER_CRIADO`, `ID_USER_MODIFICADO`) 
				VALUES (NULL, '$id_provincia', '$local_visitado', '$data', '$grau_cumprimento', '$objectivo', '$participantes', '$prazo', '$recomendacoes', '$responsavel', '$tematica', '$distrito_visitado', '$criado', NULL, '$iduser', NULL);";
				
				mysqli_query($con, $sql) or die("Dados nao gravados!");
		}
				else if($dadosform=="visitasRecebidas"){
						/* Recuperar os Dados do Formulário de Envio visitasRecebidas*/
				$id_provincia			= $_POST["id_provincia"];
				$data					= $_POST["data"];
				$grau_cumprimento		= $_POST["grau_cumprimento"];
				$objectivo				= $_POST["objectivo"];
				$participantes			= $_POST["participantes"];
				$prazo					= $_POST["prazo"];
				$recomendacoes			= $_POST["recomendacoes"];
				$responsavel			= $_POST["responsavel"];
				$tematica				= $_POST["tematica"];
				$tipo_visita			= $_POST["tipo_visita"];
				

				//Adicionar dados recuperados
				$sql="INSERT INTO `visitas_recebidas` (`ID_VISITAS_RECEBIDAS`, `ID_PROVINCIA`, `DATA`, `GRAU_CUMPRIMENTO`, `OBJECTIVO`, `PARTICIPANTES`, `PRAZO`, `RECOMENDACOES`, `RESPONSAVEL`, `TEMATICA`, `TIPO_VISITA`, `CRIADO`, `MODIFICADO`, `ID_USER_CRIADO`, `ID_USER_MODIFICADO`) 
				VALUES (NULL, '$id_provincia', '$data', '$grau_cumprimento', '$objectivo', '$participantes', '$prazo', '$recomendacoes', '$responsavel', '$tematica', '$tipo_visita', '$criado', NULL, '$iduser', NULL);";
				
				mysqli_query($con, $sql) or die("Dados nao gravados!");
		}
				else if($dadosform=="visitasEstrangeiro"){
				/* Recuperar os Dados do Formulário de Envio visitasEstrangeiro*/
				$id_provincia					= $_POST["id_provincia"];
				$local_visitado					= $_POST["local_visitado"];
				$data							= $_POST["data"];
				$grau_implementacao				= $_POST["grau_implementacao"];
				$objectivo						= $_POST["objectivo"];
				$participantes					= $_POST["participantes"];
				$prazo							= $_POST["prazo"];
				$responsavel					= $_POST["responsavel"];
				$instituicoes_visitadas			= $_POST["instituicoes_visitadas"];
				$result_alcancados				= $_POST["result_alcancados"];
				

				//Adicionar dados recuperados
				$sql="INSERT INTO `visitas_estrangeiro` (`ID_VISITAS_ESTRANGEIRO`, `ID_PROVINCIA`, `LOCAL_VISITADO`, `DATA`, `GRAU_IMPLEMENTACAO`, `OBJECTIVO`, `PARTICIPANTES`, `PRAZO`, `RESPONSAVEL`, `INSTITUICOES_VISITADAS`, `RESULT_ALCANCADOS`, `CRIADO`, `MODIFICADO`, `ID_USER_CRIADO`, `ID_USER_MODIFICADO`) 
				VALUES (NULL, '$id_provincia', '$local_visitado', '$data', '$grau_implementacao', '$objectivo', '$participantes', '$prazo', '$responsavel', '$instituicoes_visitadas', '$result_alcancados', '$criado', NULL, '$iduser', NULL);";
				
				mysqli_query($con, $sql) or die("Dados nao gravados!");
		}
		else {
			echo "Nenum formulario";
		}
	}
?>
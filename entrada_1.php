<?php
	$sql =  "select count(*) as total from `gestao_usuarios`";
	$resultado = mysqli_query($con, $sql) or die ("Dados nao encontrados!");
	$data=mysqli_fetch_assoc($resultado);
	$total=$data['total'];
	
	$sql =  "select count(*) as pendentes from `gestao_usuarios` where `ESTADO`='1'";
	$resultado = mysqli_query($con, $sql) or die ("Dados nao encontrados!");
	$data=mysqli_fetch_assoc($resultado);
	$pendentes=$data['pendentes'];
	$percent_pendentes=round((($pendentes/$total)*100),2);

	
	$sql =  "select count(*) as aprovados from `gestao_usuarios` where `ESTADO`='2'";
	$resultado = mysqli_query($con, $sql) or die ("Dados nao encontrados!");
	$data=mysqli_fetch_assoc($resultado);
	$aprovados=$data['aprovados'];
<?php
require("../../config.php");

//SALVA
if(empty($id_categoria)){


$sql = $db->select("INSERT INTO cad_categorias (nome_categoria,
												ativo_categoria																	
												) VALUES (
												'$nome_categoria',
												'$ativo_categoria'
											)");
											
											

//UPDATE
}else{

	$sql = $db->select("UPDATE cad_categorias SET nome_categoria='$nome_categoria',
												ativo_categoria='$ativo_categoria' 
												WHERE id_categoria='$id_categoria' LIMIT 1");
}



 
 
 
//SESSIONS DE AVISO//
$_SESSION['avisos-sis-erp-classe'] = 'success';
$_SESSION['avisos-sis-erp'] = 'Categoria cadastrada/alterada com sucesso.';

//REDIRECIONA PARA A PÁGINA//
header("Location: ".CAMINHO_BASE."categorias");

?>
<?php
ob_start();
@session_start();
date_default_timezone_set('America/Sao_Paulo');


//VARIAVEIS DE CAMINHO DO SITE E ADMIN//
$caminho_base = 'http://'.$_SERVER['HTTP_HOST'].'/sis/Sistema-ERP/';	
define("CAMINHO_BASE", $caminho_base);
define('ROOT_DIR', dirname(__FILE__).'/' );

define("HOST", "localhost");
define("DBNAME", "sis");
define("USER", "root");
define("PASSWORD", "");
		
//CLASSES DE USO
require(ROOT_DIR."class/class.db.php");
require(ROOT_DIR."class/class.seguranca.php");
require(ROOT_DIR."class/class.menu.php");

?>
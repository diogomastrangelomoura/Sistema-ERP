<?php 
require(dirname(__FILE__)."/../config.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>SIS-ERP v1.0</title>
    <link rel="shortcut icon" href="<?php echo CAMINHO_BASE; ?>img/sistema/favicon.png">

    <!-- vendor css -->
    <link href="<?php echo CAMINHO_BASE; ?>lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo CAMINHO_BASE; ?>lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="<?php echo CAMINHO_BASE; ?>lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link href="<?php echo CAMINHO_BASE; ?>css/starlight.css" rel="stylesheet" >
    <link href="<?php echo CAMINHO_BASE; ?>css/custom.css" rel="stylesheet" >
  </head>

  <body>


  <?php
    require'menu_lateral_esquerdo.php'; 
    require'barra_superior.php'; 
    require'menu_lateral_direito.php'; 
  ?>  

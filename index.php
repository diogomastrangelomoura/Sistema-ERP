<?php 
require(dirname(__FILE__)."/config.php");
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
    <link href="<?php echo CAMINHO_BASE; ?>css/custom.css" rel="stylesheet" >

  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v fundo_index">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="col-md-12 tx-center pd-xs-0">
            <img src="img/sistema/logo.png">
        </div>    
        
        <div class="tx-center mg-b-20 mg-t-15 tx-15 letras_finas">GESTÃO EMPRESÁRIAL <small class="tx-info tx-normal">v1.0</small></div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="USUÁRIO">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="SENHA">          
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">ACESSAR SISTEMA</button>

        <div class="mg-t-30 tx-center letras_finas">SISCONNECTION &copy; <?php echo date("Y"); ?> </div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->


    <script src="<?php echo CAMINHO_BASE; ?>lib/jquery/jquery.js"></script>
    <script src="<?php echo CAMINHO_BASE; ?>lib/popper.js/popper.js"></script>
    <script src="<?php echo CAMINHO_BASE; ?>lib/bootstrap/bootstrap.js"></script>
    
  </body>
</html>

    
    <!-- ########## MENU ESQUERDO ########## -->
    
    <div class="sl-logo">
        <a href="javascript:void(0);"> <img src="img/sistema/logo-pequena.png"> SIS-ERP <small>v1.0</small></a>
    </div>
    
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="PESQUISA">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Menu de Navegação</label>

      <div class="sl-sideleft-menu">


        <?php 

          $menu = new MENU();
          $exibe_menus = $menu->ConstroiMenu();

         ?>

      </div>
      
    </div>
    <!-- ########## MENU ESQUERDO ########## -->

  
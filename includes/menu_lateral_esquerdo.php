    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""> <img src="img/logo/logo-pequena.png"> SisConnection</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
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

      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->
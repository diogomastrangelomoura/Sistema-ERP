<?php

		
class MENU{

	
    
	public function ConstroiMenu(){
		$db = new DB();
		
		$sel = $db->select("SELECT * FROM sis_menu ORDER BY id_menu");
        while($ln = $db->expand($sel)){

        echo' <a href="'.CAMINHO_BASE.$ln['link_menu'].'" class="sl-menu-link">';
         echo' <div class="sl-menu-item">';
           echo' '.$ln['icone_menu'].'';
            echo'<span class="menu-item-label upper">'.$ln['nome_menu'].'</span>';
             $this->ConstroiSubmenu($ln['id_menu'],1);
         echo' </div>';
       	echo' </a>';	

       	$this->ConstroiSubmenu($ln['id_menu']);
        }

	}



	public function ConstroiSubmenu($id_pai,$tipo=0){
		$db = new DB();
		

		//Verifica se existe menu e adiciona uma seta no menu
		if ($tipo==1) {
			$sel = $db->select("SELECT id_submenu FROM sis_submenu WHERE id_menu_pai=$id_pai LIMIT 1");

			if ($db->rows($sel)) {
				echo '<i class="menu-item-arrow fa fa-angle-down"></i>';
			}

		}


		//Constroi o submenu
		if($tipo==0){
			$sel = $db->select("SELECT * FROM sis_submenu WHERE id_menu_pai=$id_pai ORDER BY id_submenu");
			if ($db->rows($sel)) {

				echo'<ul class="sl-menu-sub nav flex-column">';
		        while($ln = $db->expand($sel)){
		          echo'<li class="nav-item upper"><a href="'.CAMINHO_BASE.$ln['link_submenu'].'" class="nav-link">'.$ln['nome_submenu'].'</a></li>';
		        }
		        echo'</ul>';
	        }
  		}


	}



	


}


?>

       
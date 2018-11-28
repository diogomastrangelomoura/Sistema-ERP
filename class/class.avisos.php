<?php
@session_start();

class AvisosSistema{
	
	
	public function ExibeAvisos(){	
		
		if(isset($_SESSION['avisos-sis-erp'])){

			
			echo '<div class="alert alert-'.$_SESSION['avisos-sis-erp-classe'].' avisos-sistema" role="alert">';
				echo '<div class="col-md-12">';
					echo '<button type="button" class="close cursor" data-dismiss="alert" aria-label="Close">';
          				echo '<span aria-hidden="true">&times;</span>';
        			echo '</button>';
        			echo '<div class="d-flex align-items-center justify-content-start">';
  						echo '<span>'.$_SESSION['avisos-sis-erp'].'</span>';
  					echo '</div>';		
				echo '</div>';
			echo '</div>';
			
			unset($_SESSION['avisos-sis-erp-classe']);	
			unset($_SESSION['avisos-sis-erp']);	
			
		} 
		
	}
	
	
	
}

?>
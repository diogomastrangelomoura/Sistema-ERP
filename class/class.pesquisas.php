<?php

		
class Pesquisas{

	    
	public function PesquisaDados($campo,$tabela,$id,$id_principal){

		if($id!=0){
			$db = new DB();		
			$sel = $db->select("SELECT $campo FROM $tabela WHERE $id_principal='$id' LIMIT 1");
	        $ln = $db->expand($sel);        
	        return $ln[$campo];
	    } else {
	    	return '';
	    }

	}



}


?>

       
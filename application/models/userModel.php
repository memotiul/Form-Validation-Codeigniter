<?php
 
class userModel extends CI_Model {

	function all(){
			 return $allValues = $this->db->get('accounts')->result_array();
	}
	function ins($formArray){
		$this->db->insert('accounts',$formArray);
	}
}
 
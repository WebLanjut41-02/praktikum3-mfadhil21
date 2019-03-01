<?php 

/**
 * 
 */
class masuk_model extends CI_Model{
	function ambil_data($nama){
		return $this->db->get('user');
	}
}

 ?>
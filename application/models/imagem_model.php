<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class imagem_model extends CI_Model {

		public function showImage(){
			$query = "SELECT * FROM img";
			return $this->db->query($query)->result();
		}

}

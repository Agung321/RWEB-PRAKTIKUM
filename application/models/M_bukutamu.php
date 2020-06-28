<?php  

class M_bukutamu extends CI_Model{
	public function data_bukutamu(){
		$query = $this->db->query("SELECT * FROM buku_tamu");
		return $query->result();
	}
	public function add_bukutamu($data){
		$this->db->insert('buku_tamu',$data);
	}
}

?>
<?php 

class Bukutamu extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_bukutamu');
		
		if($this->session->userdata('login')==null){
			redirect('login');
		}
	}

	public function index(){
		$data = array(
			'data_bukutamu' => $this->m_bukutamu->data_bukutamu(),
		);
		$this->load->view('user/bukutamu/add_bukutamu',$data); 
	}

	public function tambah_data(){
		$nama =$this->input->post('nama');
		$judul =$this->input->post('judul');
		$untuk =$this->input->post('untuk');
		$pertanyaan =$this->input->post('pertanyaan');
		$tanggal =date("Y-m-d");

		$data = array(
			'nama' => $nama,
			'judul' => $judul,
			'untuk' => $untuk,
			'pertanyaan' => $pertanyaan,
			'tanggal' =>$tanggal,
		);
		$this->m_bukutamu->add_bukutamu($data,'buku_tamu');
		redirect('http://localhost/RWEB/index.php/user/bukutamu');

	}

}

?>
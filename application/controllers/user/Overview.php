<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('login')==null){
			redirect('login');
		}
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("user/overview");
	}
}
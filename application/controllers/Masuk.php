<?php  
	/**
	 * 
	 */
	class Masuk extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('masuk_model');
		}

		function login(){
			$this->session->set_userdata('pesanan',$nama=$this->input->post('nama'));
			redirect('Masuk/daftar');
		}

		public function index(){
			$this->load->view('masuk');
		}

		public function daftar()
		{
			$data['nama']= $this->session->userdata['pesanan'];
			$this->load->view('pesan', $data);
		}

		function aksi_masuk(){
		$where = array('nama' => $nama);
		$data_session = array('nama' => $nama);
		$this->session->set_userdata($data_session);
		redirect('login','refresh');
		}
	}
?>
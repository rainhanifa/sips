<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {
var $tabel='coba';
	public function index()
	
	{
		$data['kotak_masuk']=$this->db->get("coba")->result_array();
		$this->load->view('template/header.php');
		$this->load->view('inbox/v_inbox.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		$this->load->view('template/header.php');
		$this->load->view('inbox/v_tambahinbox.php');
		$this->load->view('template/footer.php');
	}

	public function ubah()
	{
		$this->load->view('template/header.php');
		$this->load->view('inbox/v_ubahinbox.php');
		$this->load->view('template/footer.php');
	}

	public function hapus()
	{
		redirect(base_url('inbox'));
	}
}
?>

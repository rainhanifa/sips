<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outbox extends CI_Controller {
		
	var $table = "surat_keluar";
		
	public function index()
	{
		$data['outbox'] = $this->db->get("surat_keluar")->result_array();


		$this->load->view('template/header.php');
		$this->load->view('outbox/v_outbox.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		$this->load->view('template/header.php');
		$this->load->view('outbox/v_tambahoutbox.php');
		$this->load->view('template/footer.php');
	}

	public function ubah()
	{
		$this->load->view('template/header.php');
		$this->load->view('outbox/v_ubahoutbox.php');
		$this->load->view('template/footer.php');
	}

	public function hapus()
	{
		redirect(base_url('outbox'));
	}
}
?>

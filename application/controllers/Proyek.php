<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {
	var $table = 'projects';

	public function index()
	{
		$data['proyek'] = $this->db->get("projects")->result_array();

		$this->load->view('template/header.php');
		$this->load->view('proyek/v_proyek.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		$this->load->view('template/header.php');
		$this->load->view('proyek/v_tambahProyek.php');
		$this->load->view('template/footer.php');
	}

	public function edit()
	{
		$this->load->view('template/header.php');
		$this->load->view('proyek/v_ubahProyek.php');
		$this->load->view('template/footer.php');
	}

	public function hapus()
	{
		redirect(base_url('proyek'));
	}
}
?>

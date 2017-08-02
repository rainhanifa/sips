<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('template/header.php');
		$this->load->view('proyek/v_proyek.php');
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

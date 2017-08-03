<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klasifikasi extends CI_Controller{

	public function index()
	{
		$this->load->view('template/header.php');
		$this->load->view('klasifikasi/v_klasifikasi.php');
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		$this->load->view('template/header.php');
		$this->load->view('klasifikasi/v_tambahklasifikasi.php');
		$this->load->view('template/footer.php');
	}

	public function ubah()
	{
		$this->load->view('template/header.php');
		$this->load->view('klasifikasi/v_ubahklasifikasi.php');
		$this->load->view('template/footer.php');
	}

	public function hapus()
	{
		redirect(base_url('klasifikasi'));

	}
}
?>
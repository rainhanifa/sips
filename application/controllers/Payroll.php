<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends CI_Controller{

	public function index()
	{
		$this->load->view('template/header.php');
		$this->load->view('payroll/v_payroll.php');
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		$this->load->view('template/header.php');
		$this->load->view('payroll/v_tambahpayroll.php');
		$this->load->view('template/footer.php');
	}

	public function ubah()
	{
		$this->load->view('template/header.php');
		$this->load->view('payroll/v_ubahpayroll.php');
		$this->load->view('template/footer.php');
	}

	public function hapus()
	{
		redirect(base_url('payroll'));

	}
}
?>
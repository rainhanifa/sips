<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends CI_Controller{
	var $table="payroll";

	public function index()
	{
		//query bisa menggunakan 
		$data['payroll']	= $this->db->query("SELECT * FROM payroll")->result_array();
		//atau menggunakan builder get
		$data['payroll']	= $this->db->get("payroll")->result_array();

		$this->load->view('template/header.php');
		$this->load->view('payroll/v_payroll.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		// jika ada post
		if(isset($_POST['submit'])){
			// ambil value dari masing-masing input
			$tanggal	= $this->input->post("date");
			$penerima	= $this->input->post("member_id");
			$bulan		=$this->input->post("payment_period");
			$nominal	= $this->input->post("amount");


			$user_data 	= array("date" => $tanggal,
								"member_id" => $penerima,
								"payment_period" => $bulan,
								"amount" => $nominal
								);
			//insert ke database
			if($this->db->insert($this->table, $user_data)){
				// kirim pesan berhasil
				$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah member!</div>');

				// redirect
				redirect(base_url("payroll"));
			}
			else{
				//kirim pesan error
				$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah member!</div>');
			}
		}
		//menampilkan form tambah


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
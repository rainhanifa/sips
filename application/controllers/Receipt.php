<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receipt extends CI_Controller {
	var $table = "receipt";

	public function index()
	{
//query bisa menggunakan 
		$data['list']	= $this->db->query("SELECT * FROM receipt")->result_array();
		//atau menggunakan builder get
		$data['list']	= $this->db->get("receipt")->result_array();


		$this->load->view('template/header.php');
		$this->load->view('receipt/v_receipt.php', $data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		// jika ada post
		if(isset($_POST['submit'])){
			// ambil value dari masing-masing input
			$date		= date('Y-m-d H:i:s', strtotime($this->input->post('date')));
			$subject	= $this->input->post('subject');
			$file 		= $this->input->post('file');
			$amount		= $this->input->post('amount');

			$receipt_data 	= array("date" 			=> $date,
									"subject" 		=> $subject,
									"file"			=> $file,
									"amount" 		=> $amount
									);
			//insert ke database
			if($this->db->insert($this->table, $receipt_data)){
				// kirim pesan berhasil
				$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah receipt!</div>');

				// redirect
				redirect(base_url("receipt"));
			}
			else{
				//kirim pesan error
				$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah receipt!</div>');
			}
		}

		$this->load->view('template/header.php');
		$this->load->view('receipt/v_tambahreceipt.php');
		$this->load->view('template/footer.php');
	}

	public function ubah()
	{
		$this->load->view('template/header.php');
		$this->load->view('invoice/v_ubahreceipt.php');
		$this->load->view('template/footer.php');
	}

	public function hapus()
	{
		redirect(base_url('receipt'));
	}
}
?>

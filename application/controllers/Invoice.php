<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

	var $table = "invoice";
	public function index()
	{

		$data['tagihan'] = $this->db->get("invoice")->result_array();
		$this->load->view('template/header.php');
		$this->load->view('invoice/v_invoice.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		if (isset($_POST['submit'])) {
			$tanggal = date('Y-m-d', strtotime($this->input->post('date')));
			$penerima = $this->input->post('recipient_id');
			$perihal = $this->input->post('subject');
			$nominal = $this->input->post('amount');
			
			$data_tagihan = array('date'		 => $tanggal,
								  'recipient_id' => $penerima,
								  'amount'		 => $nominal
								  );

			//insert ke database
			if($this->db->insert($this->table, $data_tagihan)){
			// 	// kirim pesan berhasil
			 	$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah user!</div>');

			 	// redirect
				redirect(base_url("invoice"));
			 }
			 else{
			 	//kirim pesan error
			 	$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah user!</div>');
			 }
		}
		$this->load->view('template/header.php');
		$this->load->view('invoice/v_tambahinvoice.php');
		$this->load->view('template/footer.php');
	}

	public function ubah()
	{
		$this->load->view('template/header.php');
		$this->load->view('invoice/v_ubahinvoice.php');
		$this->load->view('template/footer.php');
	}

	public function hapus()
	{
		if ($this->input->post() != null) {
			$id_hapus = $this->input->post('id_hapus');

			$where = array('no_letter'=>$id_hapus);
			$this->db->delete('outbox',$where);
			redirect(base_url('invoice'));
		}
	}
}
?>

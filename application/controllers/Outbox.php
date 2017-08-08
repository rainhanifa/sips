<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outbox extends CI_Controller {
		
	var $table = "outbox";
		
	public function index()
	{
		$data['outbox'] = $this->db->get("outbox")->result_array();


		$this->load->view('template/header.php');
		$this->load->view('outbox/v_outbox.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		if (isset($_POST['submit'])) {
			$tanggal  	  = date('Y-m-d', strtotime($this->input->post('date')));			
			$penerima 	  = $this->input->post('recipient_id');
			$perihal  	  = $this->input->post('subject');

			$surat_keluar = array('date' 		 => $tanggal,
								  'recipient_id' => $penerima,
								  'subject' 	 => $perihal
								  );
		
		//insert ke database
			if($this->db->insert($this->table, $surat_keluar)){
				// kirim pesan berhasil
				$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah user!</div>');

				// redirect
				redirect(base_url("outbox"));
			}
			else{
				//kirim pesan error
				$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah user!</div>');
			}
		}
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

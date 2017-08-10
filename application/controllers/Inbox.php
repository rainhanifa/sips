<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

	var $table='inbox';

	public function index()
	{

		//query bisa menggunakan 
		$data['list']	= $this->db->query("SELECT * FROM inbox")->result_array();
		//atau menggunakan builder get
		$data['list']	= $this->db->get("inbox")->result_array();

		$this->load->view('template/header.php');
		$this->load->view('inbox/v_inbox.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		// jika ada post
		if(isset($_POST['submit'])){
			// ambil value dari masing-masing input
			$no_letter			= $this->input->post("no_letter");
			$date_letter		= date('Y-m-d H:i:s', strtotime($this->input->post('date_letter')));
			$sender_id			= $this->input->post("sender_id");
			$subject			= $this->input->post("subject");

			$inbox_data 	= array("no_letter"		=> $no_letter,
									"date_letter" 	=> $date_letter,
									"sender_id" 	=> $sender_id,
									"subject" 		=> $subject
									);
			//insert ke database
			if($this->db->insert($this->table, $inbox_data)){
				// kirim pesan berhasil
				$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah surat masuk!</div>');

				// redirect
				redirect(base_url("inbox"));
			}
			else{
				//kirim pesan error
				$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah surat masuk!</div>');
			}
		}

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
if ($this->input->post() != null) {
			$id_hapus = $this->input->post('id_hapus');

			$where = array('id'=>$id_hapus);
			$this->db->delete('inbox',$where);
			redirect(base_url('inbox'));
		}	}
}
?>

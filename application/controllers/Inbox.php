<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

	var $table='inbox';

	public function index()
	{

//query bisa menggunakan 
		$data['list']	= $this->db->query("SELECT id,
			no_letter,
			date_letter,
			contacts.name as name,
			sender_id,
			subject,
			files
		 FROM inbox 
		 join contacts on inbox.sender_id = contacts.id_contacts
		 ")->result_array();
		

		$this->load->view('template/header.php');
		$this->load->view('inbox/v_inbox.php', $data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
				$nama['contacts'] = $this->db->get('contacts')->result();

		// jika ada post
		if(isset($_POST['submit'])){
			// ambil value dari masing-masing input
			$no_letter			= $this->input->post("no_letter");
			$date_letter		= date('Y-m-d H:i:s', strtotime($this->input->post('date_letter')));
			$sender_id			= $this->input->post("id_contacts");
			$subject			= $this->input->post("subject");

			// $sender_id = '';
			// $sender_id = $this->db->query("SELECT Max(INBOX.sender_id)AS MAX From INBOX ")->result_array();
			// $no_letter = $no_letter + 1;
			// $sender_id = (int)$sender_id[0]["MAX"] +1;

			$inbox_data 	= array("no_letter"		=> $no_letter,
									"date_letter" 	=> $date_letter,
									"sender_id" 	=> $sender_id,
									"subject" 		=> $subject,

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
		$this->load->view('inbox/v_tambahinbox.php',$nama);
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

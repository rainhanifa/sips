<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	var $table = "contacts";

	public function index()
	{
		//query bisa menggunakan 
		$data['list']	= $this->db->query("SELECT * FROM contacts")->result_array();
		//atau menggunakan builder get
		$data['list']	= $this->db->get("contacts")->result_array();

		$this->load->view('template/header.php');
		$this->load->view('kontak/v_kontak.php', $data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		// jika ada post
		if(isset($_POST['submit'])){
			// ambil value dari masing-masing input
			$name	= $this->input->post("name");
			$institution	= $this->input->post("institution");
			$telp= $this->input->post("telp");
			$email		= $this->input->post("email");

			$contacts_data 	= array("name" => $name,
								"institution" => $institution,
								"telp" => $telp,
								"email" => $email
								);
			//insert ke database
			if($this->db->insert($this->table, $contacts_data)){
				// kirim pesan berhasil
				$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah kontak!</div>');

				// redirect
				redirect(base_url("kontak"));
			}
			else{
				//kirim pesan error
				$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah kontak!</div>');
			}
		}

		$this->load->view('template/header.php');
		$this->load->view('kontak/v_tambahkontak.php');
		$this->load->view('template/footer.php');
	}

	public function ubah()
	{
		$this->load->view('template/header.php');
		$this->load->view('kontak/v_ubahkontak.php');
		$this->load->view('template/footer.php');
	}

	public function hapus()
	{
		redirect(base_url('kontak'));
	}
}
?>

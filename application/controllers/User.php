<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	var $table = "users";


	public function index()
	{
		//query bisa menggunakan 
		$data['list']	= $this->db->query("SELECT * FROM users")->result_array();
		//atau menggunakan builder get
		$data['list']	= $this->db->get("users")->result_array();


		$this->load->view('template/header.php');
		$this->load->view('user/view.php', $data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		// jika ada post
		if(isset($_POST['submit'])){
			// ambil value dari masing-masing input
			$username	= $this->input->post("username");
			$password	= $this->input->post("password");
			$nama_lengkap= $this->input->post("nama_lengkap");
			$role		= $this->input->post("user_role");

			$user_data 	= array("username" => $username,
								"password" => $password,
								"nama_lengkap" => $nama_lengkap,
								"role" => $role
								);
			//insert ke database
			if($this->db->insert($this->table, $user_data)){
				// kirim pesan berhasil
				$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah user!</div>');

				// redirect
				redirect(base_url("user"));
			}
			else{
				//kirim pesan error
				$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah user!</div>');
			}
		}
		//menampilkan form tambah

		$this->load->view('template/header.php');
		$this->load->view('user/tambah.php');
		$this->load->view('template/footer.php');
	}

	public function ubah()
	{
		$this->load->view('template/header.php');
		$this->load->view('user/ubah.php');
		$this->load->view('template/footer.php');
	}

	public function hapus()
	{
		redirect(base_url('user'));

	}
}
?>
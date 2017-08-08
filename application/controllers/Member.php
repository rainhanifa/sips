<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller{
	var $table="member";

	public function index()
	{
		//query bisa menggunakan 
		$data['member']	= $this->db->query("SELECT * FROM member")->result_array();
		//atau menggunakan builder get
		$data['member']	= $this->db->get("member")->result_array();

		$this->load->view('template/header.php');
		$this->load->view('member/v_member.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		// jika ada post
		if(isset($_POST['submit'])){
			// ambil value dari masing-masing input
			$nama_lengkap	= $this->input->post("nama");
			$jabatan	= $this->input->post("jabatan");

			$user_data 	= array("nama" => $nama_lengkap,
								"jabatan" => $jabatan,
								);
			//insert ke database
			if($this->db->insert($this->table, $user_data)){
				// kirim pesan berhasil
				$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah member!</div>');

				// redirect
				redirect(base_url("member"));
			}
			else{
				//kirim pesan error
				$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah member!</div>');
			}
		}
		//menampilkan form tambah


		$this->load->view('template/header.php');
		$this->load->view('member/v_tambahmember.php');
		$this->load->view('template/footer.php');
	}

	public function ubah()
	{
		$this->load->view('template/header.php');
		$this->load->view('member/v_ubahmember.php');
		$this->load->view('template/footer.php');
	}

	public function hapus()
	{
		redirect(base_url('Member'));

	}
}
?>
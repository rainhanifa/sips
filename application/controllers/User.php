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
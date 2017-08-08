<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klasifikasi extends CI_Controller{
	var $table="class";

	public function index()
	{
		//query bisa menggunakan 
		$data['class']	= $this->db->query("SELECT * FROM class")->result_array();
		//atau menggunakan builder get
		$data['class']	= $this->db->get("class")->result_array();

		$this->load->view('template/header.php');
		$this->load->view('klasifikasi/v_klasifikasi.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		// jika ada post
		if(isset($_POST['submit'])){
			// ambil value dari masing-masing input
			$kode_klasifikasi	= $this->input->post("id_class");
			$klasifikasi_surat	= $this->input->post("name_class");

			$class_data 	= array("id_class" => $kode_klasifikasi,
								"name_class" => $klasifikasi_surat,
								);
			//insert ke database
			if($this->db->insert($this->table, $class_data)){
				// kirim pesan berhasil
				$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah member!</div>');

				// redirect
				redirect(base_url("Klasifikasi"));
			}
			else{
				//kirim pesan error
				$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah member!</div>');
			}
		}
		//menampilkan form tambah


		$this->load->view('template/header.php');
		$this->load->view('klasifikasi/v_tambahklasifikasi.php');
		$this->load->view('template/footer.php');
	}

	public function ubah()
	{
		$this->load->view('template/header.php');
		$this->load->view('klasifikasi/v_ubahklasifikasi.php');
		$this->load->view('template/footer.php');
	}

	public function hapus()
	{
		redirect(base_url('klasifikasi'));

	}
}
?>
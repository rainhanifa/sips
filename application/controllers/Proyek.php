<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {
	var $table = "projects";

	public function index()
	{
		$data['proyek'] = $this->db->get("projects")->result_array();

		$this->load->view('template/header.php');
		$this->load->view('proyek/v_proyek.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		//menambah data
		if (isset($_POST['submit'])) {
			$nama_proyek = $this->input->post('name_project');
			$kode_proyek = $this->input->post('code_project');

			$data_proyek = array('name_project' => $nama_proyek,
								 'code_project' => $kode_proyek
								 );

		//insert ke database
			if ($this->db->insert($this->table, $data_proyek)) {
				//jika berhasil
				$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah data!</div>');

				// redirect
				redirect(base_url("proyek"));
			}
			else{
				//kirim pesan error
				$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah data!</div>');
			}
		}
		//menampilkan
		$this->load->view('template/header.php');
		$this->load->view('proyek/v_tambahProyek.php');
		$this->load->view('template/footer.php');
	}

	public function edit()
	{
		$this->load->view('template/header.php');
		$this->load->view('proyek/v_ubahProyek.php');
		$this->load->view('template/footer.php');
	}

	public function hapus()
	{
		if ($this->input->post() != null) {
			$id_hapus = $this->input->post('id_hapus');

			$where = array('code_project'=>$id_hapus);
			$this->db->delete('projects',$where);
			redirect(base_url('proyek'));
		}
	}
}
?>

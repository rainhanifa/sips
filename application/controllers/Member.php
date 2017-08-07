<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller{
	var $table="member";

	public function index()
	{
		$data['member']=$this->db->get("member")->result_array();
		$this->load->view('template/header.php');
		$this->load->view('member/v_member.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
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
		redirect(base_url('member'));

	}
}
?>
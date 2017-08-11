<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends CI_Controller{
	var $table="payroll";

	public function index()
	{
		// $data['gaji'] = $this->db->select ('payroll.no_letter,payroll.date,member.id_member,payroll.payment_period,payroll.amount') -> FROM ('payroll') -> join ('member', 'id_member = payroll.member_id')
		// ->get()->result_array();
		//query bisa menggunakan 
		$query	= "SELECT payroll.*, member.nama FROM payroll LEFT JOIN member ON payroll.id_member = member.id_member";		//atau menggunakan builder get
		$data['payroll']	= $this->db->query($query)->result_array();

		$this->load->view('template/header.php');
		$this->load->view('payroll/v_payroll.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		$nama['member'] = $this->db->get('member')->result();
		// jika ada post
		if(isset($_POST['submit'])){
			// ambil value dari masing-masing input
			$tanggal	= $this->input->post("date");
			$penerima	= $this->input->post("id_member");
			$bulan		= $this->input->post("date");
			$nominal	= $this->input->post("amount");
			$nama	= $this->input->post("id_member");

			$insert_tanggal = date('Y-m-d', strtotime($tanggal));
			$user_data 	= array("date" => $tanggal,
								"id_member" => $penerima,
								"payment_period" => $insert_tanggal,
								"amount" => $nominal
								);
			//insert ke database
			if($this->db->insert($this->table, $user_data)){
				// kirim pesan berhasil
				$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah member!</div>');

				// redirect
				redirect(base_url("payroll"));
			}
			else{
				//kirim pesan error
				$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah member!</div>');
			}
		}
		//menampilkan form tambah


		$this->load->view('template/header.php');
		$this->load->view('payroll/v_tambahpayroll.php',$nama);
		$this->load->view('template/footer.php');
	}

// 	public function ubah($id = 0){
// 		if($id !=0)
// 	{
// 		$this->load->view('template/header.php');
// 		$this->load->view('payroll/v_ubahpayroll.php');
// 		$this->load->view('template/footer.php');
// 	}
// 	else{
// 		$this->load->view('template/header.php');
// 		$this->load->view('payroll/v_ubahpayroll.php');
// 		$this->load->view('template/footer.php');
// 	}
// }
// public function v_ubah()
// 	{
// 			$id_payroll 		= $this->input->post('id');
// 			$nama_lengkap    =   $this->input->post ('nama');
// 			$jabatan         =	  $this->input->post ('jabatan');
			
// 			echo $id_member;

// 	 		$data = array(
// 	 			'nama'=>$nama_lengkap,
// 	 			'jabatan'=>$jabatan
// 	 			);
// 	 		$this->db->where('id_member', $id_member);
// 			$this->db->update('member',$data);
// 			// $kondisi = array('nama' => $anggota);
// 			// $data['member'] = $this->db->get_where('member',$kondisi)->result();
// 			redirect (base_url('member/'));
// 	}


	public function hapus()
	{
		if ($this->input->post() != null) {
			$id_hapus = $this->input->post('id_hapus');

			$where = array('id'=>$id_hapus);
			$this->db->delete('payroll',$where);

		redirect(base_url('payroll'));
		}

	}
}
?>
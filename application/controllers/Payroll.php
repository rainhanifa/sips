<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends CI_Controller{
	var $table="payroll";

	public function index()
	{
		$data['gaji'] = $this->db->select('payroll.id, member.nama, payroll.payment_period, payroll.amount')
						->from('payroll')
						->join('member','id_member = payroll.member_id')
						->get()->result_array();

		$this->load->view('template/header.php');
		$this->load->view('payroll/v_payroll.php',$data);
		$this->load->view('template/footer.php');

		// $this->db->select ('payroll.no_letter,payroll.date,member.id_member,payroll.payment_period,payroll.amount') -> FROM ('payroll') -> join ('member', 'id_member = payroll.member_id')
		// ->get()->result_array();


		//query bisa menggunakan 
		// $query	= "SELECT payroll.*, member.nama FROM payroll LEFT JOIN member ON payroll.member_id = member.id_member";		//atau menggunakan builder get
		// $data['payroll']	= $this->db->query($query)->result_array();

		
	}

	public function tambah()
	{
		$nama['member'] = $this->db->get('member')->result_array();
		// jika ada post
		if(isset($_POST['submit'])){
			// ambil value dari masing-masing input
			$bulan_tahun	= date('m-Y', strtotime($this->input->post('date')));
			$penerima	= $this->input->post('penerima');
			$nominal	= $this->input->post('amount');
			// $bulan		= $this->input->post("payment_period");
			// $nama		= $this->input->post("id_member");
			// $bulan      = date('F',strtotime($bulan));
			// $insert_tanggal = date('Y-m-d', strtotime($tanggal));
			// $this->input->post("date");

			//isi db payroll
			$data_payroll 	= array('member_id'  	 => $penerima,
									'payment_period' => $bulan_tahun,
									'amount' 		 => $nominal

			$bulan_tahun	= $this->input->post("payment_period");//date('m, Y-m-d', strtotime($this->input->post('payment_period')));
			$penerima		= $this->input->post("id_member");
			$nominal		= $this->input->post("amount");
			// $nama			= $this->input->post("id_member");
			// $bulan		= date('l, d-m-Y');
			// $bulan      = date('F',strtotime($bulan));

			// echo $bulan_tahun;
			// die();

			// $insert_tanggal = date('Y-m-d', strtotime($tanggal));
			$user_data 	= array("id_member" => $penerima,
								"payment_period" => $bulan_tahun,
								"amount" => $nominal
								);

			//insert ke database
			if($this->db->insert($this->table, $data_payroll)){
				// kirim pesan berhasil
				$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah member!</div>');

				// redirect
				redirect(base_url("payroll/index"));
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

	public function ubah($id = 0){
	$data['member'] = $this->db->get('member')->result();
	if($id !=0)
	{
		$where = array('id'=> $id);
		$query = "SELECT member.nama, payroll.* FROM payroll LEFT JOIN member ON member.id_member = payroll.id_member WHERE payroll.id = $id";
		$data['payroll'] = $this->db->query($query)->result();

		$data['id'] = $id;
		$this->load->view('template/header.php');
		$this->load->view('payroll/v_ubahpayroll.php', $data);
		$this->load->view('template/footer.php');
	}
	else{
		$this->load->view('template/header.php');
		$this->load->view('payroll/v_ubahpayroll.php');
		$this->load->view('template/footer.php');
	}
}
public function v_ubah()
	{
			$id				 = $this->input->post("id");
			$id_member   	 = $this->input->post("id_member");
			$nama        	 = $this->input->post("nama_member");
			$bulan_tahun     = $this->input->post("payment_period");
			$nominal         = $this->input->post("amount");

			$where = array(
				'id'=>$id
				);


			echo $id;echo "<br>";
			echo $id_member;echo "<br>";
			echo $nama;echo "<br>";
			echo $bulan_tahun;echo "<br>";
			echo $nominal;echo "<br>";


	 		$data = array(
	 			'id_member'=>$nama,
	 			'date'=> date('Y-m-d', strtotime($bulan_tahun)),
	 			'amount'=>$nominal
	 			);
	 		$this->db->where($where);
			$this->db->update('payroll',$data);
			// $kondisi = array('nama' => $anggota);
			// $data['member'] = $this->db->get_where('member',$kondisi)->result();
			redirect (base_url('payroll/'));
	}


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
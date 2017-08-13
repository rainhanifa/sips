<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receipt extends CI_Controller {
	var $table = "receipt";

	public function index()
	{
//query bisa menggunakan 
		$data['kwitansi']	= $this->db->select('receipt.id, receipt.no_letter, receipt.date, receipt.subject, receipt.amount, contacts.name')
							->from('receipt')
							->join('contacts', 'id_contacts = receipt.recipient_id')
							->get()->result_array();
		 // $this->db->query("SELECT id,
			// no_letter,
			// date,
			// contacts.name as name,
			// subject,
			// amount,
			// file
		 // FROM receipt 
		 // join contacts on receipt.recipient_id = contacts.id_contacts
		 // ")->result_array();
		


		$this->load->view('template/header.php');
		$this->load->view('receipt/v_receipt.php', $data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		$nama['contacts'] = $this->db->get('contacts')->result();

		// jika ada post
		if(isset($_POST['submit'])){
			// ambil value dari masing-masing input
			$date			= $this->input->post('date');
			$subject		= $this->input->post('subject');
			$no_letter	 	= $this->input->post('no_letter');
			$amount			= $this->input->post('amount');
			$penerima		= $this->input->post('penerima');

			$no_letter = '';
			$no_letter = $this->db->query("SELECT Max(RECEIPT.no_letter)AS MAX From RECEIPT ")->result_array();
			$no_letter = $no_letter++;
			$no_letter = (int)$no_letter[0]["MAX"] +1;

			$receipt_data 	= array('no_letter'     => $no_letter,
									'date' 			=> $date,
									'recipient_id'	=> $penerima,
									'subject' 		=> $subject,
									'amount' 		=> $amount
									);
			//insert ke database
			if($this->db->insert($this->table, $receipt_data)){
				// kirim pesan berhasil
				$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah receipt!</div>');

				// redirect
				redirect(base_url("receipt/index"));
			}
			else{
				//kirim pesan error
				$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah receipt!</div>');
			}
		}

		$this->load->view('template/header.php');
		$this->load->view('receipt/v_tambahreceipt.php', $nama);
		$this->load->view('template/footer.php');
	}

	public function ubah($id = 0){	
			// $data['receipt'] = $this->db->get('receipt')->result();

		if($id != 0)

		{
			$where 	= array('id'=> $id);
			// $query = "SELECT receipt.nama, payroll.* FROM payroll LEFT JOIN member ON member.id_member = payroll.id_member WHERE payroll.id = $id";
			$data['receipt'] = $this->db->get_where('receipt',$where)->result_array();
			$data['kontak'] = $this->db->get('contacts')->result_array();
			// $data['recipient_id'] = $recipient_id;

			$this->load->view('template/header.php');
			$this->load->view('receipt/v_ubahreceipt.php', $data);
			$this->load->view('template/footer.php');
		}
		else{
			$this->load->view('template/header.php');
			$this->load->view('receipt/v_ubahreceipt.php');
			$this->load->view('template/footer.php');
		}
	
	}	
	
	public function v_ubah()
	{
			$id 			= $this->input->post('id');
			$date			= $this->input->post('date');
			$subject		= $this->input->post('subject');
			$amount			= $this->input->post('amount');
			$penerima		= $this->input->post('penerima');
			

		/*	$no_letter = '';
			$no_letter = $this->db->query("SELECT Max(RECEIPT.no_letter)AS MAX From RECEIPT ")->result_array();
			$no_letter = $no_letter++;
			$no_letter = (int)$no_letter[0]["MAX"] +1; */

			$where = array(
					'id' => $id
					);

			// echo $id."<br />";
			// echo $date."<br />";
			// echo $subject."<br />";
			// echo $amount."<br />";
			// echo $penerima."<br />";
			// die();

			$receipt_data 	= array(
									'date' 			=> $date,
									// 'id'			=> $id,
									'subject' 		=> $subject,
									'amount' 		=> $amount,
									'recipient_id'	=> $penerima
									);
			// 'no_letter'     => $no_letter,
			
			$this->db->where($where);
			$this->db->update('receipt',$receipt_data);
			redirect (base_url('receipt/'));
	}

	public function hapus()
	{if ($this->input->post() != null) {
			$id_hapus = $this->input->post('id_hapus');
			$where = array('id'=>$id_hapus);

			$this->db->delete('receipt',$where);
			redirect(base_url('receipt'));
		}
	}
}
?>

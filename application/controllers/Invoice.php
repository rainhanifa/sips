<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

	var $table = "invoice";
	public function index()
	{

		$data['tagihan'] =	$this->db->select('invoice.id, invoice.no_letter, invoice.date, contacts.name, projects.name_project, invoice.amount')->from('invoice')->join('projects', 'id_project = invoice.projects_id')
							->join('contacts', 'id_contacts = invoice.recipient_id')
							->get()->result_array();
		$this->load->view('template/header.php');
		$this->load->view('invoice/v_invoice.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		$opsi['proyek']=$this->db->get('projects')->result();
		$opsi['kontak']=$this->db->get('contacts')->result();

		if (isset($_POST['submit'])) {
			$tanggal   = date('Y-m-d', strtotime($this->input->post('date')));
			$penerima  = $this->input->post('penerima');
			$perihal   = $this->input->post('subject');
			$nominal   = $this->input->post('amount');
			$institusi = $this->input->post('institution');
			$proyek    = $this->input->post('projects_id');

			
			$data_tagihan = array('date'		 	=> $tanggal,
								  'recipient_id'    => $penerima,
								  'amount'		 	=> $nominal,
								  // 'institution'	 => $institusi,
								  'projects_id' 	 => $proyek

								  );

			//insert ke database
			if($this->db->insert($this->table, $data_tagihan)){
			// 	// kirim pesan berhasil
			 	$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah user!</div>');

			 	// redirect
				redirect(base_url("invoice"));
			 }
			 else{
			 	//kirim pesan error
			 	$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah user!</div>');
			 }
		}
		$this->load->view('template/header.php');
		$this->load->view('invoice/v_tambahinvoice.php',$opsi);
		$this->load->view('template/footer.php');
	}

	public function ubah($id = 0)
	{
		if($id != 0)
		{	
			$where 	= array('id'=> $id);
			$data['tagihan'] = $this->db->get_where('invoice',$where)->row();

			$this->load->view('template/header.php');
			$this->load->view('invoice/v_ubahInvoice.php', $data);
			$this->load->view('template/footer.php');
		}
		else{
			$this->load->view('template/header.php');
			$this->load->view('invoice/v_ubahInvoice.php');
			$this->load->view('template/footer.php');
		}
	}

	public function v_ubah()
	{
			$id_invoice     =  $this->input->post('id');
			$penerima		=  $this->input->post('penerima');
			$nominal		=  $this->input->post('amount');
			$proyek     	=  $this->input->post('projects_id');
			// $institusi = $this->input->post('institution');
			$tanggal   		=  date('Y-m-d', strtotime($this->input->post('date')));
			
	 		$data_tagihan   = array('date'		 	=> $tanggal,
								  'penerima'        => $penerima,
								  'amount'		 	=> $nominal,
								  // 'institution'	 => $institusi,
								  'projects_id' 	=> $proyek

								  );

	 		$this->db->where('id',$id_invoice);
			$this->db->update('invoice',$data_tagihan);
			// $kondisi = array('id_class' => $id_klasifikasi);
			// $data['klasifikasi'] = $this->db->get_where('class',$kondisi)->result_array();
			redirect (base_url('proyek/index'));

	}
	public function hapus()
	{
		if ($this->input->post() != null) {
			$id_hapus = $this->input->post('id_hapus');

			$where = array('no_letter'=>$id_hapus);
			$this->db->delete('invoice',$where);
			redirect(base_url('invoice'));
		}
	}
}
?>

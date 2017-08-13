<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inbox extends CI_Controller {
		
	var $table = "inbox";
		
	public function index()
	{
		$data['inbox'] =	$this->db->select('inbox.id, inbox.no_letter, inbox.date_letter, contacts.name, inbox.subject')->from('inbox')->join('contacts', 'id_contacts = inbox.sender_id')
							->get()->result_array();

		$this->load->view('template/header.php');
		$this->load->view('inbox/v_inbox.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		$pilih['kontak']=$this->db->get('contacts')->result();


		if (isset($_POST['submit'])) {
			$tanggal  	  	= $this->input->post('date_letter');
			$penerima 	  	= $this->input->post('penerima');
			$perihal  	  	= $this->input->post('subject');
			$klasifikasi  	= $this->input->post('klasifikasi');
			$nomor			= $this->input->post('no_letter');
			// var_dump($tanggal);
			// exit();

			// date('Y-m-d', strtotime($this->input->post('date')));

			// $no_letter = '';
			// $no_letter = $this->db->query("SELECT Max(inbox.no_letter)AS MAX From inbox ")->result_array();
			// // $no_letter = $no_letter + 1;

			// $nomor = (int)$no_letter[0]["MAX"] +1;

			// $bulan_romawi = array( 
			// 						'01' => 'I',
			// 						'02' => 'II',
			// 						'03' => 'III',
			// 						'04' => 'IV',
			// 						'05' => 'V',
			// 						'06' => 'VI',
			// 						'07' => 'VII',
			// 						'08' => 'VIII',
			// 						'09' => 'IX',
			// 						'10' => 'X',
			// 						'11' => 'XI',
			// 						'12' => 'XII'
			// );
			// // var_dump($bulan_romawi['01']);

			// $nama_kelas = $this->db->query("SELECT name_class FROM class WHERE id_class =".$klasifikasi)->result_array();
			// // var_dump($nama_kelas);
			// // var_dump($nama_kelas[0]['name_class']);
			// $code_letter = "/".$nama_kelas[0]['name_class']."/IS/".$bulan_romawi[date('m')]."/".date("Y");
			// var_dump($code_letter);
			$surat_masuk = array(
									'date_letter'  => $tanggal,
									'no_letter'    => $nomor,
									'sender_id'    => $penerima,
									'subject' 	   => $perihal
									// 'code_letter'  => $code_letter,
									// 'name_class' => $klasifikasi,
								  );
			
		//insert ke database
			if($this->db->insert($this->table, $surat_masuk)){
			// 	// kirim pesan berhasil
			 	$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah user!</div>');

			 	// redirect
				redirect(base_url("inbox"));
			 }
			 else{
			 	//kirim pesan error
			 	$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah user!</div>');
			 }
		}
		$this->load->view('template/header.php');
		$this->load->view('inbox/v_tambahinbox.php',$pilih);
		$this->load->view('template/footer.php');
	}

	public function ubah($id_inbox = 0)
	{
		if ($id_inbox != 0) 
		{
			$where 	= array('id'=> $id_inbox);
			// var_dump($where);
			// exit();
			$data['inbox'] = $this->db->get_where('inbox',$where)->result_array();
			$data['kontak'] = $this->db->get('contacts')->result_array();
			// $data['class'] = $this->db->get('class')->result_array();
			

				$this->load->view('template/header.php');
				$this->load->view('inbox/v_ubahinbox.php',$data);
				$this->load->view('template/footer.php');

		} 
		else{
				$this->load->view('template/header.php');
				$this->load->view('inbox/v_ubahinbox.php');
				$this->load->view('template/footer.php');
		}
	}

	public function v_ubah()
	{
		$id_inbox		= $this->input->post('id');
		$tanggal		= $this->input->post('date_letter');
		$penerima		= $this->input->post('penerima');
		$no_letter		= $this->input->post('no_letter');
		$perihal		= $this->input->post('subject');
		// $klasifikasi	= $this->input->post('klasifikasi');
		

			// $bulan_romawi = array( 
			// 						'01' => 'I',
			// 						'02' => 'II',
			// 						'03' => 'III',
			// 						'04' => 'IV',
			// 						'05' => 'V',
			// 						'06' => 'VI',
			// 						'07' => 'VII',
			// 						'08' => 'VIII',
			// 						'09' => 'IX',
			// 						'10' => 'X',
			// 						'11' => 'XI',
			// 						'12' => 'XII'
			// );
			// // var_dump($bulan_romawi['01']);

			// $nama_kelas = $this->db->query("SELECT name_class FROM class WHERE id_class =".$klasifikasi)->result_array();
			// // var_dump($nama_kelas);
			// // var_dump($nama_kelas[0]['name_class']);
			// $code_letter = "/".$nama_kelas[0]['name_class']."/IS/".$bulan_romawi[date('m')]."/".date("Y");

		$where = array(
					'id' => $id_inbox
					);

		$data_masuk	= array('no_letter'   => $no_letter,
							'date_letter' => $tanggal,
							'sender_id'   => $penerima,
							'subject' 	  => $perihal,
							// 'code_letter' => $code_letter
							
								);


	 		$this->db->where($where);
			$this->db->update('inbox',$data_masuk);

			//var_dump($this->db->last_query());exit;
			// $kondisi = array('id_class' => $id_klasifikasi);
			// $data['klasifikasi'] = $this->db->get_where('class',$kondisi)->result_array();
			redirect (base_url('inbox/index'));
	}


	public function hapus()
	{
		if ($this->input->post() != null) {
			$id_hapus = $this->input->post('id_hapus');

			$where = array('id'=>$id_hapus);
			$this->db->delete('inbox',$where);
			redirect(base_url('inbox'));
		}
	}
}
?>

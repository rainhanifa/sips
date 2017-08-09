<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outbox extends CI_Controller {
		
	var $table = "outbox";
		
	public function index()
	{
		$data['outbox'] = $this->db->get("outbox")->result_array();


		$this->load->view('template/header.php');
		$this->load->view('outbox/v_outbox.php',$data);
		$this->load->view('template/footer.php');
	}

	public function tambah()
	{
		
		$pilih['class']=$this->db->get('class')->result();

		if (isset($_POST['submit'])) {
			$tanggal  	  	= date('Y-m-d', strtotime($this->input->post('date')));			
			$penerima 	  	= $this->input->post('recipient_id');
			$perihal  	  	= $this->input->post('subject');
			$klasifikasi  	  = $this->input->post('klasifikasi');
			

			$no_letter = '';
			$no_letter = $this->db->query("SELECT Max(OUTBOX.no_letter)AS MAX From OUTBOX ")->result_array();
			// $no_letter = $no_letter + 1;

			$nomor = (int)$no_letter[0]["MAX"] +1;

			$bulan_romawi = array( 
									'01' => 'I',
									'02' => 'II',
									'03' => 'III',
									'04' => 'IV',
									'05' => 'V',
									'06' => 'VI',
									'07' => 'VII',
									'08' => 'VII',
									'09' => 'IX',
									'10' => 'X',
									'11' => 'xI',
									'12' => 'XII'
			);
			// var_dump($bulan_romawi['01']);

			$nama_kelas = $this->db->query("SELECT name_class FROM class WHERE id_class =".$klasifikasi)->result_array();
			// var_dump($nama_kelas);
			// var_dump($nama_kelas[0]['name_class']);
			$code_letter = "/".$nama_kelas[0]['name_class']."/IS/".$bulan_romawi[date('m')]."/".date("Y");
			// var_dump($code_letter);
			$surat_keluar = array(
									'date' 		   => $tanggal,
									'no_letter'    => $nomor,
									'code_letter'  => $code_letter,
									'recipient_id' => $penerima,
									// 'name_class' => $klasifikasi,
									'subject' 	   => $perihal
								  );
			
		//insert ke database
			if($this->db->insert($this->table, $surat_keluar)){
			// 	// kirim pesan berhasil
			 	$this->session->set_flashdata('message','<div class="alert alert-success">Berhasil menambah user!</div>');

			 	// redirect
				redirect(base_url("outbox"));
			 }
			 else{
			 	//kirim pesan error
			 	$this->session->set_flashdata('message','<div class="alert alert-danger">Gagal menambah user!</div>');
			 }
		}
		$this->load->view('template/header.php');
		$this->load->view('outbox/v_tambahoutbox.php',$pilih);
		$this->load->view('template/footer.php');
	}

	public function ubah()
	{
		$this->load->view('template/header.php');
		$this->load->view('outbox/v_ubahoutbox.php');
		$this->load->view('template/footer.php');
	}

	public function hapus()
	{
		if ($this->input->post() != null) {
			$id_hapus = $this->input->post('id_hapus');

			$where = array('no_letter'=>$id_hapus);
			$this->db->delete('outbox',$where);
			redirect(base_url('outbox'));
		}
	}
}
?>

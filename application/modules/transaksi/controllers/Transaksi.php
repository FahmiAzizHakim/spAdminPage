<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('id_user') == ''){
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$this->kegiatan();
	}

	function kegiatan()
	{
		$d['page'] = 'tr_kegiatan';
    	$d['title'] = 'Input Kegiatan';
    	$d['title_table'] = 'Input Kegiatan';
    	$d['strategi'] = $this->m_master->getListData('t_strategi_tbl')->result();
    	$d['owner'] = $this->m_master->getListOwner('m_user_tbl')->result();
    	$d['breadcrumbs'] = array('<li><a href="'.base_url('transaksi/kegiatan').'">'.$d['title'].'</a></li>');
    	$this->load->view('layout_app', $d);
	}

	function nilai()
	{
		$d['page'] = 'tr_nilai';
    	$d['title'] = 'Input Nilai Kegiatan';
    	$d['title_table'] = 'Input Kegiatan';
    	$d['rubrik'] = $this->m_master->getListData('t_rubrik_tbl')->result();
    	$d['kegiatan'] = $this->m_master->getListData('t_kegiatan_tbl')->result();
    	$d['siswa'] = $this->m_master->getSiswa()->result();
    	$d['breadcrumbs'] = array('<li><a href="'.base_url('transaksi/kegiatan').'">'.$d['title'].'</a></li>');
    	$this->load->view('layout_app', $d);
	}

	function simpan_data()
	{
		$id_strategi = $this->input->post('id_strategi');
		$id_owner = $this->input->post('id_owner');
		$jenjang = $this->input->post('jenjang');
		$tingkat = $this->input->post('tingkat');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$nm_kegiatan = $this->input->post('nm_kegiatan');
		$lokasi = $this->input->post('lokasi');
		$tahun_ajaran = $this->input->post('tahun_ajaran');
		$semester = $this->input->post('semester');
		$mapel = $this->input->post('mata_pelajaran');

		$table = 't_kegiatan_tbl';

		$data = array(
			'id_strategi' => $id_strategi,
			'id_owner' => $id_owner,
			'jenjang' => $jenjang,
			'tingkat' => $tingkat,
			'tgl_mulai' => substr($tgl_mulai, 6, 4).'-'.substr($tgl_mulai, 3, 2).'-'.substr($tgl_mulai, 0, 2),
			'tgl_selesai' => substr($tgl_selesai, 6, 4).'-'.substr($tgl_selesai, 3, 2).'-'.substr($tgl_selesai, 0, 2),
			'nm_kegiatan' => $nm_kegiatan,
			'lokasi' => $lokasi,
			'tahun_ajaran' => $tahun_ajaran,
			'semester' => $semester,
			'matapelajaran' => $mapel
			);

		$save = $this->m_master->save($table, $data);

		if(!$save){
			echo json_encode(array('status'=>'ok'));
		}else{
			echo json_encode(array('status'=>'fail'));
		}

	}

	function simpan_data_nilai()
	{
		$foto = $this->input->post('foto');
		$id_rubrik = $this->input->post('id_rubrik');
		$id_kegiatan = $this->input->post('id_kegiatan');
		$id_siswa = $this->input->post('id_siswa');
		$nilai = $this->input->post('nilai');
		$keterangan = $this->input->post('keterangan');
		$file_foto = '';

		if($foto){
			$id = $this->input->post('user_id');

	  		$config['upload_path']          = './assets/file_foto/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['allowed_size']         = 5120;
	 
			$this->load->library('upload', $config);
	 
			if (!$this->upload->do_upload('foto')){
				echo json_encode(array('status'=>'fail'));
			}else{
				$file_name = $this->upload->data('file_name');

			}
		}

		$file_foto = $file_name;

		$table = 't_nilaikegiatan_tbl';

		$data = array(
			'id_rubrik' => $id_rubrik,
			'id_kegiatan' => $id_kegiatan,
			'id_siswa' => $id_siswa,
			'nilai' => $nilai,
			'foto' => $file_foto,
			'keterangan' => $keterangan
			);

		$save = $this->m_master->save($table, $data);

		if(!$save){
			echo json_encode(array('status'=>'ok'));
		}else{
			echo json_encode(array('status'=>'fail'));
		}
	}

}

/* End of file transaksi.php */
/* Location: ./application/controllers/transaksi.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('id_user');
	}

	function upload_files()
	{
		$config['upload_path']   = './assets/file_galeri/';
		$config['allowed_types'] = '*';
		$this->load->library('upload',$config);

		if($this->upload->do_upload('berkas'))
		{
			$token=$this->input->post('token');
			$uri=$this->input->post('uri');

			if(($uri == 'input/surat_masuk/') or ($uri == 'input/surat_keluar/') or ($uri == 'cari/edit/surat_masuk') or ($uri == 'cari/edit/surat_keluar')){
				$table = 't_surat_file';
			}elseif(($uri == 'input/agenda/') or $uri == 'cari/edit/agenda'){
				$table = 't_agenda_file';
			}

			$file_name=$this->upload->data('file_name');
			$file_ext=$this->upload->data('file_ext');;
			$file_type=$this->upload->data('file_type');
			$file_size=$this->upload->data('file_size');
			$this->db->insert($table,array('file_name'=>$file_name,'file_ext'=>$file_ext,'file_size'=>$file_size,'file_type'=>$file_type,'token'=>$token,'user_id'=>$this->user_id));
		}
	}

	// Delete Image
	function delete()
	{
		$token=$this->input->post('token');
		$uri=$this->input->post('uri');

		if(($uri == 'input/surat_masuk') or ($uri == 'input/surat_keluar')){
			$table = 't_surat_file';
		}elseif($uri == 'input/agenda'){
			$table = 't_agenda_file';
		}

		$query=$this->db->get_where($table,array('token'=>$token));

		if($query->num_rows()>0){
			$data=$query->row();
			$file_name=$data->file_name;
				if(file_exists($file=FCPATH.'/assets/file_berkas/'.$file_name)){
				unlink($file);
			}
		}

		$this->db->delete($table,array('token'=>$token));
		echo json_encode(array('deleted'=>true));
	}
}

/* End of file upload.php */
/* Location: ./application/controllers/upload.php */
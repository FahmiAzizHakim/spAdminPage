<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('id_user') == ''){
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$this->aspek();
	}

	function aspek()
	{
		$d['page'] = 'master_aspek';
    	$d['title'] = 'Aspek';
    	$d['breadcrumbs'] = array('<li><a href="'.base_url('master/aspek').'">'.$d['title'].'</a></li>');
    	$this->load->view('layout_app', $d);
	}

	function kategori()
	{
		$d['page'] = 'master_kategori';
    	$d['title'] = 'Kategori';
    	$d['breadcrumbs'] = array('<li><a href="'.base_url('master/kategori').'">'.$d['title'].'</a></li>');
    	$d['aspek'] = $this->get_select('aspek');
    	$this->load->view('layout_app', $d);
	}

	function strategi()
	{
		$d['page'] = 'master_strategi';
    	$d['title'] = 'Strategi';
    	$d['breadcrumbs'] = array('<li><a href="'.base_url('master/strategi').'">'.$d['title'].'</a></li>');
    	$d['kategori'] = $this->get_select('kategori');
    	$this->load->view('layout_app', $d);
	}

	function rubrik()
	{
		$d['page'] = 'master_rubrik';
    	$d['title'] = 'Rubrik';
    	$d['breadcrumbs'] = array('<li><a href="'.base_url('master/rubrik').'">'.$d['title'].'</a></li>');
    	$d['strategi'] = $this->get_select('strategi');
    	$this->load->view('layout_app', $d);
	}

	function role()
	{
		$d['page'] = 'master_role';
    	$d['title'] = 'Role';
    	$d['breadcrumbs'] = array('<li><a href="'.base_url('master/role').'">'.$d['title'].'</a></li>');
    	$this->load->view('layout_app', $d);
	}

	function user()
	{
		$d['page'] = 'master_user';
    	$d['title'] = 'User';
    	$d['breadcrumbs'] = array('<li><a href="'.base_url('master/user').'">'.$d['title'].'</a></li>');
    	$d['role'] = $this->get_select('role');
    	$this->load->view('layout_app', $d);
	}

	function nilairubrik()
	{
		$d['page'] = 'master_nilairubrik';
    	$d['title'] = 'Nilai Rubrik';
    	$d['breadcrumbs'] = array('<li><a href="'.base_url('master/nilairubrik').'">'.$d['title'].'</a></li>');
    	$d['rubrik'] = $this->get_select('nilairubrik');
    	$this->load->view('layout_app', $d);
	}

	function siswa()
	{
		$d['page'] = 'master_siswa';
    	$d['title'] = 'Siswa';
    	$d['breadcrumbs'] = array('<li><a href="'.base_url('master/siswa').'">'.$d['title'].'</a></li>');
    	// $d['role'] = $this->get_select('role');
    	$this->load->view('layout_app', $d);
	}

	function mapel()
	{
		$d['page'] = 'master_mapel';
    	$d['title'] = 'Mata Pelajaran';
    	$d['breadcrumbs'] = array('<li><a href="'.base_url('master/mapel').'">'.$d['title'].'</a></li>');
    	$this->load->view('layout_app', $d);
	}

	function jenjang()
	{
		$d['page'] = 'master_jenjang';
    	$d['title'] = 'Jenjang';
    	$d['breadcrumbs'] = array('<li><a href="'.base_url('master/jenjang').'">'.$d['title'].'</a></li>');
    	$this->load->view('layout_app', $d);
	}

	function list_data($parameter) {
		// print_r($parameter);die();
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
        	if($parameter == 'aspek'){
        		$id = 'id_aspek';
        		$table = 'm_aspek_tbl';
        		$columns = array(
	            	array('db' => 'id_aspek', 'dt' => '1'),
	            	array('db' => 'kd_aspek', 'dt' => '2'),
	            	array('db' => 'nm_aspek', 'dt' => '3'),
	            	array('db' => 'keterangan', 'dt' => '4'),
	            	array(
	            		'db' => 'id_aspek', 
	            		'dt' => '99',
	            		'formatter' => function ($a) {
	            			return '
	            			<button class="btn btn-primary btn-flat btn-xs" onclick="showModal('.$a.')"><i class="fa fa-pencil-square-o"></i></button>
	            			<button class="btn btn-danger btn-flat btn-xs" onclick="hapus('.$a.')"><i class="fa fa-close"></i></button>
	            			';
	            		}
	            	)
	            );
        	}elseif($parameter == 'kategori'){
        		$id = 'id_kategori';
        		$table = 'm_kategori_tbl';
        		$columns = array(
	            	array('db' => 'id_kategori', 'dt' => '1'),
	            	array('db' => 'id_aspek',
	            		  'dt' => '2',
	            		  'formatter' => function($i){
	            		  	return get_instance()->get_code('aspek', $i);
	            		  }
	            	),
	            	array('db' => 'kd_kategori', 'dt' => '3'),
	            	array('db' => 'nm_kategori', 'dt' => '4'),
	            	array('db' => 'keterangan', 'dt' => '5'),
	            	array('db' => 'id_aspek', 'dt' => '6'),
	            	array(
	            		'db' => 'id_kategori', 
	            		'dt' => '99',
	            		'formatter' => function ($a) {
	            			return '
	            			<button class="btn btn-primary btn-flat btn-xs" onclick="showModal('.$a.')"><i class="fa fa-pencil-square-o"></i></button>
	            			<button class="btn btn-danger btn-flat btn-xs" onclick="hapus('.$a.')"><i class="fa fa-close"></i></button>
	            			';
	            		}
	            	)
	            );
        	}elseif($parameter == 'strategi'){
        		$id = 'id_strategi';
        		$table = 't_strategi_tbl';
        		$columns = array(
	            	array('db' => 'id_strategi', 'dt' => '1'),
	            	array('db' => 'id_kategori',
	            		  'dt' => '2',
	            		  'formatter' => function($i){
	            		  	return get_instance()->get_code('kategori', $i);
	            		  }
	            	),
	            	array('db' => 'kd_strategi', 'dt' => '3'),
	            	array('db' => 'nm_strategi', 'dt' => '4'),
	            	array('db' => 'keterangan', 'dt' => '5'),
	            	array(
	            		'db' => 'id_strategi', 
	            		'dt' => '99',
	            		'formatter' => function ($a) {
	            			return '
	            			<button class="btn btn-primary btn-flat btn-xs" onclick="showModal('.$a.')"><i class="fa fa-pencil-square-o"></i></button>
	            			<button class="btn btn-danger btn-flat btn-xs" onclick="hapus('.$a.')"><i class="fa fa-close"></i></button>
	            			';
	            		}
	            	)
	            );
        	}elseif($parameter == 'rubrik'){
        		$id = 'id_rubrik';
        		$table = 't_rubrik_tbl';
        		$columns = array(
	            	array('db' => 'id_rubrik', 'dt' => '1'),
	            	array('db' => 'id_strategi',
	            		  'dt' => '2',
	            		  'formatter' => function($i){
	            		  	return get_instance()->get_code('strategi', $i);
	            		  }
	            	),
	            	array('db' => 'nilai_minimal', 'dt' => '3'),
	            	array('db' => 'nilai_maksimal', 'dt' => '4'),
	            	array('db' => 'predikat', 'dt' => '5'),
	            	array('db' => 'narasi', 'dt' => '6'),
	            	array(
	            		'db' => 'id_rubrik', 
	            		'dt' => '99',
	            		'formatter' => function ($a) {
	            			return '
	            			<button class="btn btn-primary btn-flat btn-xs" onclick="showModal('.$a.')"><i class="fa fa-pencil-square-o"></i></button>
	            			<button class="btn btn-danger btn-flat btn-xs" onclick="hapus('.$a.')"><i class="fa fa-close"></i></button>
	            			';
	            		}
	            	)
	            );
        	}elseif($parameter == 'role'){
        		$id = 'id_role';
        		$table = 'm_role_tbl';
        		$columns = array(
	            	array('db' => 'id_role', 'dt' => '1'),
	            	array('db' => 'kd_role', 'dt' => '2'),
	            	array('db' => 'nm_role', 'dt' => '3'),
	            	array(
	            		'db' => 'id_role', 
	            		'dt' => '99',
	            		'formatter' => function ($a) {
	            			return '
	            			<button class="btn btn-primary btn-flat btn-xs" onclick="showModal('.$a.')"><i class="fa fa-pencil-square-o"></i></button>
	            			<button class="btn btn-danger btn-flat btn-xs" onclick="hapus('.$a.')"><i class="fa fa-close"></i></button>
	            			';
	            		}
	            	)
	            );
        	}elseif($parameter == 'user'){
        		$id = 'id_user';
        		$table = 'm_user_tbl';
        		$columns = array(
	            	array('db' => 'id_user', 'dt' => '1'),
	            	array('db' => 'user', 'dt' => '2'),
	            	array('db' => 'nama', 'dt' => '3'),
	            	array(	'db' => 'id_role',
	            			'dt' => '4',
	            			'formatter' => function($i){
	            		  		return get_instance()->get_code('role', $i);
	            		  	}
	            		 ),
	            	array('db' => 'gender', 'dt' => '5'),
	            	array('db' => 'no_hp', 'dt' => '6'),
	            	array('db' => 'email', 'dt' => '7'),
	            	array(
	            		'db' => 'id_user', 
	            		'dt' => '99',
	            		'formatter' => function ($a) {
	            			return '
	            			<button class="btn btn-primary btn-flat btn-xs" onclick="showModal('.$a.')"><i class="fa fa-pencil-square-o"></i></button>
	            			<button class="btn btn-danger btn-flat btn-xs" onclick="hapus('.$a.')"><i class="fa fa-close"></i></button>
	            			';
	            		}
	            	)
	            );
        	}elseif($parameter == 'siswa'){
        		$id = 'id_siswa';
        		$table = 'm_siswa_tbl';
        		$columns = array(
	            	array('db' => 'id_siswa', 'dt' => '1'),
	            	array('db' => 'id_owner', 'dt' => '2'),
	            	array('db' => 'nisn', 'dt' => '3'),
	            	array('db' => 'jenjang', 'dt' => '4'),
	            	array('db' => 'tingkat', 'dt' => '5'),
	            	array('db' => 'gender', 'dt' => '6'),
	            	array('db' => 'email', 'dt' => '7'),
	            	array('db' => 'tgl_lahir', 'dt' => '8'),
	            	array(
	            		'db' => 'id_siswa', 
	            		'dt' => '99',
	            		'formatter' => function ($a) {
	            			return '
	            			<button class="btn btn-primary btn-flat btn-xs" onclick="showModal('.$a.')"><i class="fa fa-pencil-square-o"></i></button>
	            			<button class="btn btn-danger btn-flat btn-xs" onclick="hapus('.$a.')"><i class="fa fa-close"></i></button>
	            			';
	            		}
	            	)
	            );
        	}elseif($parameter == 'nilairubrik'){
        		$id = 'id_nilairubrik';
        		$table = 'v_nilairubrik';
        		$columns = array(
	            	array('db' => 'id_nilairubrik', 'dt' => '1'),
	            	array('db' => 'narasi', 'dt' => '2'),
	            	array('db' => 'nilai', 'dt' => '3'),
	            	array('db' => 'indikasi', 'dt' => '4'),
	            	array(
	            		'db' => 'id_nilairubrik', 
	            		'dt' => '99',
	            		'formatter' => function ($a) {
	            			return '
	            			<button class="btn btn-primary btn-flat btn-xs" onclick="showModal('.$a.')"><i class="fa fa-pencil-square-o"></i></button>
	            			<button class="btn btn-danger btn-flat btn-xs" onclick="hapus('.$a.')"><i class="fa fa-close"></i></button>
	            			';
	            		}
	            	)
	            );
        	}elseif($parameter == 'mapel'){
        		$id = 'id_mapel';
        		$table = 'm_mapel_tbl';
        		$columns = array(
	            	array('db' => 'id_mapel', 'dt' => '1'),
	            	array('db' => 'nm_mapel', 'dt' => '2'),
	            	array('db' => 'aktif', 'dt' => '3'),
	            	array(
	            		'db' => 'id_mapel', 
	            		'dt' => '99',
	            		'formatter' => function ($a) {
	            			return '
	            			<button class="btn btn-primary btn-flat btn-xs" onclick="showModal('.$a.')"><i class="fa fa-pencil-square-o"></i></button>
	            			<button class="btn btn-danger btn-flat btn-xs" onclick="hapus('.$a.')"><i class="fa fa-close"></i></button>
	            			';
	            		}
	            	)
	            );
        	}elseif($parameter == 'jenjang'){
        		$id = 'id_jenjang';
        		$table = 'm_jenjang_tbl';
        		$columns = array(
	            	array('db' => 'id_jenjang', 'dt' => '1'),
	            	array('db' => 'nm_jenjang', 'dt' => '2'),
	            	array('db' => 'aktif', 'dt' => '3'),
	            	array(
	            		'db' => 'id_jenjang', 
	            		'dt' => '99',
	            		'formatter' => function ($a) {
	            			return '
	            			<button class="btn btn-primary btn-flat btn-xs" onclick="showModal('.$a.')"><i class="fa fa-pencil-square-o"></i></button>
	            			<button class="btn btn-danger btn-flat btn-xs" onclick="hapus('.$a.')"><i class="fa fa-close"></i></button>
	            			';
	            		}
	            	)
	            );
        	}elseif($parameter == 'kegiatan'){
        		$id = 'id_jenis_kegiatan';
        		$kolom = 'kegiatan';
        		$table = 'm_jenis_kegiatan';
        	}elseif($parameter == 'lokasi_berkas'){
        		$id = 'id_lokasifile';
        		$kolom = 'lokasi';
        		$table = 'm_lokasifile';
        	}
 
            // Table's primary key
            $primaryKey = $id;

            // SQL server connection information
            $sql_details = DB_default();
			
 			echo json_encode(
	            Datatables_ssp::complex($_GET, $sql_details, $table, $primaryKey, $columns, $whereAll = '')
	        );
        }
    }

    function saveMaster()
	{
		$data_store = $this->input->post('data_store');

		if($data_store == 'aspek'){
			$where = 'id_aspek';
			$data = array(
				'kd_aspek' => $this->input->post('kd_aspek'),
				'nm_aspek' => $this->input->post('nm_aspek'),
				'keterangan' => $this->input->post('keterangan')
				);
			$table = 'm_aspek_tbl';
		}elseif($data_store == 'kategori'){
        	$table = 'm_kategori_tbl';

        	$where = 'id_kategori';
        	$data = array(
				'kd_kategori' => $this->input->post('kd_kategori'),
				'nm_kategori' => $this->input->post('nm_kategori'),
				'id_aspek' => $this->input->post('id_aspek'),
				'keterangan' => $this->input->post('keterangan')
				);
        }elseif($data_store == 'strategi'){
        	$table = 't_strategi_tbl';
        	$where = 'id_strategi';
        	$data = array(
				'kd_strategi' => $this->input->post('kd_strategi'),
				'nm_strategi' => $this->input->post('nm_strategi'),
				'id_kategori' => $this->input->post('id_kategori'),
				'keterangan' => $this->input->post('keterangan')
				);
        }elseif($data_store == 'rubrik'){
        	$table = 't_rubrik_tbl';
        	$where = 'id_rubrik';
        	$data = array(
				'id_strategi' => $this->input->post('id_strategi'),
				'nilai_minimal' => $this->input->post('nilai_minimal'),
				'nilai_maksimal' => $this->input->post('nilai_maksimal'),
				'predikat' => $this->input->post('predikat'),
				'narasi' => $this->input->post('narasi'),
				'nilai_maksimal' => $this->input->post('nilai_maksimal')
				);
        }elseif($data_store == 'role'){
        	$table = 'm_role_tbl';
        	$where = 'id_role';
        	array(
				'kd_role' => $this->input->post('kd_role'),
				'nm_role' => $this->input->post('nm_role')
				);
        }elseif($data_store == 'user'){
        	$table = 'm_user_tbl';
        	$where = 'id_user';
        	$data = array(
				'user' => $this->input->post('user'),
				'nama' => $this->input->post('nama'),
				'id_role' => $this->input->post('id_role'),
				'gender' => $this->input->post('gender'),
				'motto' => $this->input->post('motto'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'email' => $this->input->post('email'),
				'pass' => sha1($this->input->post('pass'))
				);
        }elseif($data_store == 'siswa'){
        	$table = 'm_siswa_tbl';
        	$where = 'id_siswa';
        	$data = array(
				'id_owner' => $this->input->post('id_owner'),
				'nama' => $this->input->post('nama'),
				'nisn' => $this->input->post('nisn'),
				'jenjang' => $this->input->post('jenjang'),
				'tingkat' => $this->input->post('tingkat'),
				'alamat' => $this->input->post('alamat'),
				'motto' => $this->input->post('motto'),
				'email' => $this->input->post('email'),
				'gender' => $this->input->post('gender')
				);
        }elseif($data_store == 'nilairubrik'){
        	$table = 'm_nilairubrik_tbl';
        	$where = 'id_rubrik';
        	$data = array(
				'id_rubrik' => $this->input->post('id_rubrik'),
				'nilai' => $this->input->post('nilai'),
				'indikasi' => $this->input->post('indikasi')
				);
        }elseif($data_store == 'mapel'){
        	$table = 'm_mapel_tbl';
        	$where = 'id_mapel';
        	$data = array(
				'nm_mapel' => $this->input->post('nm_mapel'),
				);
        }elseif($data_store == 'jenjang'){
        	$table = 'm_jenjang_tbl';
        	$where = 'id_jenjang';
        	$data = array(
				'nm_jenjang' => $this->input->post('nm_jenjang'),
				);
        }

		if($this->input->post('id') && $this->input->post('id') != ''){
			$save = $this->m_master->update($where, $this->input->post('id'), $data, $table);
		}else{
			$save = $this->m_master->save($table, $data);
		}

		if(!$save){
			echo json_encode(array('status' => 'save_ok'));
		}else{
			echo json_encode(array('status' => 'fail'));
		}
	}

	function get_code($parameter, $id){
		if($parameter == 'aspek'){
        	$table = 'm_aspek_tbl';
        	$kolom = 'id_aspek';
        }elseif($parameter == 'kategori'){
        	$table = 'm_kategori_tbl';
        	$kolom = 'id_kategori';
        }elseif($parameter == 'strategi'){
        	$table = 't_strategi_tbl';
        	$kolom = 'id_strategi';
        }elseif($parameter == 'role'){
        	$table = 'm_role_tbl';
        	$kolom = 'id_role';
        }

        $get_count = $this->m_master->get($id, $kolom, $table)->num_rows();
        $get = $this->m_master->get($id, $kolom, $table)->row_array();
        if($parameter == 'aspek'){
        	return $get['kd_aspek'];
        }elseif($parameter == 'kategori'){
        	return $get['kd_kategori'];
        }elseif($parameter == 'strategi'){
        	return $get['kd_strategi'];
        }elseif($parameter == 'role'){
        	return $get['nm_role'];
        }

	}

	function get($parameter) 
    {
    	if($parameter == 'aspek'){
        	$table = 'm_aspek_tbl';
        	$kolom = 'id_aspek';
        }elseif($parameter == 'kategori'){
        	$table = 'm_kategori_tbl';
        	$kolom = 'id_kategori';
        }elseif($parameter == 'strategi'){
        	$table = 't_strategi_tbl';
        	$kolom = 'id_strategi';
        }elseif($parameter == 'rubrik'){
        	$table = 't_rubrik_tbl';
        	$kolom = 'id_rubrik';
        }elseif($parameter == 'role'){
        	$table = 'm_role_tbl';
        	$kolom = 'id_role';
        }elseif($parameter == 'user'){
        	$table = 'm_user_tbl';
        	$kolom = 'id_user';
        }elseif($parameter == 'siswa'){
        	$table = 'm_siswa_tbl';
        	$kolom = 'id_siswa';
        }elseif($parameter == 'nilairubrik'){
        	$table = 'v_nilairubrik';
        	$kolom = 'id_nilairubrik';
        }elseif($parameter == 'mapel'){
        	$table = 'm_mapel_tbl';
        	$kolom = 'id_mapel';
        }elseif($parameter == 'jenjang'){
        	$table = 'm_jenjang_tbl';
        	$kolom = 'id_jenjang';
        }

        $id = $this->input->post('id');

        $get_count = $this->m_master->get($id, $kolom, $table)->num_rows();
        if($get_count > 0){
        	$get = $this->m_master->get($id, $kolom, $table)->row_array();
        	// echo "$get";die();
        	if($parameter == 'aspek'){
				echo json_encode(
					array(
						'status' => 'ok',
						'id' => 'aspek',
						'd1' => $get['kd_aspek'],
						'd2' => $get['nm_aspek'],
						'd3' => $get['keterangan'],
						'd4' => $id
						)
					);
        	}elseif($parameter == 'kategori'){
				echo json_encode(
					array(
						'status' => 'ok',
						'id' => 'kategori',
						'd1' => $get['kd_kategori'],
						'd2' => $get['nm_kategori'],
						'd3' => $get['keterangan'],
						'd5' => $get['id_aspek'],
						'd4' => $id
						)
					);
        	}elseif($parameter == 'strategi'){
				echo json_encode(
					array(
						'status' => 'ok',
						'id' => 'strategi',
						'd1' => $get['kd_strategi'],
						'd2' => $get['nm_strategi'],
						'd3' => $get['keterangan'],
						'd4' => $get['id_kategori'],
						'd5' => $id
						)
					);
        	}elseif($parameter == 'rubrik'){
				echo json_encode(
					array(
						'status' => 'ok',
						'id' => 'rubrik',
						'd1' => $get['id_rubrik'],
						'd2' => $get['nilai_minimal'],
						'd3' => $get['nilai_maksimal'],
						'd4' => $get['predikat'],
						'd5' => $get['narasi'],
						'd6' => $get['id_strategi'],
						'd7' => $id
						)
					);
        	}elseif($parameter == 'role'){
				echo json_encode(
					array(
						'status' => 'ok',
						'id' => 'role',
						'd1' => $get['id_role'],
						'd2' => $get['kd_role'],
						'd3' => $get['nm_role'],
						'd4' => $id
						)
					);
        	}elseif($parameter == 'user'){
				echo json_encode(
					array(
						'status' => 'ok',
						'id' => 'user',
						'd1' => $get['id_user'],
						'd2' => $get['user'],
						'd3' => $get['nama'],
						'd4' => $get['id_role'],
						'd5' => $get['gender'],
						'd6' => $get['motto'],
						'd7' => $get['alamat'],
						'd8' => $get['no_hp'],
						'd9' => $get['email'],
						'd10' => $id
						)
					);
        	}elseif($parameter == 'siswa'){
				echo json_encode(
					array(
						'status' => 'ok',
						'id' => 'user',
						'd1' => $get['id_siswa'],
						'd2' => $get['id_owner'],
						'd3' => $get['nisn'],
						'd4' => $get['jenjang'],
						'd5' => $get['tingkat'],
						'd6' => $get['gender'],
						'd7' => $get['motto'],
						'd8' => $get['alamat'],
						'd9' => $get['email'],
						'd10' => $id
						)
					);
        	}elseif($parameter == 'nilairubrik'){
				echo json_encode(
					array(
						'status' => 'ok',
						'id' => 'nilairubrik',
						'd1' => $get['id_rubrik'],
						'd99' => $get['narasi'],
						'd2' => $get['nilai'],
						'd3' => $get['indikasi'],
						'd4' => $id
						)
					);
        	}elseif($parameter == 'mapel'){
				echo json_encode(
					array(
						'status' => 'ok',
						'id' => 'mapel',
						'd1' => $get['nm_mapel'],
						'd4' => $id
						)
					);
        	}elseif($parameter == 'jenjang'){
				echo json_encode(
					array(
						'status' => 'ok',
						'id' => 'jenjang',
						'd1' => $get['nm_jenjang'],
						'd4' => $id
						)
					);
        	}else{
				echo json_encode(array('status' => 'fail'));
			}
		}
    }

    function get_select($parameter) 
    {
    	if($parameter == 'aspek'){
        	$table = 'm_aspek_tbl';
        	$kolom = 'id_aspek';
        }elseif($parameter == 'kategori'){
        	$table = 'm_kategori_tbl';
        	$kolom = 'id_kategori';
        }elseif($parameter == 'strategi'){
        	$table = 't_strategi_tbl';
        	$kolom = 'id_strategi';
        }elseif($parameter == 'rubrik'){
        	$table = 't_rubrik_tbl';
        	$kolom = 'id_rubrik';
        }elseif($parameter == 'role'){
        	$table = 'm_role_tbl';
        	$kolom = 'id_role';
        }elseif($parameter == 'user'){
        	$table = 'm_user_tbl';
        	$kolom = 'id_user';
        }elseif($parameter == 'nilairubrik'){
        	$table = 'm_rubrik_tbl';
        	$kolom = 'id_rubrik';
        }

        $id = $this->input->post('id');

        $get_count = $this->m_master->get_select($table)->num_rows();
        if($get_count > 0){
        	$get = $this->m_master->get_select($table)->result_array();
        	// echo "$get";die();
        	return $get;
        	
		}
    }

    function del($parameter) 
    {
        $id = $this->input->post('id');

    	if($parameter == 'aspek'){
        	$table = 'm_aspek_tbl';
        	$kolom = 'id_aspek';
        }elseif($parameter == 'kategori'){
        	$table = 'm_kategori_tbl';
        	$kolom = 'id_kategori';
        }elseif($parameter == 'strategi'){
        	$table = 't_strategi_tbl';
        	$kolom = 'id_strategi';
        }elseif($parameter == 'rubrik'){
        	$table = 't_rubrik_tbl';
        	$kolom = 'id_rubrik';
        }elseif($parameter == 'role'){
        	$table = 'm_role_tbl';
        	$kolom = 'id_role';
        }elseif($parameter == 'user'){
        	$table = 'm_user_tbl';
        	$kolom = 'id_user';
        }elseif($parameter == 'siswa'){
        	$table = 'm_siswa_tbl';
        	$kolom = 'id_siswa';
        }elseif($parameter == 'nilairubrik'){
        	$table = 'm_nilairubrik_tbl';
        	$kolom = 'id_nilairubrik';
        }elseif($parameter == 'mapel'){
        	$table = 'm_mapel_tbl';
        	$kolom = 'id_mapel';
        }elseif($parameter == 'jenjang'){
        	$table = 'm_jenjang_tbl';
        	$kolom = 'id_jenjang';
        }
/*
        	if(($parameter == 'surat_masuk') or ($parameter == 'surat_keluar') or ($parameter == 'agenda') or ($parameter == 'tamu')){
        		$delFile = $this->m_master->getFile($parameter, $field, $tableFile, $kolom, $id)->result();
        		if(($parameter == 'surat_masuk') or ($parameter == 'surat_keluar') or ($parameter == 'agenda')){
                    foreach($delFile as $df){
                        if($pathberkas.$df->file_name){
                            unlink($pathberkas.$df->file_name);
                        }
                    }
                }else{
                    foreach($delFile as $df){
                        if($pathberkas1.$df->file_identitas){
                            unlink($pathberkas1.$df->file_identitas);
                        }
                        
                        if($pathberkas2.$df->file_foto){
                            unlink($pathberkas2.$df->file_foto);
                        }
                    }
                }
        	}*/

        $del = $this->m_master->del($id, $kolom, $table);
        if(!$del){
			echo json_encode(array('status' => 'del_ok'));
		}else{
			echo json_encode(array('status' => 'fail'));
		}
    }
}

/* End of file maste.php */
/* Location: ./application/controllers/maste.php */
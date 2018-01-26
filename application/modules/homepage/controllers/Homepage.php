<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		// print_r($$this->session->userdata('user_id'));
		if($this->session->userdata('user_id') == ''){
			redirect('login');
		}
		$this->load->model('m_master');
        $this->set_menugroup('agen');
	}

	public function index()
	{
		// $d['page'] = 'assess_index';
    	// $d['title'] = 'Beranda';
    	// $d['breadcrumbs'] = array();
    	// $d['active'] = 'active';
    	$data = $this->m_master->getListData('m_agen_tbl')->result_array();
    	$this->templates->assign( 'data', $data);
    	$this->layout('index', 'Beranda');
	}

	public function entri_agen()
	{
		$data = $this->m_master->getListData('m_agen_tbl')->result_array();
		// print_r($data);die();
    	$title = 'Entri Agen Baru';
    	$this->templates->assign( 'data', $data);
    	$this->layout('agen_entri', $title);
	}

	public function edit_agen()
	{	
		$param = $this->input->post('agen_id');
		$agen = $this->m_master->get($param, 'agen_id', 'm_agen_tbl')->row_array();
		// print_r($agen);die();
		$data = $this->m_master->getListData('m_agen_tbl')->result_array();
		// print_r($data);die();
    	$title = 'Entri Agen Baru';
    	$this->templates->assign( 'data', $data);
    	$this->templates->assign( 'agen', $agen);
    	$this->layout('agen_edit', $title);
	}

	public function save()
	{	
		$data = $this->input->post();
		$seq =  $this->m_master->getSequence();

		if($data['action'] == 'create'){
			$data['agen_id'] = substr($data['agen_join_date'], 2,2) . substr($data['agen_join_date'], 5,2) . str_pad($seq['id_seq']+1,4,"0",STR_PAD_LEFT);
			unset($data['action']);
			$save = $this->m_master->save('m_agen_tbl', $data);
		}else{
			unset($data['action']);
			$save = $this->m_master->update('agen_id', $data['agen_id'], $data, 'm_agen_tbl');
		}
		redirect('homepage/index','refresh');
	}

	public function test_petunjuk()
	{
		$kodetest = $this->uri->segment(3);
    	$title0 = 'Ikuti Psikotest';
		$title = 'Petunjuk Test &minus; '.$kodetest;
		$breadcrumbs[0] = array('url'=>'{$base_url}assessment/psikotest', 'text'=>$title0);
		$breadcrumbs[1] = array('url'=>'{$base_url}assessment/test_petunjuk/'.$kodetest, 'text'=>$title);
		$this->templates->assign("kodetest", $kodetest);
		$this->layout('petunjuk', $title, $breadcrumbs);
	}

	public function mulai_test()
	{
		$kodetest = $this->uri->segment(3);
    	$title0 = 'Ikuti Psikotest';
    	$title = 'Ikuti Psikotest &minus; '.$kodetest;
		$breadcrumbs[0] = array('url'=>'{$base_url}assessment/psikotest', 'text'=>$title0);
		$breadcrumbs[1] = array('url'=>'{$base_url}assessment/test_petunjuk/'.$kodetest, 'text'=>'Petunjuk Test &minus; '. $kodetest);
		$breadcrumbs[2] = array('url'=>'{$base_url}assessment/mulai_test/'.$kodetest, 'text'=>$title);
		$this->templates->assign("kodetest", $kodetest);
		$this->layout('test', $title, $breadcrumbs);
	}

	public function hasil()
	{
		$d['page'] = 'assess_hasil';
    	$d['title'] = 'Lihat Hasil';
    	$d['breadcrumbs'] = array('<li><a href="<?php echo base_url(\'assessment/hasil\');?>">'.$d['title'].'</a></li>');
    	$this->load->view('layout_member', $d);
	}

	public function getJson(){
		$param = $this->input->post('agen_id');
		$agen = $this->m_master->get($param, 'agen_id', 'm_agen_tbl')->row_array();

		echo json_encode($agen);
	}

	public function cekWebName(){
		$param = $this->input->post('agen_initial_name');
		$agen = $this->m_master->get($param, 'agen_initial_name', 'm_agen_tbl')->row_array();
		print_r($agen);

		echo json_encode($agen);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
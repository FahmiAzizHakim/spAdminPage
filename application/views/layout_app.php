<?php $this->load->view('head'); ?>

<body class="hold-transition skin-purple-light fixed sidebar-mini">
  <div class="wrapper">

<?php 
$this->load->view('nav');
$this->load->view('sidebar');
?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

<?php //$this->load->view('breadcrumbs'); ?>

<?php
$this->load->view('content_header');
?>
		<!-- Main content -->
    	<section class="content">

<?php
if($page == 'home'){
	$this->load->view('home');
}

elseif($page == 'contact'){
  $this->load->view('contact/index');
}elseif($page == 'contact_add'){
  $this->load->view('contact/add');
}elseif($page == 'contact_edit'){
  $this->load->view('contact/edit');
}

elseif($page == 'master_role') {
  $this->load->view('role/index');
}elseif($page == 'master_roleadd'){
  $this->load->view('role/add');
}elseif($page == 'master_roleedit'){
  $this->load->view('role/edit');
}elseif($page == 'master_unit'){
  $this->load->view('unit/index');
}elseif($page == 'master_unitadd'){
  $this->load->view('unit/add');
}elseif($page == 'master_unitedit'){
  $this->load->view('unit/edit');
}elseif($page == 'master_profesi'){
  $this->load->view('profesi/index');
}elseif($page == 'master_profesiadd'){
  $this->load->view('profesi/add');
}elseif($page == 'master_profesiedit'){
  $this->load->view('profesi/edit');
}elseif($page == 'master_user'){
  $this->load->view('user/index');
}elseif($page == 'master_useradd'){
  $this->load->view('user/add');
}elseif($page == 'master_useredit'){
  $this->load->view('user/edit');
}elseif($page == 'master_akses'){
  $this->load->view('akses/index');
}elseif($page == 'master_aksesedit'){
  $this->load->view('akses/edit');
}

elseif($page == 'contact_group'){
	$this->load->view('contact_group/index');
}elseif($page == 'contact_group_add'){
  $this->load->view('contact_group/add');
}elseif($page == 'contact_group_lihat'){
  $this->load->view('contact_group/lihat');
}elseif($page == 'contact_group_edit'){
  $this->load->view('contact_group/edit');
}

elseif($page == 'template'){
  $this->load->view('template/index');
}elseif($page == 'template_add'){
  $this->load->view('template/add');
}elseif($page == 'template_edit'){
  $this->load->view('template/edit');
}

elseif($page == 'sms_cepat'){
  $this->load->view('sms_cepat/index');
}elseif($page == 'sms_massal'){
  $this->load->view('sms_massal/index');
}elseif($page == 'sms_history'){
  $this->load->view('sms_history/index');
}

elseif($page == 'profil'){
  $this->load->view('users/profil');
}elseif($page == 'password'){
  $this->load->view('users/password');
}
?>
		</section>
    	<!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

<?php 
$this->load->view('footer_credit');
//$this->load->view('switcher');
$this->load->view('footer');
?>

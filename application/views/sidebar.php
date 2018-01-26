<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>img/<?php echo $gambar ;?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Iqbal Wahyudi</p>
          <small>Member</small>
        </div>
      </div>
      <!-- search form -->
      <!--
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php
      $uri1 = $this->uri->segment('1');
      $uri2 = $this->uri->segment('2');
      $uri3 = $uri1.'/'.$uri2;
      if($uri1 == 'assessment'){
        $active1 = 'active';
      }else{
        $active1 = '';
      }
      ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php echo $active1;?>">
          <a href="<?php echo base_url('home');?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
      <?php
      $this->db->order_by('urutan', 'ASC');
      $menu = $this->db->get_where('m_menu', array('id_user' => $user_id, 'aktif_akses' => 'Y'))->result();
      foreach($menu as $m){
      if($uri1 == $m->controller){
        $active = 'active';
      }else{
        $active = '';
      }

      if($m->class_sm == '1'){
        $treeview = 'treeview';
      }else{
        $treeview = '';
      }
      ?>

        <li class="<?php echo $active.' '.$treeview;?>">
          <a href="<?php echo base_url().$m->controller;?>">
            <i class="fa fa-<?php echo $m->icon;?>"></i> <span><?php echo $m->menu;?></span>
            <?php 
            if($m->class_sm == '1'){
            ?>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <?php } ?>
          </a>
          <ul class="treeview-menu">
          <?php
          $this->db->order_by('urutan', 'ASC');
          $submenu = $this->db->get_where('m_sub_menu', array('id_menu' => $m->id_menu))->result();
          foreach($submenu as $sm){
          if($uri3 == $sm->controller){
            $active2 = 'active';
          }else{
            $active2 = '';
          }
          ?>
            <li class="<?php echo $active2;?>"><a href="<?php echo base_url().$sm->controller;?>"><i class="fa fa-<?php echo $sm->icon;?>"></i> <?php echo $sm->sub_menu;?></a></li>
          <?php
          }
          ?>
          </ul>
        </li>

      <?php
      }
      ?>
        <li>
          <a href="<?php echo base_url('login/logout');?>">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
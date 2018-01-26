<?php
/* Smarty version 3.1.30, created on 2018-01-05 00:58:00
  from "/home/u2184635/public_html/adminPage/application/views/nav_top.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4ecd986e7455_46591243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a27f755ebc31a3f3fea926d912d8080b71710e07' => 
    array (
      0 => '/home/u2184635/public_html/adminPage/application/views/nav_top.tpl',
      1 => 1515002352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4ecd986e7455_46591243 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
homepage" class="navbar-brand"><b>SecureProperty.co.id</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav"> 
            <!-- <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
homepage">Beranda</a></li> -->
            <li class="dropdown <?php if ($_smarty_tpl->tpl_vars['menu_group']->value == 'agen') {?>active<?php }?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Agen<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
homepage">List Agen</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
homepage/entri_agen">Daftar Agen</a></li>
                <li><a href="#">Konfirmasi Agen</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Content<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
homepage">List Agen</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
homepage/entri_agen">Daftar Agen</a></li> -->
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Listing<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
homepage">List Agen</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
homepage/entri_agen">Daftar Agen</a></li> -->
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
homepage">List Agen</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
homepage/entri_agen">Daftar Agen</a></li> -->
              </ul>
            </li>
            <li><a href="#">Entri User</a></li>
          </ul>
          <!-- <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form> -->
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks Menu -->
            
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
img/man.png" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['session_name']->value;?>
</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
img/man.png" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $_smarty_tpl->tpl_vars['session_name']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['session_role']->value;?>

                    <!-- <small>Member sejak Nov. 2012</small> -->
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <<!-- div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div> -->
                  <div class="pull-right">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login/logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        
        <!-- /.navbar-custom-menu -->
      </div>

      <!-- /.container-fluid -->
    </nav>
  </header><?php }
}

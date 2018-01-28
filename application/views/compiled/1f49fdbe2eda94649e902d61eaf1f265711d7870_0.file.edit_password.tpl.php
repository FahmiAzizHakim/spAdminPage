<?php
/* Smarty version 3.1.30, created on 2018-01-26 10:31:09
  from "C:\xampp\htdocs\spAdminPage\application\modules\user\views\edit_password.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6af55ddd6314_31726715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f49fdbe2eda94649e902d61eaf1f265711d7870' => 
    array (
      0 => 'C:\\xampp\\htdocs\\spAdminPage\\application\\modules\\user\\views\\edit_password.tpl',
      1 => 1516959066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6af55ddd6314_31726715 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-md-12">
        <div class="box box-success">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Mohon lengkapi profil Anda agar Anda mendapat <strong>kode ujian</strong> untuk Psikotest Online</h3>
            </div> -->
            <!-- /.box-header -->
            <form id="submiform" class="form-horizontal" method="post" action="save">
            <input type="hidden" name="action" value="create">
            <div class="box-body">
                <div class="form-group">
                  <label for="user_id" class="col-sm-2 control-label">User ID</label>
                  <div class="col-sm-8">
                    <input type="text" name="user_id" class="form-control" id="user_id" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="user_name" class="col-sm-2 control-label">User Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="user_name" class="form-control" id="user_name" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" name="password" class="form-control" id="password" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="password2" class="col-sm-2 control-label">Konfirmasi Password</label>
                  <div class="col-sm-8">
                    <input type="password" name="password2" class="form-control" id="password2" required>
                  </div>
                </div>
                
            </div>

            <div class="box-footer">
              <input type="hidden" name="agen_uplink2" id="agen_uplink2">
              <input type="submit" id="btnSubmit" class="btn btn-primary pull-right" value="Simpan">
            </div>
            </form>
            <!-- /.box-body -->
      </div>
  </div>
</div>
<?php }
}

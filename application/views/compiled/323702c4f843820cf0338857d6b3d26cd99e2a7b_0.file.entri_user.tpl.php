<?php
/* Smarty version 3.1.30, created on 2018-01-26 10:17:15
  from "C:\xampp\htdocs\spAdminPage\application\modules\user\views\entri_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6af21b86b797_42463290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '323702c4f843820cf0338857d6b3d26cd99e2a7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\spAdminPage\\application\\modules\\user\\views\\entri_user.tpl',
      1 => 1516958228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6af21b86b797_42463290 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Agen</h3>
            </div>
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>User Name</th>
                  <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
</td>
                  <td><form method="post" action="user/edit_password">
                      <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
" name="user_id" /><input type="submit" class="btn btn-info" value="Edit Password">&nbsp;</form></td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </tbody>
              <tfoot>
                <tr>
                  <th>User ID</th>
                  <th>User Name</th>
                  <th>Action</th>
                  </tr>
              </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<?php echo '<script'; ?>
>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
<?php echo '</script'; ?>
><?php }
}

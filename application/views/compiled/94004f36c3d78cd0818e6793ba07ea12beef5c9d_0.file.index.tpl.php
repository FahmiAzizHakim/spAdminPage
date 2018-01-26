<?php
/* Smarty version 3.1.30, created on 2018-01-04 18:31:43
  from "D:\www\securepropertyv2\application\modules\homepage\views\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4e64ff374385_01609241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94004f36c3d78cd0818e6793ba07ea12beef5c9d' => 
    array (
      0 => 'D:\\www\\securepropertyv2\\application\\modules\\homepage\\views\\index.tpl',
      1 => 1514941777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4e64ff374385_01609241 (Smarty_Internal_Template $_smarty_tpl) {
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
                  <th>Nama</th>
                  <th>ID</th>
                  <th>Jenis Kelamin</th>
                  <th>No. Telepon</th>
                  <th>Upline</th>
                  <th>Upline 2</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['agen_name'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['agen_id'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['agen_gender'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['agen_phone'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['agen_uplink'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['agen_uplink2'];?>
</td>
                  <td><form method="post" action="homepage/edit_agen">
                      <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['agen_id'];?>
" name="agen_id" /><input type="submit" class="btn btn-info" value="Edit">&nbsp;</form></td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </tbody>
              <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>ID</th>
                  <th>Jenis Kelamin</th>
                  <th>No. Telepon</th>
                  <th>Upline</th>
                  <th>Upline 2</th>
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

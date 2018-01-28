<?php
/* Smarty version 3.1.30, created on 2018-01-26 09:41:00
  from "C:\xampp\htdocs\spAdminPage\application\modules\login\views\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6ae99cab1819_49118576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f86225ce2e3a72843920f7b7d9e1ebfdf0734308' => 
    array (
      0 => 'C:\\xampp\\htdocs\\spAdminPage\\application\\modules\\login\\views\\login.tpl',
      1 => 1516955605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6ae99cab1819_49118576 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body class="hold-transition login-page" style="background :url(<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
img/bg.png) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; overflow-y: hidden;">
<div class="login-box"  style="margin-top: 20px;">
  <div class="login-logo">
    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><!-- <img src="<?php echo '<?php ';?>echo base_url();<?php echo '?>';?>img/logo.png" width="40%"> --></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="border: 1px solid #ddd">
    <h3 style="text-align: center;margin-top: -10px"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><b>SECURE PROPERTY<br>ADMIN PORTAL</b></a></h3>
    <hr>
    <form id="login" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login/cek_user" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          &nbsp;
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
  <br/>
  <br/>
  <br/>
  <p align="center">
    &copy; 2018 &minus; <a href="http://secureproperty.co.id/webInduk" target="blank" style="color:black;text-decoration: none">SecureProperty</a>
  </p>
</div>
<!-- /.login-box -->

<?php echo '<script'; ?>
 type="text/javascript">

  $(document).ready(function() {
    $(document).ajaxStart(function(){
     Pace.restart();
    });

    $("#login").submit(function(event){
      event.preventDefault();
      var url = $(this).attr("action");
      var method = $(this).attr("method");
      var data = $(this).serialize();

      $.ajax({
        url: url,
        type: method,
        data: data
      }).done(function(data){
        var d = $.parseJSON(data);
        if(d.cek == "0"){
          $("input[name=username]").val('');
          $("input[type=password]").val('');
          $(".login-box-body").notify("Kombinasi username dan password salah.",  {elementPosition:"bottom center", className: "error"});
        }else{
          
          window.location='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
homepage';
          
        }
      })
    });
  });

<?php echo '</script'; ?>
><?php }
}

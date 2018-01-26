<body class="hold-transition login-page" style="background :url(<?php echo base_url();?>img/bg.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; overflow-y: hidden;">
<div class="login-box"  style="margin-top: 12%;">
  <div class="login-logo">
    <a href="<?php echo base_url();?>"><!-- <img src="<?php echo base_url();?>img/logo.png" width="40%"> --></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="border: 1px solid #ddd">
    <h4 style="text-align: center;margin-top: -10px"><a href="<?php echo base_url();?>"><b>Morfosis<br/>(Manajemen Portofolio Siswa)</b></a></h4>
    <hr>
    <form id="login" action="<?php echo base_url('login/cek_user');?>" method="post">
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
    &copy; 2017 &minus; <a href="http://www.aneiqbal.com" target="blank" style="color:black;text-decoration: none">AneIqbal</a>
  </p>
</div>
<!-- /.login-box -->

<script type="text/javascript">
  $(document).ready(function() {
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
        var d = JSON.parse(data);
        if(d.cek == "0"){
          $("input[name=username]").val('');
          $("input[type=password]").val('');
          $(".login-box-body").notify("Kombinasi username dan password salah.",  {elementPosition:"bottom center", className: "error"});
        }else{
          window.location='<?php echo base_url("home");?>';
        }
      })
    });
  });
</script>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{$title} &minus; SecureProperty.co.id</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{$assets_url}adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{$assets_url}adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{$assets_url}adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="{$assets_url}adminlte/bower_components/datatables.net-bs/css/responsive.dataTables.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{$assets_url}adminlte/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{$assets_url}adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{$assets_url}adminlte/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{$assets_url}adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- jquery selec2 -->
    <link rel="stylesheet" href="{$assets_url}adminlte/bower_components/select2/dist/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{$assets_url}adminlte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="{$assets_url}adminlte/plugins/pace/pace.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{$assets_url}adminlte/dist/css/skins/_all-skins.min.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{$assets_url}adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- jQuery 3 -->
    <script src="{$assets_url}adminlte/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{$assets_url}adminlte/bower_components/jquery-ui/jquery-ui.min.js"></script>
  </head>

  <body class="hold-transition skin-purple layout-top-nav">
    <div class="wrapper">

      {include file=$nav_top}
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <div class="container">

          <section class="content-header">
            <h1>
            {$title}
            <small></small>
            </h1>

            {include file=$breadcrumbsfile}
          </section>

  		    <!-- Main content -->
         	<section class="content">
            {include file=$template}
  		    </section>
      	   <!-- /.content -->

        </div>
      </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <footer class="main-footer">
    <!--
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      -->
      <strong>SecureProperty.co.id</strong> &minus; Copyright &copy; 2017.
    </footer>

      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- jQuery 3 -->
    <script src="{$assets_url}adminlte/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{$assets_url}adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="{$assets_url}adminlte/bower_components/raphael/raphael.min.js"></script>
    <!--<script src="{$assets_url}adminlte/bower_components/morris.js/morris.min.js"></script>-->
    <!-- Sparkline -->
    <script src="{$assets_url}adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="{$assets_url}adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{$assets_url}adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{$assets_url}adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{$assets_url}adminlte/bower_components/moment/min/moment.min.js"></script>
    <script src="{$assets_url}adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="{$assets_url}adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="{$assets_url}adminlte/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- DataTables -->
    <script src="{$assets_url}adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{$assets_url}adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{$assets_url}adminlte/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{$assets_url}adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="{$assets_url}adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- notify.js -->
    <script src="{$assets_url}adminlte/bower_components/notify.js/notify.min.js"></script>
    <script src="{$assets_url}adminlte/bower_components/PACE/pace.min.js"></script>
    <!-- FastClick -->
    <script src="{$assets_url}adminlte/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="{$assets_url}adminlte/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{$assets_url}adminlte/dist/js/demo.js"></script>
    <script src="{$assets_url}adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".select2").select2();

        $(function(){
            $('.datepicker').datepicker({
              autoclose: true,
              format: 'yyyy-mm-dd'
          });
        });

      });
    </script>
  </body>
</html>

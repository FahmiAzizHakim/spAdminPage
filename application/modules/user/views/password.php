<div class="row">
  <div class="col-sm-12">
          <!-- Horizontal Form -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Ubah Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" id="submiform" action="<?php echo base_url('user/saving_password');?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="password_lama" class="col-sm-2 control-label">Password Lama</label>
                  <div class="col-sm-8">
                    <input type="password" name="password_lama" class="form-control" id="password_lama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password_baru" class="col-sm-2 control-label">Password Baru</label>
                  <div class="col-sm-8">
                    <input type="password" name="password_baru" class="form-control" id="password_baru">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password_confirm" class="col-sm-2 control-label">Konfirmasi Password</label>
                  <div class="col-sm-8">
                    <input type="password" name="password_confirm" class="form-control" id="password_confirm">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-warning btn-flat" name="button" value="simpan">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
  </div>
</div>
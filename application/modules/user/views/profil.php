<?php
$user_nama = $data[0]['user_nama'];
$user_name = $data[0]['user_name'];
$user_email = $data[0]['user_email'];
$user_pp = $data[0]['user_pict'];
$user_id = $data[0]['user_id'];

if(@getimagesize(base_url().'img/'.$user_pp) > 0){
   $gambar = $user_pp;
}else{
   $gambar = 'man.png';
}
?>

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-danger">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>img/<?php echo $gambar ;?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $user_name;?></h3>

              <p class="text-muted text-center"><?php echo $user_nama;?></p>

              <form action="<?php echo base_url('user/ganti_foto');?>" method="post" id="ganti_foto" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="file" accept="image/*" name="foto" class="form-control" id="foto">
                  </div>
                </div>
                <input type="hidden" name="user_id" value="<?php echo $data[0]['user_id'];?>">
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="submit" class="btn btn-warning btn-flat btn-block" value="Ganti Foto">
                  </div>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
        </div>

        <div class="col-md-9">
            <!-- Horizontal Form -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Informasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" id="submiform" action="<?php echo base_url('user/saving');?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="user_name" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-8">
                    <input type="text" name="user_name" class="form-control" id="user_name" value="<?php echo $data[0]['user_name'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="user_nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" name="user_nama" class="form-control" id="user_nama" value="<?php echo $data[0]['user_nama'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="user_email" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-8">
                    <input type="text" name="user_email" class="form-control" id="user_email" value="<?php echo $data[0]['user_email'];?>">
                  </div>
                </div>
              </div>

              <input type="hidden" name="user_id" value="<?php echo $data[0]['user_id'];?>">
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-warning pull-right btn-flat" name="button" value="update">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
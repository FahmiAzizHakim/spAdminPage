<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
            <form id="submiform" class="form-horizontal" method="post" action="<?php echo base_url('transaksi/simpan_data_nilai');?>" enctype="multipart/form-data" id="inputNilai">
              <div class="box-body">
                <div class="form-group">
                  <label for="tgl_bertamu" class="col-sm-2 control-label">Rubrik</label>
                  <div class="col-sm-8">
                    <select name="id_rubrik" class="form-control select2">
                      <option value="">Pilih</option>
                      <?php
                      foreach($rubrik as $r){
                      ?>
                        <option value="<?=$r->id_rubrik?>"><?=$r->narasi?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="jam_masuk" class="col-sm-2 control-label">Kegiatan</label>
                  <div class="col-sm-8">
                    <select name="id_kegiatan" class="form-control select2">
                      <option value="">Pilih</option>
                      <?php
                      foreach($kegiatan as $k){
                      ?>
                        <option value="<?=$k->id_kegiatan?>"><?=$k->nm_kegiatan?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>

                 <div class="form-group">
                  <label for="jam_masuk" class="col-sm-2 control-label">Siswa</label>
                  <div class="col-sm-8">
                    <select name="id_siswa" class="form-control select2">
                      <option value="">Pilih</option>
                      <?php
                      foreach($siswa as $s){
                      ?>
                        <option value="<?=$s->id_siswa?>"><?=$s->nama?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nilai" class="col-sm-2 control-label">Nilai</label>
                  <div class="col-sm-8">
                    <input type="text" name="nilai" class="form-control" id="nilai">
                  </div>
                </div>

              
                <div class="form-group">
                  <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-8">
                    <textarea name="keterangan" class="form-control" id="keterangan" rows="2"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="berkas" class="col-sm-2 control-label">Foto</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" name="foto">
                  </div>
                </div>

              <div class="box-footer">
                <button type="submit" id="btnSubmit" class="btn pull-right btn-primary btn-flat" name="button" value="simpan">Simpan</button>
              </div>
            </form>
        </div>
	</div>
</div>
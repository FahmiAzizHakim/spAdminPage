<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
            <form id="submiform" class="form-horizontal" method="post" action="<?php echo base_url('transaksi/simpan_data');?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="tgl_bertamu" class="col-sm-2 control-label">Strategi</label>
                  <div class="col-sm-8">
                    <select name="id_strategi" class="form-control select2">
                      <option value="">Pilih</option>
                      <?php
                      foreach($strategi as $s){
                      ?>
                        <option value="<?=$s->id_strategi?>"><?=$s->nm_strategi?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="jam_masuk" class="col-sm-2 control-label">Owner</label>
                  <div class="col-sm-8">
                    <select name="id_owner" class="form-control select2">
                      <option value="">Pilih</option>
                      <?php
                      foreach($owner as $o){
                      ?>
                        <option value="<?=$o->id_user?>"><?=$o->nama?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="jenjang" class="col-sm-2 control-label">Jenjang</label>
                  <div class="col-sm-8">
                    <input type="text" name="jenjang" class="form-control" id="jenjang">
                  </div>
                </div>

                <div class="form-group">
                  <label for="tingkat" class="col-sm-2 control-label">Tingkat</label>
                  <div class="col-sm-8">
                    <input type="text" name="tingkat" class="form-control" id="tingkat">
                  </div>
                </div>

                <div class="form-group">
                  <label for="tgl_mulai" class="col-sm-2 control-label">Tgl. Mulai</label>
                  <div class="col-sm-8">
                    <input type="text" name="tgl_mulai" class="form-control datepicker" id="tgl_mulai">
                  </div>
                </div>

                <div class="form-group">
                  <label for="tgl_selesai" class="col-sm-2 control-label">Tgl. Selesai</label>
                  <div class="col-sm-8">
                     <input type="text" name="tgl_selesai" class="form-control datepicker" id="tgl_selesai">
                  </div>
                </div>

                <div class="form-group">
                  <label for="nm_kegiatan" class="col-sm-2 control-label">Nama Kegiatan</label>
                  <div class="col-sm-8">
                    <input type="text" name="nm_kegiatan" class="form-control" id="nm_kegiatan">
                  </div>
                </div>

                <div class="form-group">
                  <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
                  <div class="col-sm-8">
                    <textarea name="lokasi" class="form-control" id="lokasi" rows="2"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tahun_ajaran" class="col-sm-2 control-label">Tahun Ajaran</label>
                  <div class="col-sm-8">
                    <input type="text" name="tahun_ajaran" class="form-control" id="tahun_ajaran">
                  </div>
                </div>

                <div class="form-group">
                  <label for="semester" class="col-sm-2 control-label">Semester</label>
                  <div class="col-sm-8">
                    <input type="text" name="semester" class="form-control" id="semester">
                  </div>
                </div>

                <div class="form-group">
                  <label for="mata_pelajaran" class="col-sm-2 control-label">Mata Pelajaran</label>
                  <div class="col-sm-8">
                    <input type="text" name="mata_pelajaran" class="form-control" id="mata_pelajaran">
                  </div>
                </div>

                <div class="form-group">
                  <label for="berkas" class="col-sm-2 control-label">Foto Kegiatan</label>
                  <div class="col-sm-8">
                    <div class="dropzone" id="dropzone">
                      <div class="dz-message">
                        <h3> Drag and Drop your files here Or Click here to upload</h3>
                      </div>
                    </div>
                  </div>
                </div>

              <div class="box-footer">
                <button type="submit" id="btnSubmit" class="btn pull-right btn-primary btn-flat" name="button" value="simpan">Simpan</button>
              </div>
            </form>
        </div>
	</div>
</div>
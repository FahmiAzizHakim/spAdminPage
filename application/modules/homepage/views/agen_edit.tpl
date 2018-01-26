<div class="row">
	<div class="col-md-12">
        <div class="box box-success">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Mohon lengkapi profil Anda agar Anda mendapat <strong>kode ujian</strong> untuk Psikotest Online</h3>
            </div> -->
            <!-- /.box-header -->
            <form id="submiform" class="form-horizontal" method="post" action="save">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="agen_id" id="agen_id">
            <div class="box-body">
                <div class="form-group">
                  <label for="agen_name" class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" name="agen_name" class="form-control" id="agen_name" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="agen_join_date" class="col-sm-2 control-label">Tanggal Bergabung</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control datepicker" name="agen_join_date" id="agen_join_date" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="agen_birthplace" class="col-sm-2 control-label">Tempat & Tgl. Lahir</label>
                  <div class="col-sm-3">
                      <input type="text" name="agen_birthplace" class="form-control" id="agen_birthplace">
                  </div>

                  <div class="col-sm-5">
                    <input type="text" name="agen_birthdate" id="agen_birthdate" class="form-control datepicker" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="agen_gender" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-8">
                      <select class="form-control" name="agen_gender" id="agen_gender" readonly>
                        <option></option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="agen_address" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <textarea name="agen_address" class="form-control" id="agen_address" required></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="agen_phone" class="col-sm-2 control-label">No. Telp/HP</label>
                  <div class="col-sm-8">
                    <input type="text" name="agen_phone" class="form-control" id="agen_phone" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="agen_email" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-8">
                    <input type="email" name="agen_email" class="form-control" id="agen_email" placeholder="email@mail.com">
                  </div>
                </div>

                <div class="form-group">
                  <label for="agen_uplink" class="col-sm-2 control-label">Upline</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="agen_uplink" id="agen_uplink" readonly>
                        <option></option>
                        {foreach from=$data item=row}
                          <option value="{$row.agen_id}">{$row.agen_name}</option>
                        {/foreach}
                      </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="agen_initial_name" class="col-sm-2 control-label">Web Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="agen_initial_name" class="form-control" id="agen_initial_name">
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
<script>
$(function(){
  $('#agen_name').val('{$agen.agen_name}');
  $('#agen_id').val('{$agen.agen_id}');
  $('#agen_address').val('{$agen.agen_address}');
  $('#agen_join_date').val('{$agen.agen_join_date}');
  $('#agen_gender').val('{$agen.agen_gender}');
  $('#agen_birthplace').val('{$agen.agen_birthplace}');
  $('#agen_birthdate').val('{$agen.agen_birthdate}');
  $('#agen_phone').val('{$agen.agen_phone}');
  $('#agen_email').val('{$agen.agen_email}');
  $('#agen_uplink').val('{$agen.agen_uplink}');
  $('#agen_uplink2').val('{$agen.agen_uplink2}');
  $('#agen_initial_name').val('{$agen.agen_initial_name}');
{literal}
  $('#btnSubmit').click(function(){
    if ($('#agen_initial_name').val().length >= 3) {
      $.ajax({
          type: "POST",
          url: "cekWebName",
          dataType: "json",
          data: {agen_initial_name : $('#agen_initial_name').val()},
          success: function(data) {
            if (data != "" && data != null && data != "NULL") {
              $('#agen_initial_name').val('');
              alert('Web Name Sudah digunakan');
              $('#agen_initial_name').focus();
              return false;
            }
          }
      });
    }
  });
});
{/literal}
</script>
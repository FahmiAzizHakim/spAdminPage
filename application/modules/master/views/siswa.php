<div class="row">
    <div class="col-md-12">
        <a href="#" class="btn btn-primary btn-block btn-flat" data-toggle="modal" data-target="#tambahSiswa" onclick="reset_value()"><i class="fa fa-plus"></i> Tambahkan</a>
        <br/>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-bordered table-hover display responsive nowrap" id="mytable" width="100%">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>ID. Owner</th>
                            <th>NISN</th>
                            <th>Jenjang</th>
                            <th>Tingkat</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Tanggal Lahir</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>

                <script type="text/javascript">
                    $(document).ready(function () {

                        $.fn.dataTableExt.oApi.fnPagingInfo = function (oSettings)
                        {
                            return {
                                "iStart": oSettings._iDisplayStart,
                                "iEnd": oSettings.fnDisplayEnd(),
                                "iLength": oSettings._iDisplayLength,
                                "iTotal": oSettings.fnRecordsTotal(),
                                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                                "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                                "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                            };
                        };

                        var t = $('#mytable').DataTable({
                            "processing": true,
                            "serverSide": true,
                            "ajax": "<?php echo base_url('master/list_data/'.$this->uri->segment(2)); ?>",
                            "columns": [
                                {
                                    "data": null,
                                    "class": "text-center",
                                    "orderable": false
                                },
                                {"data": "2"},
                                {"data": "3"},
                                {"data": "4"},
                                {"data": "5"},
                                {"data": "6"},
                                {"data": "7"},
                                {"data": "8"},
                                {"data": "99"}
                            ],
                            "order": [[2, 'asc']],
                            "aLengthMenu": [[10, 25, 50], [10, 25, 50]],
                            "iDisplayLength": 10,
                            "rowCallback": function (row, data, iDisplayIndex) {
                                var info = this.fnPagingInfo();
                                var page = info.iPage;
                                var length = info.iLength;
                                var index = page * length + (iDisplayIndex + 1);
                                $('td:eq(0)', row).html(index);
                            }
                        });

                    });
                </script>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="tambahSiswa" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Tambahkan Siswa Baru
                </h4>
            </div>


            <form action="<?=base_url('master/saveMaster')?>" method="post" id="updateform" class="form-horizontal" role="form">
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-sm-3">ID Owner</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="id_owner" name="id_owner">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">NISN</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nisn" name="nisn">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Jenjang</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="jenjang" name="jenjang">
                            <option value="SD">SD</option>
                            <option value="SMP">SD</option>
                            <option value="SMA" selected="selected">SMA</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Tingkat</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="tingkat" name="tingkat">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="gender" name="gender">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Motto</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="motto" name="motto">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Alamat</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="alamat" name="alamat"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                </div>
                <input type="hidden" name="data_store" value="<?=$this->uri->segment(2)?>">
                <input type="hidden" name="id" id="id">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
            </div>

            </form>
            
        </div>
    </div>
</div>
<script type="text/javascript">
    function reset_value(){
        $("#Siswa").val('');
        $("#nama").val('');
        $("#role").val('');
        $("#gender").val('');
        $("#motto").val('');
        $("#alamat").val('');
        $("#no_hp").val('');
        $("#email").val('');
        $("#id").val('');
    }
</script>
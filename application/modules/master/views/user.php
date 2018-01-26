<div class="row">
    <div class="col-md-12">
        <a href="#" class="btn btn-primary btn-block btn-flat" data-toggle="modal" data-target="#tambahUser" onclick="reset_value()"><i class="fa fa-plus"></i> Tambahkan</a>
        <br/>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-bordered table-hover display responsive nowrap" id="mytable" width="100%">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>User</th>
                            <th>Nama</th>
                            <th>Role</th>
                            <th>Jenis Kelamin</th>
                            <th>No. HP</th>
                            <th>Email</th>
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
<div class="modal fade" id="tambahUser" tabindex="-1" role="dialog" 
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
                    Tambahkan User Baru
                </h4>
            </div>


            <form action="<?=base_url('master/saveMaster')?>" method="post" id="updateform" class="form-horizontal" role="form">
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-sm-3">Kode User</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="user" name="user">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Nama User</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Role</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="id_role" name="id_role">
                        <?php
                            foreach ($role as $rows) {
                                echo "<option value='". $rows['id_role'] ."'>". $rows['nm_role'] ."</option>";
                            }
                        ?>
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
                    <label class="col-sm-3">No. HP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="no_hp" name="no_hp">
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
        $("#user").val('');
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
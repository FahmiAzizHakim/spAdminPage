<div class="row">
	<div class="col-md-12">
        <a href="#" class="btn btn-warning btn-block btn-flat" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambahkan</a>
        <br/>
		<div class="box box-danger">
            <div class="box-body">
    			<table class="table table-bordered table-hover display responsive nowrap" id="mytable" width="100%">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th><?=$title_table?></th>
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
                                {"data": "1"},
                                {"data": "2"}
                            ],
                            "order": [[1, 'asc']],
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

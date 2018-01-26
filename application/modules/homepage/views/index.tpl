<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Agen</h3>
            </div>
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>ID</th>
                  <th>Jenis Kelamin</th>
                  <th>No. Telepon</th>
                  <th>Upline</th>
                  <th>Upline 2</th>
                  <th>Web Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                {foreach from=$data item=row}
                <tr>
                  <td>{$row.agen_name}</td>
                  <td>{$row.agen_id}</td>
                  <td>{$row.agen_gender}</td>
                  <td>{$row.agen_phone}</td>
                  <td>{$row.agen_uplink}</td>
                  <td>{$row.agen_uplink2}</td>
                  <td>{$row.agen_initial_name}</td>
                  <td><form method="post" action="homepage/edit_agen">
                      <input type="hidden" value="{$row.agen_id}" name="agen_id" /><input type="submit" class="btn btn-info" value="Edit">&nbsp;</form></td>
                </tr>
                {/foreach}
              </tbody>
              <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>ID</th>
                  <th>Jenis Kelamin</th>
                  <th>No. Telepon</th>
                  <th>Upline</th>
                  <th>Upline 2</th>
                  <th>Action</th>
                </tr>
              </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
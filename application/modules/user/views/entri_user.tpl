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
                  <th>User ID</th>
                  <th>User Name</th>
                  <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                {foreach from=$user item=row}
                <tr>
                  <td>{$row.user_id}</td>
                  <td>{$row.user_name}</td>
                  <td><form method="post" action="user/edit_password">
                      <input type="hidden" value="{$row.user_id}" name="user_id" /><input type="submit" class="btn btn-info" value="Edit Password">&nbsp;</form></td>
                </tr>
                {/foreach}
              </tbody>
              <tfoot>
                <tr>
                  <th>User ID</th>
                  <th>User Name</th>
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
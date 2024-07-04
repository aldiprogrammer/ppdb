<style>
  td{
    font-weight: normal;
  }
</style>
<!-- Main content -->
<section class="content">


  <div class="row">
    <div class="col-md-12">

      <div class="box box-danger">
        <div class="box-header">
          <h3 class="box-title">  <i class="fa fa-user"></i> Data User</h3>


          <!-- Button trigger modal -->

          <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode user</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach($user as $data){ ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td>
                        <?= $data['kode_user'] ?>
                      </td>
                      <td><?= $data['email'] ?></td>
                      <td><?= $data['username'] ?></td>
                      <td>
                       <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalhapus<?= $data['id'] ?>">Hapus</button>
                       <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModaledit<?= $data['id'] ?>">Edit</button>
                     </td>
                   </tr>




                   <!-- Modal Hapus -->
                   <div class="modal fade" id="exampleModalhapus<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                          <h4>Apakah anda ingin menghapus data ini ?</h4>
                          <form method="post" action="<?= base_url('admin/hapus_user') ?>">
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">



                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  



                  <!-- Modal Edit -->
                  <div class="modal fade" id="exampleModaledit<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">


                          <form method="post" action="<?= base_url('admin/edit_user') ?>"  enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                            <div class="form-group">
                              <label>Kode user</label>
                              <input type="text" name="kode_user" value="<?= $data['kode_user'] ?>" readonly class="form-control" required>
                            </div>



                            <div class="form-group">
                              <label>Email</label>
                              <input type="email" name="email" value="<?= $data['email'] ?>"  required class="form-control">
                            </div>

                            <div class="form-group">
                              <label>Username</label>
                              <input type="text" name="username" value="<?= $data['username'] ?>"  required class="form-control">
                            </div>


                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- End Modal Edit -->
                <?php } ?>

              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kode user</th>
                  <th>Email</th>
                  <th>Username</th>

                  <th>Opsi</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </tbody>

    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->



</div>
</div>


</section>
<!-- /.content -->
</div>
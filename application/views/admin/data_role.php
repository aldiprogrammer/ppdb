
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
          <h3 class="box-title">  <i class="fa fa-user"></i> Data Role</h3>


        </div>
        <div class="box-body">
          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModaltambah">Tambah Role</button>


          <!-- Modal tambah -->
          <div class="modal fade" id="exampleModaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" action="<?= base_url('admin/add_role') ?>" enctype="multipart/form-data">

                    <div class="form-group">
                      <label>Kode role</label>
                      <input type="text" name="kode" value="<?= $kode ?>" class="form-control" required readonly>
                    </div>

                    <div class="form-group">
                      <label>Role</label>
                      <input type="text" name="role"  required class="form-control">
                    </div>



                    <div class="modal-footer">
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <hr>
          <!-- Button trigger modal -->

          <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode role</th>
                    <th>Role</th>

                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach($role as $data){ ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td>
                        <?= $data['kode_role'] ?>
                      </td>
                      <td><?= $data['role'] ?></td>

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
                          <form method="post" action="<?= base_url('admin/hapus_role') ?>">
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
                  
                  <!-- Modal Hapus -->



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


                          <form method="post" action="<?= base_url('admin/edit_role') ?>"  enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                            <div class="form-group">
                              <label>Kode role</label>
                              <input type="text" name="kode" value="<?= $data['kode_role'] ?>" class="form-control" required readonly>
                            </div>

                            <div class="form-group">
                              <label>Role</label>
                              <input type="text" name="role" value="<?= $data['role'] ?>"  required class="form-control">
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
                 <th>Kode role</th>
                 <th>Role</th>
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
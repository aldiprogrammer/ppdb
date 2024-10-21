
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
          <h3 class="box-title">  <i class="fa fa-user"></i> Data kecamatan</h3>


        </div>
        <div class="box-body">
          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModaltambah">Tambah kecamatan</button>


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
                  <form method="post" action="<?= base_url('admin/add_kec') ?>" enctype="multipart/form-data">
                   <div class="form-group">
                    <label>Kabupaten</label>
                    <select class="form-control" name="kab">
                      <option>-- Pilih kabupaten --</option>
                      <?php foreach ($kab as $data) {
                        ?>
                        <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" name="kec" required class="form-control">
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
          <nav>
           <p class="mb-4">Cari berdasarkan nama kecamatan </p>
           <form class="form-inline" method="post" action="<?= base_url('admin/kecamatan') ?>">
            <div class="row">

              <div class="col-sm-4 col-xs-6">
                <input class="form-control" required type="text" name="cari" placeholder="Search" aria-label="Search"  style="width: 100%;">

              </div>
              <div class="col-sm-4 col-xs-6">
                <button type="submit" class="btn btn-sm btn-success my-2 my-sm-0" type="submit">Search</button>
                <a href=""  class="btn btn-info btn-sm my-2 my-sm-0" type="submit">Refresh</a>
              </div>
            </div>


          </form>
        </nav>

        <br />
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Kabupaten</th>
                <th>Kecamatan</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1 ?>
              <?php foreach($kec as $data){ ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td>
                    <?php 

                    $kab = $this->db->get_where('tbl_kabupaten', ['id' => $data['regency_id']])->row_array();
                    echo $kab['name'];

                    ?>
                  </td>
                  <td>
                    <?= $data['name'] ?>
                  </td>

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
                      <form method="post" action="<?= base_url('admin/hapus_kec') ?>">
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


                      <form method="post" action="<?= base_url('admin/edit_kec') ?>"  enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">

                        <div class="form-group">
                          <label>Kabupaten</label>
                          <input type="text" name="kab" value="<?= $kab['name'] ?>" class="form-control" required readonly>
                        </div>

                        <div class="form-group">
                          <label>Kecamatan</label>
                          <input type="text" name="kec" value="<?= $data['name'] ?>" class="form-control" required>
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
              <th>Kabupaten</th>
              <th>Kecamatan</th>
              <th>Opsi</th>
            </tr>
          </tfoot>
        </table>

        <nav aria-label="Page navigation example">
          <ul class="pagination">
           <?php 
           echo $this->pagination->create_links();
           ?>
         </ul>
       </nav>
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
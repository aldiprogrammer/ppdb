
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
          <h3 class="box-title">  <i class="fa fa-user"></i> Data Calon Siswa</h3>


        </div>
        <div class="box-body">
          <!--   <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModaltambah">Tambah calon siswa</button> -->

          <a href="<?= base_url('admin/tambah_siswa_baru') ?>" class="btn btn-primary">Tambah calon siswa</a>


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
                  <form method="post" action="<?= base_url('admin/add_siswa') ?>" enctype="multipart/form-data">

                    <div class="form-group">
                      <label>Kode pendaftaran</label>
                      <input type="text" name="kode" value="<?= $kode ?>" class="form-control" required readonly>
                    </div>

                    <div class="form-group">
                      <label>Kode user</label>
                      <select class="form-control" name="kode_user" required>
                        <option value="">-- Pilih user --</option>
                        <?php foreach ($user as $data) { ?>
                          <option value="<?= $data['kode_user'] ?>"><?= $data['username'] ?></option>
                        <?php } ?>

                      </select>
                    </div>

                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" value="" name="nama"  required class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Jenis kelamin</label>
                      <select class="form-control" name="jk" required>
                        <option value="">-- Pilih jenis kelamin --</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Tempat lahir</label>
                      <textarea class="form-control" name="tempat_lahir" required></textarea>
                    </div>


                    <div class="form-group">
                      <label>Tanggal lahir</label>
                      <input type="date" name="tgl_lahir" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>No NIK</label>
                      <input type="number" maxlength="16" name="no_nik" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>Alamat siswa</label>
                      <textarea class="form-control" name="alamat" required></textarea>
                    </div>

                    <div class="form-group">
                      <label>Provinsi</label>
                      <select class="form-control" name="prov" required id="prov">
                        <option value="">-- Pilih provinsi --</option>
                        <?php foreach ($prov as $pr) { ?>
                          <option value="<?= $pr['id'] ?>"><?= $pr['name'] ?></option>
                        <?php } ?>

                      </select>
                    </div>


                    <div class="form-group">
                      <label>Kabupaten</label>
                      <select class="form-control" name="kab" required id="kab">
                        <option value="">-- Pilih kabupaten --</option>
                      </select>
                    </div>


                    <div class="form-group">
                      <label>Kecamatan</label>
                      <select class="form-control" name="kec" required id="kec">
                        <option value="">-- Pilih kecamatan --</option>
                      </select>
                    </div>


                    <div class="form-group">
                      <label>Kelurahan</label>
                      <select class="form-control" name="kel" required id="kel">
                        <option value="">-- Pilih kelurahan --</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Kode pos</label>
                      <input type="number" name="kode_pos" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>Agama</label>
                      <select class="form-control" name="agama" required>
                        <option value="">-- Pilih agama --</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Nama ayah</label>
                      <input type="text" name="nama_ayah" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>Nama ibu</label>
                      <input type="text" name="nama_ibu" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>Pekerjaan ayah</label>
                      <select class="form-control" name="pekerjaan_ayah" >
                        <option value="">-- Pilih pekerjaan --</option>
                        <option>PNS</option>
                        <option>Karyawan</option>
                        <option>Wirausaha</option>
                        <option>Petani</option>
                        <option>Wiraswasta</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Pekerjaan ibu</label>
                      <select class="form-control" name="pekerjaan_ibu">
                        <option value="">-- Pilih pekerjaan --</option>
                        <option>Ibu rumah tangga</option>
                        <option>PNS</option>
                        <option>Karyawan</option>
                        <option>Wirausaha</option>
                        <option>Petani</option>
                        <option>Wiraswasta</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Alamat orang tua</label>
                      <textarea class="form-control" name="alamat_ortu" required></textarea>
                    </div>

                    <div class="form-group">
                      <label>Nama wali</label>
                      <input type="text" class="form-control" name="nama_wali">
                    </div>

                    <div class="form-group">
                      <label>Alamat wali</label>
                      <textarea class="form-control" name="alamat_wali"></textarea>
                    </div>

                    <div class="form-group">
                      <label>No hp</label>
                      <input type="number" required class="form-control" name="no_hp">
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
                    <th>Kode daftar</th>
                    <th>nama</th>
                    <th>JK</th>
                    <th>Tempat lahir</th>
                    <th>Tgl lahir</th>
                    <th>NIK</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach($siswa as $data){ ?>
                    <tr>
                      <td><?= $no++ ?></td>

                      <td><?= $data['kode_pendaftaran'] ?></td>
                      <td>
                        <?= $data['nama'] ?>
                      </td>
                      <td><?= $data['jk'] ?></td>
                      <td>
                       <?= $data['tempat_lahir'] ?>
                     </td>
                     <td>
                      <?= $data['tgl_lahir'] ?>
                    </td>
                    <td>
                      <?= $data['no_nik'] ?>
                    </td>
                    <td>
                      <?php 

                      if($data['status'] == 0){
                        echo"<label class='text-danger'>Beum disetujui</label>";
                      }else{
                        echo"<label class='text-success'>Disetujui</label>";
                      }

                      ?>
                    </td>

                    <td><?= $data['date'] ?></td>

                    <td>

                     <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalhapus<?= $data['id'] ?>">Hapus</button>
                     <!-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModaledit<?= $data['id'] ?>">Edit</button>
                     -->
                     <a href="<?= base_url('admin/detail_siswa?kode=') ?><?= $data['kode_pendaftaran'] ?>" class="btn btn-info btn-sm">Detail siswa</a>

                     <a href="<?= base_url('admin/edit_siswa?kode=') ?><?= $data['kode_pendaftaran'] ?>" class="btn btn-success btn-sm">Edit siswa</a>



                     <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModalsetatus<?= $data['id'] ?>">Update Status</button>

                     <a target="_blank" href="<?= base_url('admin/cetak_formulir?kode=') ?><?= $data['kode_pendaftaran'] ?>" class="btn btn-warning btn-sm">Cetak formulir</a>

                   </td>
                 </tr>


                 <!-- Modal Status -->
                 <div class="modal fade" id="exampleModalsetatus<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <h4>Apakah anda ingin update status ini ?</h4>
                        <form method="post" action="<?= base_url('admin/update_status') ?>">
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
                        <form method="post" action="<?= base_url('admin/hapus_siswa') ?>">
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







                <!-- Modal Detail -->
                <div class="modal fade" id="exampleModaldetail<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail data siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">


                        <div class="form-group">
                          <label>Kode pendaftaran</label>
                          <div>  <?= $data['kode_pendaftaran'] ?></div>
                        </div>
                        <hr />

                        <div class="form-group">
                          <label>Nama</label>
                          <div>  <?= $data['nama'] ?></div>
                        </div>
                        <hr />

                        <div class="form-group">
                         <label>Jenis kelamin</label>
                         <div>  <?= $data['jk'] ?></div>
                       </div>
                       <hr />

                       <div class="form-group">
                        <label>Tempat lahir</label>
                        <div>  <?= $data['tempat_lahir'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Tanggal lahir</label>
                        <div>  <?= $data['tgl_lahir'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>NIK</label>
                        <div>  <?= $data['no_nik'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Alamat </label>
                        <div>  <?= $data['alamat'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Prov</label>
                        <div>  <?= $data['prov'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Kab</label>
                        <div>  <?= $data['kab'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Kec</label>
                        <div>  <?= $data['kec'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Kel</label>
                        <div>  <?= $data['kel'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Kode pos</label>
                        <div><?= $data['kode_pos'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Agama</label>
                        <div><?= $data['agama'] ?></div>
                      </div>
                      <hr />
                      <?php 

                      $ortu = $this->db->get_where('tbl_ortu', ['kode_pendaftaran' => $data['kode_pendaftaran']])->row_array();

                      ?>

                      <!-- <div class="form-group">
                        <label>Nama ayah</label>
                        <div><?= $ortu['nama_ayah'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Pekerjaan ayah</label>
                        <div><?= $ortu['pekerjaan_ayah'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Nama ibu</label>
                        <div><?= $ortu['nama_ibu'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Pekerjaan ibu</label>
                        <div><?= $ortu['pekerjaan_ibu'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Alamat ortu</label>
                        <div><?= $ortu['alamat_orang_tua'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Nama wali</label>
                        <div><?= $data['nama_wali'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Alamat wali</label>
                        <div><?= $data['alamat_wali'] ?></div>
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>No Hp</label>
                        <div><?= $data['no_hp'] ?></div>
                      </div>
                      <hr />
                    -->
                    <div class="form-group">
                      <label>Status</label>
                      <div>
                        <?php 
                        if($data['status'] == 0){
                          echo "Belum disetujui";
                        }else{
                          echo "Disetujui";
                        }
                        ?>
                      </div>
                    </div>
                    <hr />





                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                  </div>

                </div>
              </div>
            </div>

            <!-- End Modal Edit -->
          <?php } ?>

        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Kode daftar</th>
            <th>nama</th>
            <th>JK</th>
            <th>Tempat lahir</th>
            <th>Tgl lahir</th>
            <th>NIK</th>
            <th>Status</th>
            <th>Date</th>
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
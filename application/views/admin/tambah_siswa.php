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
          <h3 class="box-title">  <i class="fa fa-user"></i> Tambah siswa baru </h3>
          <hr />

          <!-- Button trigger modal -->

          <div class="box-body">

            <div class="row">
              <div class="col-sm-6">
                <form method="post" action="<?= base_url('admin/add_data_siswa') ?>" enctype="multipart/form-data">

                  <div class="box box-primary">
                    <div class="box-header">
                      <h5 class="fw-bold">Data siswa</h5>
                    </div>
                    <div class="box-body">
                     <div>
                      <label>Kode pendaftaran</label>
                      <input type="text" name="kode" class="form-control" name="kode" value="<?= $kode ?>" required>
                    </div>
                    <hr />
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="nama" value="" required>
                    </div>
                    <hr />
                    <div class="form-group">
                      <label>Jenis kelamin</label>
                      <select class="form-control" name="jk" required>

                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>

                    </div>
                    <hr />

                    <div class="form-group">
                      <label>Tempat lahir</label>
                      <textarea class="form-control" name="tempat_lahir" required></textarea>

                    </div>
                    <hr />

                    <div class="form-group">
                      <label>Tanggal lahir</label>
                      <input type="date" class="form-control" name="tgl_lahir"  required>
                    </div>
                    <hr />

                    <div class="form-group">
                      <label>Nomor nik</label>
                      <input type="number" class="form-control" name="no_nik" required>

                    </div>
                    <hr />

                    <div class="form-group">
                      <label>Provinsi</label>
                      <select class="form-control" name="prov" required id="prov">
                        <option value="">-- Pilih provinsi --</option>
                        <?php foreach ($prov as $pr) { ?>
                          <option value="<?= $pr['id'] ?>"><?= $pr['name'] ?></option>
                        <?php } ?>

                      </select>
                    </div>
                    <hr />


                    <div class="form-group">
                      <label>Kabupaten</label>
                      <select class="form-control" name="kab" required id="kab">
                       <option value="">-- Pilih kabupaten --</option>
                     </select>
                   </div>
                   <hr />


                   <div class="form-group">
                    <label>Kecamatan</label>
                    <select class="form-control" name="kec" required id="kec">
                      <option value="">-- Pilih kecamatan --</option>
                    </select>
                  </div>
                  <hr />


                  <div class="form-group">
                    <label>Kelurahan</label>
                    <select class="form-control" name="kel" required id="kel">
                      <option value="">-- Pilih kelurahan --</option>
                    </select>
                  </div>
                  <hr />


                  <div class="form-group">
                    <label>Alamat lengkap</label>
                    <textarea class="form-control" name="alamat" required></textarea>
                  </div>
                  <hr />

                  <div class="form-group">
                    <label>Kode pos</label>
                    <input type="number" class="form-control" name="kode_pos" required>

                  </div>
                  <hr />


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
                  <hr />

                <!--   <button type="submit" class="btn btn-primary">Tambah data siswa</button>
                </form> -->

              </div>
            </div>



          </div>

          <div class="col-sm-6">

           <!--  <form method="post" action="<?= base_url('admin/add_data_ortu') ?>"> -->

            <div class="box box-primary">
              <div class="box-header">
                <h5 class="fw-bold">Data orang tua siswa</h5>
              </div>
              <div class="box-body">

                <div class="form-group">
                  <label>Nama ayah</label>
                  <input type="text" class="form-control" name="nama_ayah" required>

                </div>
                <hr />


                <div>
                  <label>Nama ibu</label>
                  <input type="text" class="form-control" name="nama_ibu" required>
                </div>
                <hr />


                <div class="form-group">
                  <label>Pekerjaan ayah</label>
                  <select class="form-control" name="pekerjaan_ayah" required>

                    <option value="">-- Pilih pekerjaan --</option>
                    <option>PNS</option>
                    <option>Karyawan</option>
                    <option>Wirausaha</option>
                    <option>Petani</option>
                    <option>Wiraswasta</option>
                  </select>
                </div>
                <hr />


                <div class="form-group">
                  <label>Pekerjaan ibu</label>
                  <select class="form-control" name="pekerjaan_ibu" required >

                    <option value="">-- Pilih pekerjaan --</option>
                    <option>PNS</option>
                    <option>Karyawan</option>
                    <option>Wirausaha</option>
                    <option>Petani</option>
                    <option>Wiraswasta</option>
                  </select>
                </div>
                <hr />


                <div>
                  <label>Alamat orang tua</label>
                  <textarea class="form-control" name="alamat_ortu" required></textarea>
                </div>
                <hr />

                <div>
                  <label>Nohp orang tua</label>
                  <input type="number" name="nohp"  required class="form-control">
                </div>
                <hr />


                  <!-- <button class="btn btn-primary" type="submit">Tambah data orang tua</button>
                  </form> -->

                </div>

                <div class="box box-primary mt-5">
                  <!-- <form method="post" action="<?= base_url('admin/add_data_wali') ?>"> -->

                    <div class="box-header">
                      <h5 class="fw-bold">Data wali siswa</h5>
                    </div>
                    <div class="box-body">
                     <div>
                      <label>Nama wali</label>
                      <input type="text" name="nama_wali" class="form-control">
                    </div>
                    <hr />

                    <div>
                      <label>Alamat wali</label>
                      <textarea class="form-control" name="alamat_wali"></textarea>
                    </div>
                    <hr />

                    <div>
                      <label>Nohp wali</label>
                      <input type="number" name="nohp" class="form-control">
                    </div>
                    <hr />
                  <!-- <button type="submit" class="btn btn-primary">Tambah data wali</button>
                  </form> -->
                </div>


                <div class="box box-primary">

                  <div class="box-header">
                    <h5 class="fw-bold">Berkas siswa</h5>
                  </div>
                  <div class="box-body">
                    <!-- <form method="post" action="<?= base_url('admin/add_foto_siswa') ?>" enctype="multipart/form-data"> -->



                      <div>
                        <label>Foto siswa</label>
                        <input type="file" name="foto" class="form-control" name="foto" required>
                        <br />

                      </div>
                      <hr />

                      <div>
                        <!-- <form method="post" action="<?= base_url('admin/add_kk_siswa') ?>" enctype="multipart/form-data"> -->

                          <label>Kartu keluarga</label>
                          <input type="file"  class="form-control" name="kk" required><br />

                        </div>
                        <hr />

                        <div>

                          <label>Akte</label>
                          <input type="file"  class="form-control" name="akte" required><br />


                        </div>
                        <hr />

                        <div>

                          <label>Bukti pembayaran</label>
                          <input type="file"  class="form-control" name="bukti" required><br />


                        </div>
                        <hr />

                        <button type="submit" class="btn btn-primary">Tambah data siswa</button>
                      </form>
                    </div>

                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>

      </div>


    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->



</div>
</div>


</section>
<!-- /.content -->
</div>
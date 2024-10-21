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
          <h3 class="box-title">  <i class="fa fa-user"></i> Edit data siswa</h3>
          <hr />

          <!-- Button trigger modal -->

          <div class="box-body">

            <div class="row">
              <div class="col-sm-6">
                <form method="post" action="<?= base_url('admin/ubah_data_siswa') ?>">
                  <input type="hidden" class="form-control" name="kode" value="<?= $siswa['kode_pendaftaran'] ?>">
                  <div class="box box-primary">
                    <div class="box-header">
                      <h5 class="fw-bold">Data siswa</h5>
                    </div>
                    <div class="box-body">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?= $siswa['nama'] ?>">
                      </div>
                      <hr />
                      <div class="form-group">
                        <label>Jenis kelamin</label>
                        <select class="form-control" name="jk">
                          <option><?= $siswa['jk'] ?></option>
                          <option>Laki-laki</option>
                          <option>Perempuan</option>
                        </select>

                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Tempat lahir</label>
                        <textarea class="form-control" name="tempat_lahir"><?= $siswa['tempat_lahir'] ?></textarea>

                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Tanggal lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" value="<?= $siswa['tgl_lahir'] ?>">
                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Nomor nik</label>
                        <input type="number" class="form-control" name="no_nik" value="<?= $siswa['no_nik'] ?>">

                      </div>
                      <hr />

                      <div class="form-group">
                        <label>Provinsi</label>
                        <select class="form-control" name="prov" required id="prov">
                          <?php $prov2 = $this->db->get_where('tbl_provinsi', ['id' => $siswa['prov']])->row_array(); ?>
                          <option value="<?= $prov2['id'] ?>"><?= $prov2['name'] ?></option>
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
                         <?php $kab = $this->db->get_where('tbl_kabupaten', ['id' => $siswa['kab']])->row_array(); ?>
                         <option value="<?= $kab['id'] ?>"><?= $kab['name'] ?></option>
                         <option value="">-- Pilih kabupaten --</option>
                       </select>
                     </div>
                     <hr />


                     <div class="form-group">
                      <label>Kecamatan</label>
                      <select class="form-control" name="kec" required id="kec">
                        <?php $kec = $this->db->get_where('tbl_kecamatan', ['id' => $siswa['kec']])->row_array(); ?>
                        <option value="<?= $kec['id'] ?>"><?= $kec['name'] ?></option>
                        <option value="">-- Pilih kecamatan --</option>
                      </select>
                    </div>
                    <hr />


                    <div class="form-group">
                      <label>Kelurahan</label>
                      <select class="form-control" name="kel" required id="kel">
                        <?php $kel = $this->db->get_where('tbl_kelurahan', ['id' => $siswa['kel']])->row_array(); ?>
                        <option value="<?= $kel['id'] ?>"><?= $kel['name'] ?></option>
                        <option value="">-- Pilih kelurahan --</option>
                      </select>
                    </div>
                    <hr />


                    <div class="form-group">
                      <label>Alamat lengkap</label>
                      <textarea class="form-control" name="alamat"><?= $siswa['alamat'] ?></textarea>
                    </div>
                    <hr />

                    <div class="form-group">
                      <label>Kode pos</label>
                      <input type="number" class="form-control" name="kode_pos" value="<?= $siswa['kode_pos'] ?>">
                      <!-- <p><?= $siswa['kode_pos'] ?></p> -->
                    </div>
                    <hr />


                    <div class="form-group">
                      <label>Agama</label>
                      <select class="form-control" name="agama" required>
                        <option><?= $siswa['agama'] ?></option>
                        <option value="">-- Pilih agama --</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                      </select>
                    </div>
                    <hr />

                    <button type="submit" class="btn btn-primary">Ubah data siswa</button>
                  </form>

                </div>
              </div>

              

            </div>

            <div class="col-sm-6">

              <form method="post" action="<?= base_url('admin/ubah_data_ortu') ?>">
                <input type="hidden" name="kode" value="<?= $ortu['kode_pendaftaran'] ?>">
                <div class="box box-primary">
                  <div class="box-header">
                    <h5 class="fw-bold">Data orang tua siswa</h5>
                  </div>
                  <div class="box-body">

                    <div class="form-group">
                      <label>Nama ayah</label>
                      <input type="text" class="form-control" name="nama_ayah" value="<?= $ortu['nama_ayah'] ?>">
                      <!-- <p><?= $siswa['kode_pos'] ?></p> -->
                    </div>
                    <hr />


                    <div>
                      <label>Nama ibu</label>
                      <input type="text" class="form-control" name="nama_ibu" value="<?= $ortu['nama_ibu'] ?>">
                    </div>
                    <hr />


                    <div class="form-group">
                      <label>Pekerjaan ayah</label>
                      <select class="form-control" name="pekerjaan_ayah" >
                        <option><?= $ortu['pekerjaan_ayah'] ?></option>
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
                      <select class="form-control" name="pekerjaan_ibu" >
                        <option><?= $ortu['pekerjaan_ibu'] ?></option>
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
                      <textarea class="form-control" name="alamat_ortu"><?= $ortu['alamat_ortu'] ?></textarea>
                    </div>
                    <hr />

                    <div>
                      <label>Nohp orang tua</label>
                      <input type="number" name="nohp" value="<?= $ortu['nohp_ortu'] ?>" class="form-control">
                    </div>
                    <hr />


                    <button class="btn btn-primary" type="submit">Ubah data orang tua</button>
                  </form>

                </div>

                <div class="box box-primary mt-5">
                  <form method="post" action="<?= base_url('admin/ubah_data_wali') ?>">
                    <input type="hidden" name="kode" value="<?= $ortu['kode_pendaftaran'] ?>">
                    <div class="box-header">
                      <h5 class="fw-bold">Data wali siswa</h5>
                    </div>
                    <div class="box-body">
                     <div>
                      <label>Nama wali</label>
                      <input type="text" name="nama_wali" value="<?= $wali['nama_wali'] ?>" class="form-control">
                    </div>
                    <hr />

                    <div>
                      <label>Alamat wali</label>
                      <textarea class="form-control" name="alamat_wali"><?= $wali['alamat_wali'] ?></textarea>
                    </div>
                    <hr />

                    <div>
                      <label>Nohp wali</label>
                      <input type="number" name="nohp" value="<?= $wali['nohp_wali'] ?>" class="form-control">
                    </div>
                    <hr />
                    <button type="submit" class="btn btn-primary">Ubah data wali</button>
                  </form>
                </div>


                <div class="box box-primary">

                  <div class="box-header">
                    <h5 class="fw-bold">Berkas siswa</h5>
                  </div>
                  <div class="box-body">
                    <form method="post" action="<?= base_url('admin/ubah_foto_siswa') ?>" enctype="multipart/form-data">
                      <input type="hidden" name="kode" value="<?= $berkas['kode_pendaftaran'] ?>">
                      <div>
                        <label>Foto siswa</label>
                        <input type="file" name="foto" class="form-control" name="foto" required>
                        <br />
                        <button type="submit" class="btn btn-primary">Ubah foto siswa</button>

                      </form>
                    </div>
                    <hr />

                    <div>
                      <form method="post" action="<?= base_url('admin/ubah_kk_siswa') ?>" enctype="multipart/form-data">
                        <input type="hidden" name="kode" value="<?= $berkas['kode_pendaftaran'] ?>">
                        <label>Kartu keluarga</label>
                        <input type="file"  class="form-control" name="kk" required><br />
                        <button type="submit" class="btn btn-primary">Ubah kartu keluarga siswa</button>
                      </form>
                    </div>
                    <hr />

                    <div>
                      <form method="post" action="<?= base_url('admin/ubah_akte_siswa') ?>" enctype="multipart/form-data">
                        <input type="hidden" name="kode" value="<?= $berkas['kode_pendaftaran'] ?>">
                        <label>Akte</label>
                        <input type="file"  class="form-control" name="akte" required><br />
                        <button type="submit" class="btn btn-primary">Ubah akte siswa</button>
                      </form>

                    </div>
                    <hr />


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
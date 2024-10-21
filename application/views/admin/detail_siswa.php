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
          <h3 class="box-title">  <i class="fa fa-user"></i> Datail siswa</h3>
          <hr />

          <!-- Button trigger modal -->

          <div class="box-body">

            <div class="row">
              <div class="col-sm-6">
                <div class="box box-primary">
                  <div class="box-header">
                    <h5 class="fw-bold">Data siswa</h5>
                  </div>
                  <div class="box-body">
                    <div>
                      <label>Nama</label>
                      <p><?= $siswa['nama'] ?></p>
                    </div>
                    <hr />
                    <div>
                      <label>Jenis kelamin</label>
                      <p><?= $siswa['jk'] ?></p>
                    </div>
                    <hr />

                    <div>
                      <label>Tempat lahir</label>
                      <p><?= $siswa['tempat_lahir'] ?></p>
                    </div>
                    <hr />

                    <div>
                      <label>Tanggal lahir</label>
                      <p><?= $siswa['tgl_lahir'] ?></p>
                    </div>
                    <hr />

                    <div>
                      <label>Nomor nik</label>
                      <p><?= $siswa['no_nik'] ?></p>
                    </div>
                    <hr />

                    <div>
                      <label>Provinsi</label>
                      <?php $prov = $this->db->get_where('tbl_provinsi', ['id' => $siswa['prov']])->row_array(); ?>
                      <p><?= $prov['name'] ?></p>
                    </div>
                    <hr />

                    <div>
                      <label>Kabupaten</label>
                      <?php $kab = $this->db->get_where('tbl_kabupaten', ['id' => $siswa['kab']])->row_array(); ?>
                      <p><?= $kab['name'] ?></p>
                    </div>
                    <hr />

                    <div>
                      <label>Kecamatan</label>
                      <?php $kec = $this->db->get_where('tbl_kecamatan', ['id' => $siswa['kec']])->row_array(); ?>
                      <p><?= $kec['name'] ?></p>
                    </div>
                    <hr />

                    <div>
                      <label>Kelurahan/Desa</label>


                      <?php $kel = $this->db->get_where('tbl_kelurahan', ['id' => $siswa['kel']])->row_array(); ?>
                      <p><?= $kel['name'] ?></p>
                    </div>
                    <hr />

                    <div>
                      <label>Alamat lengkap</label>
                      <p><?= $siswa['alamat'] ?></p>
                    </div>
                    <hr />

                    <div>
                      <label>Kode pos</label>
                      <p><?= $siswa['kode_pos'] ?></p>
                    </div>
                    <hr />

                    <div>
                      <label>Agama</label>
                      <p><?= $siswa['agama'] ?></p>
                    </div>
                    <hr />

                    <div>
                      <label>Status</label>
                      <?php if($siswa['status'] == 1){ ?>
                        <p class="text-success">Disetujui</p>
                      <?php }else{ ?>
                        <p class="text-warning">Belum disetujui</p>
                      <?php } ?>
                    </div>
                    <hr />

                  </div>
                </div>

                <div class="box box-primary">
                  <div class="box-header">
                    <h5 class="fw-bold">Bukti pembayaran</h5>
                  </div>
                  <div class="box-body">
                    <div>
                      <label>Bukti pembayaran</label>
                      <br />
                      <img src="<?= base_url('assets/berkas/') ?><?= $tf['bukti_pembayaran'] ?>" class="img-thumbnail" alt="..." style='height: 100px;'><br /><br />
                      <a target="_blank" href="<?= base_url('assets/berkas/') ?><?= $tf['bukti_pembayaran'] ?>">Lihat gambar bukti pembayaran</a>
                    </div>
                    <hr />
                  </div>
                </div>

              </div>

              <div class="col-sm-6">
                <div class="box box-primary">
                  <div class="box-header">
                    <h5 class="fw-bold">Data orang tua siswa</h5>
                  </div>
                  <div class="box-body">
                   <div>
                    <label>Nama ayah</label>
                    <p><?= $ortu['nama_ayah'] ?></p>
                  </div>
                  <hr />

                  <div>
                    <label>Nama ibu</label>
                    <p><?= $ortu['nama_ibu'] ?></p>
                  </div>
                  <hr />

                  <div>
                    <label>Pekerjaan ayah</label>
                    <p><?= $ortu['pekerjaan_ayah'] ?></p>
                  </div>
                  <hr />

                  <div>
                    <label>Pekerjaan ibu</label>
                    <p><?= $ortu['pekerjaan_ibu'] ?></p>
                  </div>
                  <hr />


                  <div>
                    <label>Alamat orang tua</label>
                    <p><?= $ortu['alamat_ortu'] ?></p>
                  </div>
                  <hr />

                  <div>
                    <label>Nohp orang tua</label>
                    <p><?= $ortu['nohp_ortu'] ?></p>
                  </div>
                  <hr />

                </div>

                <div class="box box-primary">
                  <div class="box-header">
                    <h5 class="fw-bold">Data wali siswa</h5>
                  </div>
                  <div class="box-body">
                   <div>
                    <label>Nama wali</label>
                    <p><?= $wali['nama_wali'] ?></p>
                  </div>
                  <hr />

                  <div>
                    <label>Alamat wali</label>
                    <p><?= $wali['alamat_wali'] ?></p>
                  </div>
                  <hr />

                  <div>
                    <label>Nohp wali</label>
                    <p><?= $wali['nohp_wali'] ?></p>
                  </div>
                  <hr />
                </div>


                <div class="box box-primary">
                  <div class="box-header">
                    <h5 class="fw-bold">Berkas siswa</h5>
                  </div>
                  <div class="box-body">
                   <div>
                    <label>Foto siswa</label>
                    <br />
                    <img src="<?= base_url('assets/berkas/') ?><?= $berkas['foto'] ?>" class="img-thumbnail" alt="..." style='height: 80px;'><br /><br />
                    <a target="_blank" href="<?= base_url('assets/berkas/') ?><?= $berkas['foto'] ?>">Lihat gambar foto</a>
                  </div>
                  <hr />

                  <div>
                    <label>Kartu keluarga</label>
                    <br />
                    <img src="<?= base_url('assets/berkas/') ?><?= $berkas['kk'] ?>" class="img-thumbnail" alt="..." style='height: 80px;'><br /><br />
                    <a target="_blank" href="<?= base_url('assets/berkas/') ?><?= $berkas['kk'] ?>">Lihat gambar kartu keluarga</a>
                  </div>
                  <hr />

                  <div>
                    <label>Akte</label>
                    <br />
                    <img src="<?= base_url('assets/berkas/') ?><?= $berkas['akte'] ?>" class="img-thumbnail" alt="..." style='height: 80px;'><br /><br />
                    <a target="_blank" href="<?= base_url('assets/berkas/') ?><?= $berkas['akte'] ?>">Lihat gambar akte</a>
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

<!-- Header-->

<div class="card bg-warning" style="border-radius: 0px;">
  <div class="card-body">
    <div class="container px-5">
      <h4>Halaman PPDB</h4>
    </div>

  </div>
</div>

<!-- Features section-->
<section class="py-5" id="features">
  <div class="container px-5 my-3">
    <?php 
    if($this->session->kode_user == null){
     ?>
     <center>
      <img class="img-fluid rounded-3" src="<?= base_url('assetsuser/img/drawpay.png') ?>" alt="..." style="height: 300px;" />
      <p class="text-primary">Anda belum mempunyai akun untuk mendaftar PPDB, daftar akun anda sekarang juga</p>
      <a href="<?= base_url('app/register') ?>" class="btn btn-primary">Register</a>
      <a href="<?= base_url('app/login') ?>" class="btn btn-primary">Login</a>
    </center>

  <?php }else{ ?>
   <center>
     <img class="img-fluid rounded-3" src="<?= base_url('assetsuser/img/slide1.png') ?>" alt="..." style="height: 100px;" />

   </center>
   <div class="row gx-5 mt-5">




    <?php 
    if($this->input->get('slide') == null){
      ?>
      <form method="post" action="<?= base_url('app/add_slide1') ?>">
        <div class="col-lg-12">
          <h4 class="text-center mb-5">Data Diri Siswa</h4>

          <?php 
          if($siswa == true){ ?>
            <input type="hidden" name="kode" value="<?= $siswa['kode_pendaftaran'] ?>">
          <?php } ?>

          <?php 
          if($siswa == true){

            if($siswa['status'] == 1){
             ?>


             <div class="alert alert-success" role="alert">
              <p class="text-center fw-bold">Pendaftaran peserta didik baru anda sudah diterima mohon untuk mencetak kartu pendaftaran anda</p>

              <center>
                <a target="_blank" href="<?= base_url('app/pdf') ?>" class="btn btn-primary">CETAK KARTU PPDB</a>
              </center>
            </div>
          <?php }else{ ?>

            <div class="alert alert-warning" role="alert">
              <p class="fw-bold text-center">Pendaftaran peserta didik baru anda belum diterima mohon untuk melengkapi data diri anda dan menunggu persetujuan dari admin</p>
            </div>

          <?php } ?>
        <?php } ?>


        <?php 
        if($siswa == true){
         ?>
         <div class="alert alert-primary" role="alert">
          <ul>
           <?php 
           if($siswa['kode_user'] != null){

            echo "<li>Data siswa sudah terisi</li>";
          }

          if($ortu['nama_ayah'] != false){

            echo "<li>Data orang tua sudah terisi</li>";
          }

          if($berkas['foto'] != null && $berkas['kk'] != null && $berkas['akte'] != null){
            echo "<li>Berkas sudah di upload</li>";
          }else{
            echo "<li>Berkas belum terisi semua</li>";
          }

          if($bayar == true){
            echo "<li>Bukti pembayaran sudah di upload</li>";
          }else{
            echo "<li>Berkas belum terisi semua</li>";
          }

          ?>
        </ul>
      </div>
    <?php } ?>
    <div class="row gx-5 mt-4 row-cols-1 row-cols-md-2">

      <div class="col sm-6">

        <!-- <h4 class="text-center fw-bold mb-3 mt-5">Profil anda</h4> -->
        <div class="card border-primary shadow">
          <div class="card-body">

                                    <!-- <div class="form-group mt-3">
                                        <label>Kode pendaftaran</label> 
                                        <input type="text" name="kode" class="form-control" value="<?= $kode ?>"  required>
                                      </div> -->
                                      <div class="form-group mt-3">
                                        <label>Nama lengkap</label> 
                                        <input type="text" name="nama" class="form-control" required value="<?= $siswa == true ? $siswa['nama'] : '' ?>">
                                      </div>

                                      <div class="form-group mt-3">


                                        <label>NIK</label> 
                                        <input type="text" name="nik" class="form-control" required value="<?= $siswa == true ? $siswa['no_nik'] : '' ?>">
                                      </div>

                                      <div class="form-group mt-3">
                                        <label>Jenis kelamin</label> 
                                        <select class="form-control" name="jk" required>
                                          <?php 
                                          if($siswa == true){
                                           ?>
                                           <option><?= $siswa['jk'] ?></option>
                                         <?php }else{} ?>
                                         <option>-- Pilih jenis kelamin --</option>
                                         <option>Laki-laki</option>
                                         <option>Perempuan</option>
                                       </select>
                                     </div>

                                     <div class="form-group mt-3">
                                      <label>Tempat lahir</label> 
                                      <input type="text" name="tempat_lahir" class="form-control" required value="<?= $siswa == true ? $siswa['tempat_lahir'] : '' ?>">
                                    </div>

                                    <div class="form-group mt-3">
                                      <label>Tgl lahir</label> 
                                      <input type="date" name="tgl_lahir" class="form-control" required value="<?= $siswa == true ? $siswa['tgl_lahir'] : '' ?>">
                                    </div>

                                    <div class="form-group mt-3">
                                      <label>Agama</label>
                                      <select class="form-control" name="agama" required>
                                       <?php 
                                       if($siswa == true){
                                         ?>
                                         <option><?= $siswa['agama'] ?></option>
                                       <?php }else{} ?>
                                       <option value="">-- Pilih agama --</option>
                                       <option>Islam</option>
                                       <option>Kristen</option>
                                       <option>Hindu</option>
                                       <option>Budha</option>
                                     </select>
                                   </div>


                                 </div>
                               </div>
                             </div>
                             <div class="col sm-6  mb-5 h-100">

                               <div class="card border-primary shadow">
                                <div class="card-body">

                                  <div class="form-group mt-3">
                                    <label>Alamat</label> 
                                    <input type="text" name="alamat" class="form-control" required value="<?= $siswa == true ? $siswa['alamat'] : '' ?>">
                                  </div>

                                  <div class="form-group mt-3">
                                    <label>Provinsi</label>
                                    <select class="form-control" name="prov" required id="prov">
                                     <?php 
                                     if($siswa == true){

                                      $prv = $this->db->get_where('tbl_provinsi', ['id' => $siswa['prov']])->row_array();

                                      ?>
                                      <option value="<?= $prv['id'] ?>">
                                        <?= $prv['name'] ?>
                                      </option>
                                    <?php }else{} ?>
                                    <option value="">-- Pilih provinsi --</option>
                                    <?php foreach ($prov as $pr) { ?>
                                      <option value="<?= $pr['id'] ?>"><?= $pr['name'] ?></option>
                                    <?php } ?>

                                  </select>
                                </div>


                                <div class="form-group mt-3">
                                  <label>Kabupaten</label>
                                  <select class="form-control" name="kab" required id="kab">
                                    <?php 
                                    if($siswa == true){

                                      $kbt = $this->db->get_where('tbl_kabupaten', ['id' => $siswa['kab']])->row_array();

                                      ?>
                                      <option value="<?= $kbt['id'] ?>">
                                        <?= $kbt['name'] ?>
                                      </option>
                                    <?php }else{} ?>
                                    <option value="">-- Pilih kabupaten --</option>
                                  </select>
                                </div>


                                <div class="form-group mt-3">
                                  <label>Kecamatan</label>

                                  <select class="form-control" name="kec" required id="kec">
                                    <?php 
                                    if($siswa == true){
                                      $kct = $this->db->get_where('tbl_kecamatan', ['id' => $siswa['kec']])->row_array();
                                      ?>
                                      <option value="<?= $kct['id'] ?>">
                                        <?= $kct['name'] ?>
                                      </option>
                                    <?php }else{} ?>
                                    <option value="">-- Pilih kecamatan --</option>
                                  </select>
                                </div>


                                <div class="form-group mt-3">
                                  <label>Kelurahan</label>
                                  <select class="form-control" name="kel" required id="kel">
                                    <?php 
                                    if($siswa == true){
                                      $kct= $this->db->get_where('tbl_kecamatan', ['id' => $siswa['kec']])->row_array();
                                      ?>
                                      <option value="<?= $kct['id'] ?>">
                                        <?= $kct['name'] ?>
                                      </option>
                                    <?php }else{} ?>
                                    <option value="">-- Pilih kelurahan --</option>
                                  </select>
                                </div>

                                <div class="form-group mt-3">
                                  <label>Kode pos</label>
                                  <input type="number" name="kode_pos" class="form-control" required value="<?= $siswa == true ? $siswa['kode_pos'] : '' ?>">
                                </div>

                              </div>
                            </div>

                          </div>
                        </div>

                        <center>
                          <?php 
                          if($siswa == true){
                           ?>
                           <button type="submit" class="btn btn-primary rounded-pill mt-4">Update</button>
                           <a href="<?= base_url('app/ppdb?slide=2') ?>" class="btn btn-primary rounded-pill mt-4" style="width: 120px">Selanjutnya</a>

                         <?php }else{?>
                          <button type="submit" class="btn btn-primary rounded-pill mt-3">Selanjutnya</button>
                        <?php } ?>
                      </center>
                    </form>
                  <?php }elseif($this->input->get('slide') == 2){ ?>

                    <?php 
                    $kode = $this->db->get_where('tbl_siswa', ['kode_user' => $siswa['kode_user']])->row_array();
                    ?>
                    <h4 class="text-center mb-3">Data Diri Orang Tua</h4>

                    <form method="post" action="<?= base_url('app/add_slide2') ?>">
                      <input type="hidden" name="kode" value="<?= $kode['kode_pendaftaran'] ?>">
                      <div class="row gx-5 mt-5">
                        <div class="col-sm-6 mb-3">
                          <div class="card border-primary shadow">
                            <div class="card-body">
                              <div class="form-group mt-3">
                                <label>Nama ayah</label>
                                <input type="text" name="nama_ayah" value="<?= $ortu == true ? $ortu['nama_ayah'] : '' ?>" class="form-control" required>
                              </div>
                              <div class="form-group mt-3">
                                <label>Nama ibu</label>
                                <input type="text" name="nama_ibu" class="form-control" value="<?= $ortu == true ? $ortu['nama_ibu'] : '' ?>" required>
                              </div>

                              <div class="form-group mt-3">
                                <label>Pekerjaan ayah</label>
                                <select class="form-control" name="pekerjaan_ayah" >
                                  <?php 
                                  if($ortu == true){
                                   ?>
                                   <option><?=  $ortu['pekerjaan_ayah'] ?></option>
                                 <?php }else{ 

                                 } ?>

                                 <option value="">-- Pilih pekerjaan --</option>
                                 <option>PNS</option>
                                 <option>Karyawan</option>
                                 <option>Wirausaha</option>
                                 <option>Petani</option>
                                 <option>Wiraswasta</option>
                               </select>
                             </div>

                             <div class="form-group mt-3">
                              <label>Pekerjaan ibu</label>
                              <select class="form-control" name="pekerjaan_ibu" >
                                <?php 
                                if($ortu == true){
                                 ?>
                                 <option><?=  $ortu['pekerjaan_ibu'] ?></option>
                               <?php }else{ 

                               } ?>
                               <option value="">-- Pilih pekerjaan --</option>
                               <option>PNS</option>
                               <option>Karyawan</option>
                               <option>Wirausaha</option>
                               <option>Petani</option>
                               <option>Wiraswasta</option>
                             </select>
                           </div>


                         </div>
                       </div>
                     </div>
                     <div class="col-sm-6">
                       <div class="card border-primary shadow">
                        <div class="card-body">
                          <div class="form-group mt-3">
                            <label>Alamat orang tua</label>
                            <input type="text" name="alamat_orang_tua" value="<?= $ortu == true ? $ortu['alamat_ortu'] : '' ?>"  class="form-control" required>
                          </div>
                          <!-- <div class="form-group mt-3">
                            <label>Nama wali</label>
                            <input type="text" name="nama_wali" value="<?= $siswa == true ? $siswa['nama_wali'] : '' ?>"  class="form-control">
                          </div>

                          <div class="form-group mt-3">
                            <label>Alamat wali</label>
                            <input type="text" name="alamat_wali" class="form-control" value="<?= $siswa == true ? $siswa['alamat_wali'] : '' ?>" >
                          </div>
                        -->
                        <div class="form-group mt-3">
                          <label>No hp orang tua</label>
                          <input type="number" name="no_hp" class="form-control" required value="<?= $ortu == true ? $ortu['nohp_ortu'] : '' ?>" >
                        </div>

                      </div>
                    </div>

                  </div>

                  <div class="form-group mt-3">
                    <center>
                      <?php 
                      if($ortu == true){
                       ?>
                       <a href="<?= base_url('app/ppdb') ?>" class="btn btn-primary rounded-pill mt-4" style="width: 120px">Kembali</a>
                       <button type="submit" class="btn btn-primary rounded-pill mt-4">Update</button>
                       <a href="<?= base_url('app/ppdb?slide=3') ?>" class="btn btn-primary rounded-pill mt-4" style="width: 120px">Selanjutnya</a>
                     <?php }else{ ?>

                      <button type="submit" class="btn btn-primary rounded-pill mt-3">Selanjutnya</button>
                    <?php } ?>

                  </center>
                </div>

              </form>

            </div>

          <?php }elseif($this->input->get('slide') == 3){ ?>

            <?php 
            $kode = $this->db->get_where('tbl_siswa', ['kode_user' => $siswa['kode_user']])->row_array();
            ?>
            <h4 class="text-center mb-3">Data Diri Wali</h4>

            

            <form method="post" action="<?= base_url('app/add_slide3') ?>">
              <input type="hidden" name="kode" value="<?= $kode['kode_pendaftaran'] ?>">
              <div class="row gx-5 mt-2">
               <div class="col-sm-3 mb-3">
               </div>
               <div class="col-sm-6 mb-3">
                 <div class="alert alert-primary" role="alert">
                  <center>
                    <small class="text-center">Klik selanjutnya jika calon siswa tidak ada wali</small>
                  </center>
                </div>
                <div class="card border-primary shadow">
                  <div class="card-body">
                    <div class="form-group mt-3">
                      <label>Nama wali</label>
                      <input type="text" name="nama_wali" value="<?= $wali == true ? $wali['nama_wali'] : '' ?>"  class="form-control">
                    </div>

                    <div class="form-group mt-3">
                      <label>Alamat wali</label>
                      <input type="text" name="alamat_wali" class="form-control" value="<?= $wali == true ? $wali['alamat_wali'] : '' ?>" >
                    </div>

                    <div class="form-group mt-3">
                      <label>No hp wali</label>
                      <input type="number" name="no_hp" class="form-control"  value="<?= $wali == true ? $wali['nohp_wali'] : '' ?>" >
                    </div>

                  </div>
                </div>

                <div class="form-group mt-3">
                  <center>
                    <?php 
                    if($wali == true){
                     ?>
                     <a href="<?= base_url('app/ppdb?slide=2') ?>" class="btn btn-primary rounded-pill mt-4" style="width: 120px">Kembali</a>
                     <button type="submit" class="btn btn-primary rounded-pill mt-4">Update</button>
                     <a href="<?= base_url('app/ppdb?slide=4') ?>" class="btn btn-primary rounded-pill mt-4" style="width: 120px">Selanjutnya</a>
                   <?php }else{ ?>

                    <button type="submit" class="btn btn-primary rounded-pill mt-3 w-100">Selanjutnya</button>
                  <?php } ?>

                </center>
              </div>


            </div>


            <div class="col-sm-3 mb-3">
            </div>

          </form>

        </div>


      <?php }elseif($this->input->get('slide') == 4){ ?>

       <div class="row mt-3">
        <h4 class="text-center mb-5">Upload Berkas Siswa</h4>

        <div class="col-sm-6">
          <div class="card border-primary">
            <div class="card-body">
              <?php 
              if($berkas == 'false' || $berkas['foto'] == false){
               ?>

               <small class="text-primary" style="font-style: italic;">Masukan foto calon siswa dengan ukuran 3 x 4 berlatar polos dan berformat JPG, JPEG, dan PNG</small>
               <form method="post" action="<?= base_url('app/add_foto') ?>" enctype="multipart/form-data">

                <input type="file" name="foto" class="form-control" required="">
                <button type="submit" class="btn btn-primary rounded-pill w-100 mt-3">Upload</button>
              </form>

            <?php }else{ ?>

             <center>
               <img class="img-fluid rounded-3" src="<?= base_url('assets/berkas/') ?><?= $berkas['foto'] ?>" alt="..." style="height: 200px;" />
               <h5>Pash Foto</h5>
               <small class="fw-bold text-success">Pash foto siswa sudah brhasil diupload</small>
             </center>

           <?php } ?>
         </div>
       </div>
     </div>

     <div class="col-sm-6">
      <div class="card border-primary">
        <div class="card-body">
          <?php 
          if($berkas == 'false'|| $berkas['kk'] == false){
           ?>
           <small class="text-primary" style="font-style: italic;">Masukan foto Kartu Keluarga siswa dengan jelas dengan  format JPG, JPEG, dan PNG</small>
           <form method="post" action="<?= base_url('app/add_kk') ?>" enctype="multipart/form-data">

            <input type="file" name="kk" class="form-control" required="">
            <button type="submit" class="btn btn-primary rounded-pill w-100 mt-3">Upload</button>
          </form>

        <?php }else{ ?>

         <center>
          <img class="img-fluid rounded-3" src="<?= base_url('assets/berkas/') ?><?= $berkas['kk'] ?>" alt="..." style="height: 200px;" />
          <h5>Kartu Keluarga</h5>
          <small class="fw-bold text-success">Kartu keluarga siswa sudah brhasil diupload</small>
        </center>

      <?php } ?>
    </div>
  </div>
</div>

<div class="col-sm-6 mt-3">
  <div class="card border-primary">
    <div class="card-body">
     <?php 
     if($berkas == 'false'  || $berkas['akte'] == false){
       ?>
       <small class="text-primary" style="font-style: italic;">Masukan foto Akte lahir siswa dengan jelas dengan  format JPG, JPEG, dan PNG</small>
       <form method="post" action="<?= base_url('app/add_akte') ?>" enctype="multipart/form-data">
        <input type="file" name="akte" class="form-control" required="">

        <button type="submit" class="btn btn-primary rounded-pill w-100 mt-3">Upload</button>
      </form>

    <?php }else{ ?>
      <center>
        <img class="img-fluid rounded-3" src="<?= base_url('assets/berkas/') ?><?= $berkas['akte'] ?>" alt="..." style="height: 200px;" />
        <h5>Akte lahiran</h5>
        <small class="fw-bold text-success">Akte lahiran siswa sudah brhasil diupload</small>
      </center>
    <?php } ?>
  </div>
</div>
</div>


</div>
<center>
  <a href="<?= base_url('app/ppdb?slide=3') ?>" class="btn btn-primary rounded-pill mt-4" style="width: 120px">Kembali</a>
  <a href="<?= base_url('app/ppdb?slide=5') ?>" class="btn btn-primary rounded-pill mt-4" style="width: 120px">Selanjutnya</a>
</center>
<?php  }elseif($this->input->get('slide') == 5){ ?>

 <div class="row mt-3">

  <h4 class="text-center">Pembayaran</h4>
  <div class="text-center">
    <?php 
    if($bayar == true){ ?>

      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
      </svg>

      <div class="alert alert-warning d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <div class="fw-bold text-center">
          Pembayaran anda masih dalam proses pengecekan, mohon untuk menunggu persetujuan dari admin
        </div>
      </div>

    <?php } ?>
  </div>

  <div class="col-sm-6">
    <div class="card border-primary mt-5">
      <div class="card-body">
        <h4>Rincian pembayaran</h4>
        <hr />
        <ul>
          <li>Uang Pendaftaran Rp.100.000</li>
          <li>Uang Baju Olahrga Rp.100.000</li>
          <li>Uang Simbol Baju Rp.50.0000</li>
          <li>Uang Buku Rp.200.0000</li>
        </ul>
        <h5>Total pembayaran Rp.450.000</h5>
        <p>Pembyaran hanya dapat dikirim melalui nomor rekening <strong>BRI : 0834433546</strong> atas nama Jumadi</p>
      </div>
    </div>
              <!--  <img class="img-fluid rounded-3" src="<?= base_url('assetsuser/img/drawpay.png') ?>" alt="..." />
               <p class="mb-0 text-center">Anda hanya dapat login dengan username dan password yang sudah anda daftarkan disistem kami</p> -->
             </div>
             <div class="col-sm-6">
              <div class="card border-primary mt-5">
                <div class="card-body">

                 <?php 
                 if($bayar == true){
                   ?>
                   <center>
                    <img class="img-fluid rounded-3" src="<?= base_url('assets/berkas/') ?><?= $bayar['bukti_pembayaran'] ?>" alt="..." style="height: 200px;" />
                    <h5>Bukti pembayaran</h5>
                    <small class="fw-bold text-success">Bukti pembayaran  siswa sudah brhasil diupload</small>
                  </center>
                <?php }else{ ?>
                  <div class="my-5">

                    <small class="text-primary mb-2 fw-bold">Upload bukti pembayaran anda sesui dengan nominal dan nomor rekening yang telah tesedia</small>
                    <form method="post" action="<?= base_url('app/add_tf') ?>" enctype="multipart/form-data">
                      <input type="file" name="tf" class="form-control mt-3" required="">
                      <button class="btn btn-primary mt-4 rounded-pill w-100">Upload pembayaran</button>
                    </form>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <center>
          <a href="<?= base_url('app/ppdb?slide=4') ?>" class="btn btn-primary rounded-pill mt-4" style="width: 120px">Kembali</a>
        </center>

      <?php } ?>

    </div>

  <?php } ?>


</section>






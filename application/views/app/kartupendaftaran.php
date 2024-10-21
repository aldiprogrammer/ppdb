<!DOCTYPE html>
<html><head><title>kartu pendaftaran</title>
</head><body>

    <h4 style="text-align: center;">KARTU PENDAFTARAN PESERTA DIDIK BARU<br/>(PPDB ONLINE)<br/>SDN 056639 JASA MAKMUR</h4>
    <hr style="background-color: black;" />

    <h5 style="text-align : center;">NOMOR REGISTRASI : <?= $siswa['kode_pendaftaran'] ?></h5>
    <br />
    <div style="background-color: silver; font-weight: bold; text-align: center; ">
        <label>DATA DIRI SISWA</label>
    </div>
    <br/>
    <br />
    <div>
       <!--  <img src="<?= base_url('assets/berkas/') ?><?= $berkas['foto'] ?>" /> -->
       <table border="0">
        <tr>
            <td style="width: 200px;">Nama </td>
            <td>: </td>
            <td><?= $siswa['nama'] ?></td>
        </tr>

        <tr>
            <td style="width: 200px;">NIK</td>
            <td>: </td>
            <td><?= $siswa['no_nik'] ?></td>
        </tr>
        <tr>
            <td style="width: 200px;">Jenis kelamin</td>                                                                                                                                                                                                                               
            <td>: </td>
            <td><?= $siswa['jk'] ?></td>
        </tr>
        <tr>
            <td style="width: 200px;">Tempat lahir</td>
            <td>: </td>
            <td><?= $siswa['tempat_lahir'] ?></td>
        </tr>
        <tr>
            <td style="width: 200px;">Tanggal lahir</td>
            <td>: </td>
            <td><?= $siswa['tgl_lahir'] ?></td>
        </tr>
        <tr>
            <td style="width: 200px;">Agama</td>
            <td>: </td>
            <td><?= $siswa['agama'] ?></td>
        </tr>
        <tr>
            <td style="width: 200px;">Alamat</td>
            <td>: </td>
            <td><?= $siswa['alamat'] ?>
        </tr>
        <tr>
            <td style="width: 200px;">Provinsi</td>
            <td>: </td>
            <td>
                <?php 
                $prov = $this->db->get_where('tbl_provinsi', ['id' => $siswa['prov']])->row_array();
                echo $prov['name'];
                ?>
            </td>
        </tr>
        <tr>
            <td style="width: 200px;">Kabupaten</td>
            <td>: </td>
            <td>
                <?php 
                $kab = $this->db->get_where('tbl_kabupaten', ['id' => $siswa['kab']])->row_array();
                echo $kab['name'];
                ?>
            </td>
        </tr>
        <tr>
            <td style="width: 200px;">Kecamatan</td>
            <td>: </td>
            <td>
                <?php 
                $kec = $this->db->get_where('tbl_kecamatan', ['id' => $siswa['kec']])->row_array();
                echo $kec['name'];
                ?>
            </td>
        </tr>
        <tr>
            <td style="width: 200px;">Keluran / Desa</td>
            <td>: </td>
            <td>
                <?php 
                $kel = $this->db->get_where('tbl_kelurahan', ['id' => $siswa['kel']])->row_array();
                echo $kel['name'];
                ?>
            </td>
        </tr>
        <tr>
            <td style="width: 200px;">Kode pos</td>
            <td>: </td>
            <td><?= $siswa['kode_pos'] ?></td>
        </tr>
    </table>
</div>
<br/>
<br />
<div style="background-color: silver; font-weight: bold; text-align: center; ">
    <label>DATA DIRI ORANG TUA</label>
</div>
<br/>
<br />
<div>
    <table border="0">
        <tr>
            <td style="width: 200px;">Nama ayah</td>
            <td>: </td>
            <td><?= $ortu['nama_ayah'] ?></td>
        </tr>

        <tr>
            <td style="width: 200px;">Nama ibu</td>
            <td>: </td>
            <td><?= $ortu['nama_ibu'] ?></td>
        </tr>
        <tr>
            <td style="width: 200px;">Pekerjaan ayah</td>
            <td>: </td>
            <td><?= $ortu['pekerjaan_ayah'] ?></td>
        </tr>
        <tr>
            <td style="width: 200px;">Pekerjaan ibu</td>
            <td>: </td>
            <td><?= $ortu['pekerjaan_ibu'] ?></td>
        </tr>
        <tr>
            <td style="width: 200px;">Alamat orang tua</td>
            <td>: </td>
            <td><?= $ortu['alamat_ortu'] ?></td>
        </tr>

        <tr>
            <td style="width: 200px;">No hp orang tua</td>
            <td>: </td>
            <td><?= $ortu['nohp_ortu'] ?></td>
        </tr>


    </table>
</div>

<br/>
<br />
<div style="background-color: silver; font-weight: bold; text-align: center; ">
    <label>DATA DIRI WALI</label>
</div>
<br/>
<br />
<div>
    <table border="0">
        <tr>
            <td style="width: 200px;">Nama wali</td>
            <td>: </td>
            <td>
                <?php if($wali['nama_wali'] == ''){
                    echo "-";
                }else{

                    echo $wali['nama_wali'];
                }

                ?>
            </td>
        </tr>
        <tr>
            <td style="width: 200px;">Alamat wali</td>
            <td>: </td>
            <td>
                <?php if($wali['alamat_wali'] == ''){
                    echo "-";
                }else{

                    echo $wali['alamat_wali'];
                }

                ?>
            </td>
        </tr>
        <tr>
            <td style="width: 200px;">No hp wali</td>
            <td>: </td>
            <td>
                <?php if($wali['nohp_wali'] == ''){
                    echo "-";
                }else{

                    echo $wali['nohp_wali'];
                }

                ?>
            </td>
        </tr>

    </table>
</div>
<br/>
<br />
<div style="background-color: silver; font-weight: bold; text-align: center; ">
    <label>BERKAS SISWA</label>
</div>
<br/>

<br/>

<table border="0">
    <tr>
        <td style="width: 200px;">Pas poto</td>
        <td>: </td>
        <td>Tersedia</td>
    </tr>

    <tr>
        <td style="width: 200px;">Kartu keluarga</td>
        <td>: </td>
        <td>Tersedia</td>
    </tr>
    <tr>
        <td style="width: 200px;">Akte kelahiran</td>
        <td>: </td>
        <td>Tersedia</td>
    </tr>
</table>


<br />
<br />
<br/>

<br/>
<table border="0">
    <tr>
        <td style="width: 100px;"></td>
        <td style="width: 300px; text-align: right;"> </td>
        <td style="width: 400px; text-align: center;">Diketahui Oleh </td>
    </tr>

    <tr>
        <td style="width: 200px;"></td>
        <td> </td>
        <td></td>
    </tr>
    <tr>
        <td style="width: 200px;"></td>
        <td> </td>
        <td></td>
    </tr>

    <tr>
        <td style="width: 200px;"></td>
        <td> </td>
        <td></td>
    </tr>

    <tr>
        <td style="width: 200px;"></td>
        <td> </td>
        <td></td>
    </tr>
    <tr>
        <td style="width: 200px;"></td>
        <td> </td>
        <td></td>
    </tr>

   <!--  <tr>
        <td style="width: 200px;"></td>
        <td> </td>
        <td></td>
    </tr>
-->

   <!--  <tr>
        <td style="width: 200px;"></td>
        <td> </td>
        <td></td>
    </tr> -->
    <tr>
        <td style="width: 200px;"></td>
        <td></td>
        <td style="text-align:center;"><?= $ortu['nama_ayah'] ?></td>
    </tr>

</table>
<br />
<br />

<br />

<small style="font-style: italic;">Cetak kartu pendaftaran dengan ukuran keratas A4 dan bawa hasil cetakan di SDN 056639 JASA MAKMUR 




</body></html>


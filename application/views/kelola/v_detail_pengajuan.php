<div class="m-3">
<h1>Detail Pengajuan Produk</h1>
<hr></div>
<div class="card mb-4 m-3">
  <div class="card-header">
    Detail : Lihat dengan detail dan tentukan status pengajuan produk di bagian bawah
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col">
    <p>
        <i class="fa fa-address-card"></i>
         Identitas Mahasiswa
    </p>
    <?php foreach ($detail as $d )  :?>
        <?php $id = $d['id_pelanggan']; ?>
    <p>
        <b>&nbsp ID Pelanggan</b><br>
        &nbsp <?= $d['id_pelanggan'];?>
    </p>
    <p>
        <b>&nbsp Nama Lengkap</b><br>
        &nbsp <?= $d['nama'] ?>
    </p>
    <p>
        <b>&nbsp HP</b><br>
        &nbsp <?= $d['hp'];?>
    </p>
    <p>
        <b>&nbsp Email</b><br>
        &nbsp <?= $d['email'];?>
    </p>
    <p>
        <b>&nbsp Tanggal Lahir</b><br>
        &nbsp <?= $d['tgl_lahir'];?>
    </p>
    <p>
        <b>&nbsp No. Whatsapp</b><br>
        &nbsp <?= $d['whatsapp'];?>
    </p></div>
        <div class="col">
    <p>
        <i class="fa fa-archive"></i>
         Identitas Produk
    </p>
    <p>
        <b>&nbsp Nama Barang</b><br>
        &nbsp <?= $d['barang'];?>
    </p>
    <p>
        <b>&nbsp Harga</b><br>
        &nbsp Rp. <?= $d['harga'];?>,-
    </p>
    <p>
        <b>&nbsp Deskripsi</b><br>
        &nbsp <?= $d['deskripsi'];?>
    </p>
    <p>
        <b>&nbsp Link</b><br>
        &nbsp <?= $d['link'];?>
    </p>  
        </div>
        <div class="col">
    <p>
        <i class="fa fa-info"></i>
         Detail Angsuran
    </p>
    <p>
        <b>&nbsp Jumlah Barang</b><br>
        &nbsp <?= $d['jumlah_barang'];?>
    </p>
    <p>
        <b>&nbsp Uang Muka</b><br>
        &nbsp
        <?php 
        $h = $d['harga'];
        $dp = 10/100;
        $um = $h * $dp;

        echo "Rp. ".$um;
        ?>
    </p>
    <p>
        <b>&nbsp Angsuran (Perbulan)</b><br>
        &nbsp <?php
          $jangka = $d['jangka_waktu'];
          $harga = $d['harga'];

          $angsuran = ($harga * 1.2) / $jangka;
          echo "Rp. ".$angsuran;
        ?>
    </p>
    <p>
        <b>&nbsp Margin</b><br>
        &nbsp Rp. <?= $d['margin'];?>
    </p>
    <p>
        <b>&nbsp Jangka Waktu</b><br>
        &nbsp <?= $d['jangka_waktu'];?>
    </p>
    <p>
        <b>&nbsp Catatan Penjual</b><br>
        &nbsp <?= $d['catatan_penjual'];?>
    </p>
    <p>
        <b>&nbsp Kode Voucher</b><br>
        &nbsp <?= $d['kode_voucher'];?>
    </p>
    <p>
        <b>&nbsp Nilai Voucher</b><br>
        &nbsp <?= $d['nilai_voucher'];?>
    </p>
    
        </div>
    </div>
    <br>

    <p>
    	<i class="fa fa-check-circle"></i>
    	 Status Dokumen dan Transaksi
    </p>
    <p>
        <?php $stat = $d['status']; ?>
    	<?php if ($stat == '1') {
            echo "&nbsp <button class='btn btn-success'><i class='fa fa-fw fa-check-circle'></i> Dokumen Disetujui</button>";
        }elseif($stat == '2'){
            echo "&nbsp <button class='btn btn-danger'><i class='fas fa-fw fa-exclamation'></i> Dokumen Ditolak</button>";
        }else{
            echo "&nbsp <button class='btn btn-primary'><i class='fas fa-fw fa-exclamation'></i> Dokumen Diverifikasi</button>";
        }?>    	
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-pencil-alt"></i> Ubah status</button>
        
    </p>
    <p>
    	<b>&nbsp Nama ASP (Perubahan dilakukan oleh admin)</b><br>
      <?php
        $asp = $d['asp']; 
        if($asp == '0'){
          echo "";
        }else{
          echo "&nbsp <button class='btn btn-success'><i class='fas fa-fw fa-user-plus'></i> " .$asp."</button>";
        }
        ?>
        <?php
        if($stat == 1){
            echo "<button class='btn btn-primary m-2' data-toggle='modal' data-target='#pilihAspModal'><i class='fas fa-fw fa-pencil-alt'></i> Pilih ASP</button>";
              
        }else{
            echo "<button class='btn btn-danger m-2'><i class='fas fa-exclamation'></i> Dokumen Belum Disetujui</button>";
        }
        ?>

        
        
    	
    </p>
    <p>
    	<?php
      $id = $d['id_pelanggan'];
      $nama = $d['nama'];
      $akad = $d['file_akad'];
      if($asp == '0'){
        echo "&nbsp <button class='btn btn-danger'><i class='fas fa-fw fa-exclamation'></i> ASP Belum Ditentukan</button>";
      }else{
        
        if($akad == '0'){
        echo "<form method='post' action='kelola/akad'>
        <b>&nbsp Ekspor Akad (Hasilkan file Akad)</b><br>
                <input type='hidden' name='detail_id' value='$id'>
                <input type='hidden' name='nama' value='$nama'>&nbsp 
                <button class='btn btn-warning' type='submit'><i class='fas fa-file'></i> Ekspor File PDF</button>
              </form><br>
              <b>&nbsp Unggah Akad (Unggah Akad yang telah diekspor)</b><br>
              &nbsp <button class='btn btn-primary' data-toggle='modal' data-target='#akadModal'><i class='fas fa-upload'></i> Unggah Akad</button>";
          
        }else{
          echo "
          <b>&nbsp Status Akad</b><br>
          &nbsp <button class='btn btn-success' title='$akad'><i class='fas fa-check'></i> File Terunggah</button>
          <span>File: $akad</span>";
        }
      }
      ?>
      
    </p>
    <p>
    	
      <?php
      $jangka = $d['jangka_waktu'];
        if($akad == '0'){
          echo "<b>&nbsp Angsuran: </b><br>&nbsp <button class='btn btn-danger'>Akad belum diunggah!</button>";
        }else{
          echo "
          <form method='post' action='kelola/detail_angsuran'>
          <b>&nbsp Angsuran: </b><br>
          <input type='hidden' name='detail_id' value='$id'>&nbsp 
          <button type='submit' class='btn btn-primary'>Lihat Detail Angsuran!</button>
          </form>";
          
        }
      ?>
    </p>
        <p>
    	<i class="fas fa-user-cog"></i>
    	 Aksi Lainnya
    </p>
    <p>
    	<b>&nbsp Hapus pesanan (Perubahan dilakukan oleh admin)</b><br>
    	
        <?php
            echo "
            <a href= javascript:confirmDelete('delete?delete_id=$id')>&nbsp<button class='btn btn-danger'><i class='far fa-fw fa-trash-alt'></i> Hapus</button></a>";
        ?>
    </p>
	</div>
    
</div>

<!--StatusDokumenModal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt fa-fw"></i> Status Dokumen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'kelola/update'; ?>" method="post">
          <div class="form-group">
            <input type="hidden" name="file_akad" value="0">
            <input type="hidden" name="id_pelanggan" value="<?= $d['id_pelanggan']; ?>">
            <input type="hidden" name="tgl_persetujuan" value="<?= date('Y-m-d');?>">
            <label for="recipient-name" class="col-form-label">Catatan untuk konsumen (<b>Harus diisi</b>):</label>
            <textarea class="form-control" id="message-text" name="catatan_admin" placeholder="Catatan untuk konsumen dari administrator.." style="height: 200px;"><?= $d['catatan_admin']?></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Ubah Status:</label>
                <input type="hidden" name="asp" value="0">
                <?php if($stat == '1'){
                    echo "<select class='custom-select' id='inputGroupSelect04' name='status'>
                            <option>Pilih...</option>
                            <option value='1' selected>Setujui</option>
                            <option value='0'>Verifikasi</option>
                            <option value='2'>Tolak</option>
                          </select>";
                      }elseif($stat == '2'){
                        echo "<select class='custom-select' id='inputGroupSelect04' name='status'>
                                <option>Pilih...</option>
                                <option value='1'>Setujui</option>
                                <option value='0'>Verifikasi</option>
                                <option value='2' selected>Tolak</option>
                              </select>";
                      }else{
                        echo "<select class='custom-select' id='inputGroupSelect04' name='status'>
                                <option>Pilih...</option>
                                <option value='1'>Setujui</option>
                                <option value='0' selected>Verifikasi</option>
                                <option value='2'>Tolak</option>
                              </select>";
                      }
            ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <input type="submit" value="Simpan" class="btn btn-primary"></div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--ASPModal-->
<div class="modal fade" id="pilihAspModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt fa-fw"></i> Pilih ASP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="<?php echo base_url(). 'kelola/pilih_asp'; ?>" method="post">
          <div class="form-group">
            <input type="hidden" name="id_pelanggan" value="<?= $d['id_pelanggan'];?>">
            <!--lanjutan ada di views/data/modal_asp.php-->
            <?php
            $this->load->view('data/modal_asp');?>

<!--akadModal-->
      <div class="modal fade" id="akadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt fa-fw"></i> Unggah Dokumen Akad (Harus Diisi)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url(). 'kelola/update_akad'; ?>" method="post">
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Unggah Akad:</label>
                  <input type="file" name="file_akad" value="0" class="form-control" style="height: 45px;">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Tanggal Akad:</label>
                  <input type="date" name="tgl_akad" class="form-control" value="<?= date('Y-m-d');?>">
                </div>
                <div class="form-group">
                  <input type="hidden" name="id_pelanggan" value="<?= $d['id_pelanggan']; ?>">
                  <input type="hidden" name="tgl_persetujuan" value="<?= date('Y-m-d');?>">
                  <label for="recipient-name" class="col-form-label">Catatan:</label>
                  <textarea class="form-control" id="message-text" name="catatan_akad" placeholder="Catatan terkait dokumen akad (jika ada)" style="height: 200px;"><?= $d['catatan_akad']?></textarea>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  <input type="submit" value="Simpan" class="btn btn-primary"></div>
              </form>
            </div>
          </div>
        </div>
      </div>

<?php endforeach; ?>



  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url();?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url();?>assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url();?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?= base_url();?>assets/js/demo/chart-pie-demo.js"></script>
  <script src="<?= base_url();?>assets/js/demo/chart-bar-demo.js"></script>
  <!--Confirm delete-->
  <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/delete.js"></script>
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
        &nbsp Rp. <?= $d['dp'];?>
    </p>
    <p>
        <b>&nbsp Angsuran</b><br>
        &nbsp <?= $d['angsuran'];?>
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
    <p>
        <b>&nbsp Catatan Administrator</b><br>
        &nbsp <?= $d['catatan_admin'];?>
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
            echo "&nbsp <button class='btn btn-success'><i class='fa fa-check-circle'></i> Dokumen Diverifikasi</button>";
        }elseif($stat == '2'){
            echo "&nbsp <button class='btn btn-danger'><i class='fas fa-exclamation'></i> Dokumen Ditolak</button>";
        }else{
            echo "&nbsp <button class='btn btn-primary'><i class='fas fa-exclamation'></i> Menunggu Persetujuan</button>";
        }?>    	
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-pencil-alt"></i> Ubah status</button>
        
    </p>
    <p>
    	<b>&nbsp Nama ASP (Perubahan dilakukan oleh admin)</b><br>
    	<button class="btn btn-danger m-2"><i class="fas fa-exclamation"></i> Dokumen belum disetujui</button>
    </p>
    <p>
    	<b>&nbsp Buat Akad (Perubahan dilakukan oleh admin)</b><br>
    	<button class="btn btn-danger m-2"><i class="fas fa-exclamation"></i> ASP belum ditentukan</button>
    </p>
    <p>
    	<b>&nbsp Status Transaksi (Perubahan dilakukan oleh ASP)</b><br>
    	<button class="btn btn-danger m-2"><i class="fas fa-exclamation"></i> Dokumen akad belum diunggah</button>
    </p>
    <p>
    	<b>&nbsp Angsuran: </b>
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

<!--Modal-->
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
        <form method="POST" action="<?= base_url('kelola/update');?>">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Catatan untuk konsumen (<b>Harus diisi</b>):</label>
            <textarea class="form-control" id="message-text" name="catatan_admin" placeholder="Catatan untuk konsumen dari administrator.." style="height: 200px;"><?= $d['catatan_admin']?></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Ubah Status:</label>
                
                <?php if($stat == '1'){
                    echo "<select class='custom-select' id='inputGroupSelect04' name='status'>
                            <option>Pilih...</option>
                            <option value='1' selected>Diterima</option>
                            <option value='0'>Menunggu</option>
                            <option value='2'>Ditolak</option>
                          </select>";
                      }elseif($stat == '2'){
                        echo "<select class='custom-select' id='inputGroupSelect04' name='status'>
                                <option>Pilih...</option>
                                <option value='1'>Diterima</option>
                                <option value='0'>Menunggu</option>
                                <option value='2' selected>Ditolak</option>
                              </select>";
                      }else{
                        echo "<select class='custom-select' id='inputGroupSelect04' name='status'>
                                <option>Pilih...</option>
                                <option value='1'>Diterima</option>
                                <option value='0' selected>Menunggu</option>
                                <option value='2'>Ditolak</option>
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


<?php endforeach;?>


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
<div class="m-3">
<h1>Detail Pelanggan</h1>
<hr></div>
<div class="card mb-4 m-3">
  <div class="card-header">
    Detail
  </div>
  <div class="card-body">
    <p><i class="fa fa-address-card"></i>
                     Identitas Mahasiswa
                </p>
        <div class="row">
            <div class="col">
                <?php foreach ($detail as $d )  :?>
                <?php $id = $d['id_pelanggan']; ?>
                <p>
                	<b>&nbsp ID Pelanggan</b><br>
                  &nbsp <?= $d['id_pelanggan']; ?>
                </p>
                <p>
                	<b>&nbsp Nama Lengkap</b><br>
                  &nbsp <?= $d['nama']; ?>
                </p>
                <p>
                    <b>&nbsp Jenis Kelamin</b><br>
                  &nbsp <?= $d['jenis_kelamin']; ?>
                </p>
                <p>
                	<b>&nbsp HP</b><br>
                  &nbsp <?= $d['hp']; ?>
                </p>
                <p>
                	<b>&nbsp Email</b><br>
                  &nbsp <?= $d['email']; ?>
                </p>
                <p>
                	<b>&nbsp No. Whatsapp</b><br>
                  &nbsp <?= $d['whatsapp']; ?>
                </p>
                <p>
                    <b>&nbsp Skype</b><br>
                  &nbsp <?= $d['skype']; ?>
                </p>
            </div>
            <div class="col">
                
                <p>
                    <b>&nbsp Alamat</b><br>
                  &nbsp <?= $d['alamat']; ?>
                </p>
                <p>
                    <b>&nbsp Universitas</b><br>
                  &nbsp <?= $d['universitas']; ?>
                </p>
                <p>
                    <b>&nbsp Tahun Masuk</b><br>
                  &nbsp <?= $d['tahun_masuk']; ?>
                </p>
                <p>
                    <b>&nbsp Program Studi</b><br>
                  &nbsp <?= $d['prodi']; ?>
                </p>
                
            </div>
            <div class="col">
                    <p>
                        <b>&nbsp KTP</b><br>
                        <a href="#">
                        <button class="btn btn-primary m-2">Lihat KTP</button></a>
                    </p>
                    
                    <p>
                        <b>&nbsp Keterangan Aktif (KTM)</b><br>
                        <a href="#">
                        <button class="btn btn-primary m-2">Lihat KTM</button></a>
                    </p>

                    <p>
                        <b>&nbsp Transkrip Nilai</b><br>
                        <a href="#">
                        <button class="btn btn-primary m-2">Lihat Transkrip Nilai</button></a>
                    </p>
                 <?php endforeach; ?>
            </div>
        </div>
</div>


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
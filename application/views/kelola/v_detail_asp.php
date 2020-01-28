<div class="m-3">
<h1>Detail ASP</h1>
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
                <?php $id = $d['id_asp']; ?>

                <p>
                	<b>&nbsp ID ASP</b><br>
                    &nbsp <?= $d['id_asp'];?>
                </p>
                <p>
                	<b>&nbsp Nama Lengkap</b><br>
                    &nbsp <?= $d['nama'];?>
                </p>
                <p>
                    <b>&nbsp Jenis Kelamin</b><br>
                    &nbsp <?= $d['jenis_kelamin'];?>
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
                	<b>&nbsp No. Whatsapp</b><br>
                    &nbsp <?= $d['whatsapp'];?>
                </p>
                <p>
                    <b>&nbsp Skype</b><br>
                    &nbsp <?= $d['skype'];?>
                </p>
            </div>
            <div class="col">
                
                <p>
                    <b>&nbsp Alamat</b><br>
                    &nbsp <?= $d['alamat'];?>
                </p>
                <p>
                    <b>&nbsp Universitas</b><br>
                    &nbsp <?= $d['universitas'];?>
                </p>
                <p>
                    <b>&nbsp Semester</b><br>
                    &nbsp <?= $d['semester'];?>
                </p>
                <p>
                    <b>&nbsp Program Studi</b><br>
                    &nbsp <?= $d['prodi'];?>
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
                        
                        <b>&nbsp CV</b><br>
                        <a href="#">
                        <button class="btn btn-primary m-2">Lihat CV</button></a>
                    </p>

                    <p>
                        
                        <b>&nbsp Transkrip Nilai</b><br>
                        <a href="#">
                        <button class="btn btn-primary m-2">Lihat Transkrip Nilai</button></a>
                    </p>
            </div>
        </div>
   
    <br>

    <p>
    	<i class="fa fa-check-circle"></i>
    	 Status ASP <br>
    	   <?php 
           $stat = $d['status'];
                if($stat == '1'){
                  echo "&nbsp <button class='btn btn-success'><i class='fa fa-check-circle fa-fw'></i> Diverifikasi</button>";
                }elseif($stat == '2'){
                          echo "&nbsp <button class='btn btn-danger'><i class='fas fa-exclamation fa-fw'></i> Ditolak</button>";
                }else{
                    echo "&nbsp <button class='btn btn-primary'><i class='fas fa-exclamation fa-fw'></i> Menunggu</button>";
                }
            ?>
    	&nbsp <button class="btn btn-primary" data-toggle="modal" data-target="#aspModal"><i class="fas fa-pencil-alt"></i> Ubah status</button><br><br>
        <i class="fa fa-check-circle"></i> Generate Password</b><br>
    	<button class="btn btn-danger m-2"><i class=""></i> Set Password</button>
    </p>
    <p>
        <b>&nbsp Username:</b><br>
        &nbsp <?= $d['email'];?>
    </p>
    <p>
        <b>&nbsp Password:</b>
    </p>
    <?php endforeach; ?>
	</div>

</div>

<!--Modal-->
    <div class="modal fade" id="aspModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt fa-fw"></i> Status Dokumen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url(). 'kelola/update_asp'; ?>" method="post">
              <div class="form-group">
                <input type="hidden" name="id_asp" value="<?= $d['id_asp']; ?>">
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
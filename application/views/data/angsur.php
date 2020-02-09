<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Detail Angsuran</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Detail Angsuran</h6>
            </div>
            <div class="card-body">

  <?php
  	foreach ($angsuran as $a) {
  		$stat = $a['status'];
  		$dp = $a['angsuran_ke'];
  		$img = $a['file_bukti'];
  		if($dp == 0){
	  		if($stat == 0){
	  		echo "<div class='d-flex justify-content-center'>
	  		<div class='alert alert-danger mb-3' role='alert' style='width: 1000px;'>
	  		Uang Muka: <br>File bukti: " .$a['file_bukti']. " <i class='fas fa-file-image'></i></a><br>Status: Hutang <i class='far fa-times-circle'></i></div></div>"; 
	  		}elseif($stat == 1){
	  			echo "<div class='d-flex justify-content-center'><div class='alert alert-success mb-3' role='alert' style='width: 1000px;'>
	  		Uang Muka: <br>File bukti: <a href='/project-admin/assets/img/bukti/$img' target='_blank' class='alert-link'>" .$a['file_bukti']. " <i class='fas fa-file-image'></i></a><br>Status: Lunas <i class='far fa-check-circle'></i></div></div>"; 
	  		}elseif($stat == 2){
	  			echo "<div class='d-flex justify-content-center'><div class='alert alert-primary mb-3' role='alert' style='width: 1000px;'>
	  		Uang Muka: <br>File bukti: <a href='/project-admin/assets/img/bukti/$img' target='_blank' class='alert-link'>" .$a['file_bukti']. " <i class='fas fa-file-image'></i></a><br>Status: Dikonfirmasi <i class='far fa-check-circle'></i></div></div>"; 
	  		}else{
	  			echo "<div class='d-flex justify-content-center'><div class='alert alert-danger mb-3' role='alert' style='width: 1000px;'>
				Data tidak ditemukan</div></div>"; 
	  		}
  		}else{
  			if($stat == 0){
	  		echo "<div class='d-flex justify-content-center'>
	  		<div class='alert alert-danger mb-3' role='alert' style='width: 1000px;'>
	  		Angsuran ke-" .$a['angsuran_ke']. "<br>File bukti: " .$a['file_bukti']. " <i class='fas fa-file-image'></i></a><br>Status: Hutang <i class='far fa-times-circle'></i></div></div>"; 
	  		}elseif($stat == 1){
	  			echo "<div class='d-flex justify-content-center'><div class='alert alert-success mb-3' role='alert' style='width: 1000px;'>
	  		Angsuran ke-" .$a['angsuran_ke']. "<br>File bukti: <a href='/project-admin/assets/img/bukti/$img' target='_blank' class='alert-link'>" .$a['file_bukti']. " <i class='fas fa-file-image'></i></a><br>Status: Lunas <i class='far fa-check-circle'></i></div></div>"; 
	  		}elseif($stat == 2){
	  			echo "<div class='d-flex justify-content-center'><div class='alert alert-primary mb-3' role='alert' style='width: 1000px;'>
	  		Angsuran ke-" .$a['angsuran_ke']. "<br>File bukti: <a href='/project-admin/assets/img/bukti/$img' target='_blank' class='alert-link'>" .$a['file_bukti']. " <i class='fas fa-file-image'></i></a><br>Status: Dikonfirmasi <i class='far fa-check-circle'></i></div></div>"; 
	  		}else{
	  			echo "<div class='d-flex justify-content-center'><div class='alert alert-danger mb-3' role='alert' style='width: 1000px;'>
				Data tidak ditemukan</div></div>"; 
	  		}
  		}
  	}
  ?>
<!-- Bootstrap core JavaScript-->
  <script src="<?= base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url();?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url();?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url();?>assets/js/demo/datatables-demo.js"></script>
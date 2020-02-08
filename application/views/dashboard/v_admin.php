    

        <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- Content Row -->
          <div class="row">
            
            <?php
            $this->load->view('dashboard/setujui');
            $this->load->view('dashboard/verifikasi');
            $this->load->view('dashboard/tolak');
            ?>
              
          </div>
          <div class="row">

            <?php
            $this->load->view('dashboard/setujui_asp');
            $this->load->view('dashboard/verifikasi_asp');
            $this->load->view('dashboard/tolak_asp');
            ?>
          
          </div>

          <div class="row">
            <?php
            $this->load->view('dashboard/uang/pembelian');
            $this->load->view('dashboard/uang/pemasukan');
            $this->load->view('dashboard/uang/uang_muka');
            ?>
          </div>

        <div class="row">
          <div class="col mb-4">
            
            <form method="post" action="<?= base_url('kelola/update_tgl'); ?>">
              <!--tanggal-->
              <?php
              $tgl = date('Y-m-d');?>
              <input type="hidden" name="tgl_sekarang" value="<?php echo date('Y-m-d');?>">
              <input type="hidden" name="tgl_awal" value="<?php echo date('Y-m-01', strtotime($tgl));?>">
              <input type="hidden" name="tgl_akhir" value="<?php echo date('Y-m-t', strtotime($tgl));?>">

              <input type="hidden" name="status" value="1">
              <button class="btn btn-primary"><i class="fas fa-fw fa-sync"></i> Perbarui Data</button>
            </form>
          </div>
        </div>

      </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

 

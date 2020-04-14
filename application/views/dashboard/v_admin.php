    

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

 

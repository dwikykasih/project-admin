    

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
            
            <!-- Earnings (Monthly) Card Example -->
            <div class="col mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Pembelian Barang (Pertahun)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 1.500.000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Pemasukan (Pertahun)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 2.000.000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Angsuran Selesai</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">70%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- Pending Requests Card Example -->
            <div class="col mb-4">
              
            </div>

          <div class="col mb-4">
            
          </div>

          <div class="col mb-4">
            
          </div>

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

 

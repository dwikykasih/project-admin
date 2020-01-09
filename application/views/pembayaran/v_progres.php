

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Progres Angsuran</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Progres</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Lengkap</th>
                      <th>Barang</th>
                      <th>Tanggal Persetujuan</th>
                      <th>Jangka Waktu (Bulan)</th>
                      <th>Progres Angsuran</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Lengkap</th>
                      <th>Barang</th>
                      <th>Tanggal Persetujuan</th>
                      <th>Jangka Waktu (Bulan)</th>
                      <th>Progres Angsuran</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>Sound System</td>
                      <td>24-02-2012</td>
                      <td><button class="btn btn-primary btn-block">12</button></td>
                      <td><button class="btn btn-danger btn-block">Belum membayar DP</button></td>
                      <td><a href="<?= base_url('#');?>"><button class="btn btn-primary btn-block">Detail Progres</button></a></td>
                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Helm</td>
                      <td>17-12-2014</td>
                      <td><button class="btn btn-primary btn-block">6</button></td>
                      <td><button class="btn btn-success btn-block">Angsuran Selesai</button></td>
                      <td><a href="<?= base_url('admin/detail_progres');?>"><button class="btn btn-primary btn-block">Detail Progres</button></a></td>
                    </tr>
                    <tr>
                      <td>Ashton Cox</td>
                      <td>Ear buds</td>
                      <td>21-12-2012</td>
                      <td><button class="btn btn-primary btn-block">8</button></td>
                      <td><button class="btn btn-primary btn-block">Sedang Berjalan</button></td>
                      <td><a href="<?= base_url('#');?>"><button class="btn btn-primary btn-block">Detail Progres</button></a></td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

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
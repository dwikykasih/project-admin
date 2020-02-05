

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Angsur Student Partner</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel ASP</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Lengkap</th>
                      <th>Email</th>
                      <th>HP</th>
                      <th>Tanggal Daftar</th>
                      <th>Aksi</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Lengkap</th>
                      <th>Email</th>
                      <th>HP</th>
                      <th>Tanggal Daftar</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($asp as $a): ?>
                      <?php $id = $a['id_asp']; ?>
                    <tr>
                      <td><?= $a['nama'] ?></td>
                      <td><?= $a['email']; ?></td>
                      <td><?= $a['hp']; ?></td>
                      <td><?= $a['tgl_daftar']; ?></td>
                      <td>
                        <?php
                        echo "<a href='/project-admin/detail/asp?detail_id=$id'><button class='btn btn-primary btn-block'>Detail</button></a>
                        ";?>
                      </td>
                      
                    <?php endforeach; ?>
                    <?php $nama=$a['nama'];?>
                      <?php echo htmlentities($nama);?>
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
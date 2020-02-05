         <?php            
          $link = mysqli_connect("localhost", "root", "", "angsur");
           
          // Check connection
          if($link === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
          }

$sql = "SELECT * FROM pengajuan WHERE status = 2";
$query = mysqli_query($link, $sql);
$data = array();
while(($row = mysqli_fetch_array($query)) != null){
    $data[] = $row;
}
$count = count($data);

?>

<!-- Earnings (Monthly) Card Example -->
            <div class="col-xl mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <a href="<?= base_url('kelola');?>" style="text-decoration: none;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Pengajuan Ditolak</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>
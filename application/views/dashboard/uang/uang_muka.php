         <?php            
          $link = mysqli_connect("localhost", "root", "", "angsur");
           
          // Check connection
          if($link === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
          }

$query = "SELECT * FROM pengajuan";
$query_run = mysqli_query($link, $query);

$qty= 0;
while ($num = mysqli_fetch_assoc ($query_run)) {
    $qty += $num['dp'];
}

?>

<!-- Earnings (Monthly) Card Example -->
            <div class="col-xl mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <a href="#" style="text-decoration: none;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Uang Muka Diterima</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= $qty;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>
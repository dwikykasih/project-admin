<!DOCTYPE html>
<html><head>
	<style type="text/css">
		body {
			font-family:"futura",serif;
			text-align: center;
		}
		.kiri {
			text-align: left;
		}
		.data{
			margin: 20px;
		}
		hr {
			width: 99%;
		}
		.ttd {
			margin: 20px;
			text-align: center;
		}
	</style>
</head><body>
	<h1>Akad Murabahah</h1>
	<h3>Pengangsuran Barang</h3>
	<hr>
	<br><br>
	<div class="kiri">
	<p>Saya yang bertanda tangan dibawah ini:</p>
	<?php foreach($akad as $a):?>
		
	<div class="data">
		<p>Nama: <?= $a['nama'];?></p>
		<p>Universitas: <?= $a['universitas'];?></p>
		<p>Alamat: <?= $a['alamat'];?></p>
		<p>No. HP: <?= $a['hp'];?></p>
		<p>Email: <?= $a['email'];?></p>
	</div>
	<p>Dalam hal ini bertindak atas nama diri pribadi yang selanjutnya disebut sebagai Pihak Pertama (Penjual)</p>

	<div class="data">
		<p>Nama: Moch Dwiky Fajar Kasih</p>
		<p>Universitas: Institut Teknologi Sumatera</p>
		<p>Alamat: Jl.*****</p>
		<p>No. HP: 0895******</p>
		<p>Email: kasihcheck@gmail.com</p>
	</div>
	
	<p>Pada hari ini $tanggal, Pihak pertama dengan ini berjanji untuk menyatakan dan mengikatkandiri untuk menjual kepada pihak kedua dan pihak kedua juga berjanji menyatakan sertamengikatkan diri untuk membeli dari pihak pertama berupa:</p>

	<div class="data">
		<p>Nama Barang: <?= $a['barang'];?></p>
		<p>Jumlah: <?= $a['jumlah_barang'];?></p>
		<p>Harga: Rp. <?= $a['harga'];?></p>
		<p>Melalui Link: <?= $a['link'];?></p>
		<?php
			$harga = $a['harga'];
			$dp = $harga * 0.10;
		?>
		<p>Uang Muka: Rp. <?= $dp;?></p>
		<p>Jangka Waktu: <?= $a['jangka_waktu'];?></p>
	</div>

	<p>Kedua belah pihak bersepakat untuk mengadakan ikatan perjanjian jual - beli dengan <b>Akad Murabahah.</b></p>
	<p>Demikianlah Surat Perjanjan ini dibuat dan ditandatangani kedua belah pihak pada $tanggal dalam keadaan sadar serta tanpa adanya paksaan atau tekanan dari pihak manapun.</p>
</div>
	<div class="ttd">
		<br>
		<p align="left">
			<span>PIHAK PERTAMA</span><br><br><span>(Moch Dwiky Fajar Kasih)</span>
		</p>                        
		<p align="center">
			<span>PIHAK KEDUA</span><br><br><span>(<?= $a['nama'];?>)</span>
		</p>
	</div>
<?php endforeach; ?>
</body></html>
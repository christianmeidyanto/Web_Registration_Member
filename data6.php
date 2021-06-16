<html>
<head>
<title>Pendaftaran Anggota Online </title>
</head>
<link rel="stylesheet" type = "text/css" href ="style.css">
<body>
<div id="luaran">
<div class="head">
<div class="menu">
<ul>
	<li><a class="nav">Home</a>
<li><a class="nav">Data</a>
<ul>
<br><br>
	<li><a class="nav">Data yang terinput</a></li>
	<li><a class="nav">Data yang terdaftar</a></li>
</ul></li>
	<li><a class="nav">Data Admin</a>
<ul>
<br><br>
<li><a class="nav">Tambah data</a></li>
<li><a class="nav" href="logout.php">
Logout
</a></li>
</ul></li>
</ul>
	</div>	
</div>
<br>
<div id="isi">
<?php  
echo "<marquee><font color='white'size='3'>Selamat Datang Kepala Cabang</font></marquee>";
?>
<table border="1" align="center" width="900" height="100">
<tr>
<font color='white' align="center">
<th colspan="11" align="center" style='color:white;'>DATA YANG SUDAH TERDAFTAR</th>
<tr>
<th style="color:white;">Nama</th>
<th style="color:white;">Alamat</th>
<th style="color:white;">No. KTP</th>
<th style="color:white;">Kecamatan</th>
<th style="color:white;">Kelurahan</th>
<th style="color:white;">RT</th>
<th style="color:white;">RW</th>
<th style="color:white;">Jenis Kelamin</th>
<th style="color:white;">Jenis Pekerjaan</th>
<th style="color:white;">Id Pendaftar</th>
</tr>
<?php
include "k.php";
$select=mysqli_query($db,"SELECT * FROM pendaftarananggota");
while($data = mysqli_fetch_array($select)){
	echo "<tr>";
	echo "<td style='color:white;'>$data[nama]</td>";
	echo "<td style='color:white;'>$data[alamat]</td>";
	echo "<td style='color:white;'>$data[nomr]</td>";
	echo "<td style='color:white;'>$data[keca]</td>";
	echo "<td style='color:white;'>$data[kelu]</td>";
	echo "<td style='color:white;'>$data[rt]</td>";
	echo "<td style='color:white;'>$data[rw]</td>";
	echo "<td style='color:white;'>$data[jenis_kelamin]</td>";
	echo "<td style='color:white;'>$data[jenis_kerjaan]</td>";
	echo "<td style='color:white;'>$data[id_pend]</td>";
	echo "</tr>";
}

echo "</table>";
?>
</div>
<div id="foot">
@copyright &copy; 2015 by Christian.
</div>
</div>
</body>
</head>
</html>
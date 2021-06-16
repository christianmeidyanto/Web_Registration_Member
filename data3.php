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
	<li><a class="nav" href="home1.php">Home</a>
<li><a class="nav">Data</a>
<ul>
<br><br>
	<li><a class="nav" href="data3.php">Data yang terinput</a></li>
	<li><a class="nav" href="data4.php">Data yang terdaftar</a></li>
</ul></li>
	<li><a class="nav" href="data5.php">Data Admin</a>
<ul>
<br><br>
<li><a class="nav" href="tambah2.php">Tambah data</a></li>
<li><a class="nav" href="logout.php">
Logout
</a></li>
</ul></li>
</ul>
	</div>	
</div>
<br>
<div id="isi">
<table border="1" align="center" width="900" height="100">
<tr>
<font color='white' align="center">
<th colspan="11" align="center" style='color:white;'>DATA YANG SUDAH DIINPUTKAN</th>
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
<th style="color:white;">Id Pend</th>
<th style="color:white;">Status</th>
</tr>
<?php
include "k.php";
$select=mysql_query("SELECT * FROM pendaftarananggota");
while($data = mysql_fetch_array($select)){
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
	echo "<td style='color:white;'><a href='edit3.php?id_pend=$data[id_pend]'>Edit</a></td>";
	echo "</tr>";
}

echo "</table>";
?>
</div>
<div id="foot">
@copyright &copy;2015 by Christian.
</div>
</div>
</body>
</head>
</html>
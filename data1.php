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
	<li><a class="nav" href="home.php">Home</a></li>
	<li><a class="nav">Data</a>
<ul>
<br><br>
	<li><a class="nav" href="data1.php">Data yang terinput</a></li>
	<li><a class="nav" href="data2.php">Data yang terdaftar</a></li>
</ul></li>
	<li><a class="nav" href="data.php">Data Admin</a>
<ul>
<br><br>
<li><a class="nav" href="tambah.php">Tambah data</a></li>
</ul></li>
</ul>
	</div>	
</div>
<br>
<div id="isi">
<table border="1" align="center" width="300" height="100">
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
<th style="color:white;">Action</th>
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
	echo "<td>";
	echo "<a href='edit1.php?id_pend=$data[id_pend]'>Edit</a>";
	echo "<a href='delete1.php?id_pend=$data[id_pend]'>delete</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
?>
</div>
<div id="foot">
<font size="3"></font>@Copyright 2015 &copy;Christan Meidyanto.
</div>
</div>
</body>
</head>
</html>
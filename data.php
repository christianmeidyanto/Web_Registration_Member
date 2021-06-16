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
<table border="1" align="center" width="400" height="100">
<tr>
<font color='white' align="center">
<th colspan="7" align="center" style='color:white;'>DATA ADMIN</th>
<tr>
<th style="color:white; font-size:18;">Username</th>
<th style="color:white; font-size:18;">Nama Admin</th>
<th style="color:white; font-size:18;">Password</th>
<th style="color:white; font-size:18;">Level</th>
<th style="color:white; font-size:18;">Email</th>
<th style="color:white; font-size:18;">Action</th>
</tr>
<?php
include "k.php";
$select=mysql_query("SELECT * FROM admin");
while($data = mysql_fetch_array($select)){
	echo "<tr>";
	echo "<form method='POST' action='edit.php?ida=$data[id_ida]'>";
	echo "<td style='color:white;font-size:17'>$data[username]</td>";
	echo "<td style='color:white;font-size:17'>$data[nama_admn]</td>";
	echo "<td style='color:white;font-size:17'>$data[password]</td>";
	echo "<td style='color:white;font-size:17'>$data[level]</td>";
	echo "<td style='color:white;font-size:17'>$data[email]</td>";
	echo "<td>";
	echo "<a href='edit.php?ida=$data[id_admn]'><img src='1.png'width='50'height='auto'></a>";
	echo "<a href='delete.php?id_admn=$data[id_admn]'>delete</a>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
?>
</div>
<div id="foot">
@copyright 2015 by Christian.
</div>
</div>
</body>
</head>
</html>
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
<li><a class="nav" href="logout.php">
Logout
</a></li>
</ul></li>
</ul>
	</div>	
</div>
<br>
<div id="isi">

<form method="POST" action="acttambah.php">
<table border="1" width="520" height="300" align="center">
<tr>
<td colspan="2" align="center"><font size="6" color="white"><b>Tambah Data Admin</b></font></td>
</tr>
<td>&nbsp;
<font size="5"color="white">Nama :</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><input type="text" name="nama_admn" required="required"style="width:330;height:30;font-size:20;"></td>
</td>
</tr>
<tr>
<td>&nbsp;
<font size="5"color="white">Alamat :</font> &nbsp;&nbsp;&nbsp;&nbsp;
<td><input type="text"required="required" style="width:330;height:30;font-size:20;"></td>
</td>
</tr>
<tr>
<td>&nbsp;
<font size="5"color="white">Username :</font> 
<td><input type="text" required="required"name="username"style="width:330;height:30;font-size:20;"></td>
</td>
</tr>
<tr>
<td>&nbsp;
<font size="5"color="white">Password :</font> &nbsp;&nbsp;
<td><input type="password"required="required" name="password"style="width:330;height:30;font-size:20;"></td>
</td>
</tr>
<tr>
<td>&nbsp;
<font size="5"color="white">level :</font> &nbsp;&nbsp;
<td><input type="radio" required="required"name="level"value="1"><font color="white">
1</font></td>
</td>
</tr>
<tr>
<td>&nbsp;
<font size="5" color="white">Email :</font> &nbsp;&nbsp;
<td><input type="email"required="required" name="email" style="width:330;height:30;font-size:20;"></td>
</td>
</tr>
<tr>
<td colspan="2"><center><input type="reset" style="width:100;height:30;font-size:20;"value="Reset">
<input type="submit" style="width:100;height:30;font-size:20;"value="Daftar"></center></td>
</tr></form></table>
</div>
<div id="foot">
<font size="3"></font>@Copyright 2015 &copy;Christan Meidyanto.
</div>
</div>
</body>
</head>
</html>
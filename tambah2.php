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
<form method="POST" action="acttambah3.php">
<table border="1" width="520" height="300" align="center">
<tr>
<td colspan="2" align="center"><font size="6"color="white"><b>Tambah Data Admin</b></font></td>
</tr>
<td>&nbsp;
<font size="5" color="white">Nama :</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><input type="text" name="nama_admn"style="width:330;height:30;font-size:20;" required="required"></td>
</td>
</tr>
<tr>
<td>&nbsp;
<font size="5"color="white">Alamat :</font> &nbsp;&nbsp;&nbsp;&nbsp;
<td><input type="text" style="width:330;height:30;font-size:20;" required="required"></td>
</td>
</tr>
<tr>
<td>&nbsp;
<font size="5"color="white">Username :</font> 
<td><input type="text" name="username"style="width:330;height:30;font-size:20;" required="required"></td>
</td>
</tr>
<tr>
<td>&nbsp;
<font size="5" color="white">Password :</font> &nbsp;&nbsp;
<td><input type="password" name="password"style="width:330;height:30;font-size:20;" required="required"></td>
</td>
</tr>
<tr>
<td>&nbsp;
<font size="5"color="white">level : &nbsp;&nbsp;
<td><input type="radio" name="level"value="2" required="required"><font color="white">2</font></td></font>
</td>
</tr>
<tr>
<td>&nbsp;
<font size="5"color="white">Email :</font> &nbsp;&nbsp;
<td><input type="email" name="email" style="width:330;height:30;font-size:20;" required="required"></td>
</td>
</tr>
<tr>
<td colspan="2"><center><input type="reset" style="width:100;height:30;font-size:20;"value="Reset">
<input type="submit" style="width:100;height:30;font-size:20;"value="Daftar"></center></td>
</form></table>
</div>
<div id="foot">
@copyright &copy; 2015 by Christian.
</div>
</div>
</body>
</head>
</html>
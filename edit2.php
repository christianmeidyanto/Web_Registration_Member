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
	<li><a class="nav" href="home1.php">Home</a></li>
	<li><a class="nav">Data</a>
<ul>
<br><br>
	<li><a class="nav" href="data3.php">Data yang terinput</a></li>
	<li><a class="nav" href="data4.php">Data yang terdaftar</a></li>
</ul></li>
<li><a class="nav" href="dat5.php">Data Admin</a>
<ul>
<br><br>
<li><a class="nav" href="tambah2.php">Tambah data</a></li>
</ul></li>
</ul>
	</div>	
</div>
<br>
<div id="isi">
<?php
		include('K.php');
			$ida = $_GET['ida'];
			$select=mysql_query("SELECT * FROM admin WHERE id_admn = '$ida'");
			$data = mysql_fetch_array($select);

				echo"<form method='GET' action='actedit2.php'>			
					<table border='1' align='center'>
						<tr>
							<td>Id Admin</td>
							<td>: <input type='text' name='id_admn' size='30' value='$data[id_admn]'></td> 
						</tr>					
						<tr>
							<td>Username</td>
							<td>: <input type='text' name='username' size='30' value='$data[username]'></td> 
						</tr>	
							<tr>
							<td>Password</td>
							<td>: <input type='password' name='password' size='30' value='$data[password]'></td> 
						</tr>	
						<tr>
							<td align='right' colspan='2'><br><input type='submit' value='Edit Data'></br></td>
						</tr>
					</table>
				</form>";
		?></div>
<div id="foot">
@copyright 2015 by Christian.
</div>
</div>
</body>
</head>
</html>
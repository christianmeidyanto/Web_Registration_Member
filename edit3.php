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
<li><a class="nav" href="data5.php">Data Admin</a>
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
			$select=mysql_query('SELECT * FROM pendaftarananggota');
			$data = mysql_fetch_array($select);

				echo"<form method='GET' action='actedit3.php'>			
					<table border='1' align='center'>
						<tr>
							<td>Id Pend</td>
							<td>: <input type='number' name='id_pend' size='30' value='$data[id_pend]' readonly></td> 
						</tr>					
						<tr>
							<td>Nama</td>
							<td>: <input type='text' name='nama' size='30' value='$data[nama]'readonly></td> 
						</tr>	
							<tr>
							<td>Alamat</td>
							<td>: <input type='text' name='alamat' size='30' value='$data[alamat]'readonly></td> 
						</tr>
							<tr>
							<td>No. KTP</td>
							<td>: <input type='number' name='nomr' size='30' value='$data[nomr]'readonly></td> 
						</tr>	
							<tr>
							<td>Kecamatan</td>
							<td>: <input type='text' name='kec' size='30' value='$data[keca]'readonly></td> 
						</tr>	
						<tr>
							<td>Kelurahan</td>
							<td>: <input type='text' name='kel' size='30' value='$data[kelu]'readonly></td> 
						</tr>	
							<tr>
							<td>RT</td>
							<td>: <input type='number' name='rt' size='30' value='$data[rt]'readonly></td> 
						</tr>
							<tr>
							<td>RW</td>
							<td>: <input type='text' name='rw' size='30' value='$data[rw]'readonly></td> 
						</tr>	
							<tr>
							<td>Jenis Kelamin</td>
							<td>: <input type='text' name='jenis_kelamin' size='30' value='$data[jenis_kelamin]'readonly></td> 
						</tr>
							<tr>
							<td>Jenis Pekerjaan</td>
							<td>: <input type='text' name='jenis_kerjaan' size='30' value='$data[jenis_kerjaan]'readonly></td> 
						</tr>
						<tr>
							<td>Status</td>
							<td> &nbsp;&nbsp;<select name='stat'>
								 <option value='Proses'>Proses</option>
								 <option value='Anggota'>Anggota</option>
								 <option value='Ditolak'>Ditolak</option>
								 </select>
							</td>
						</tr>
						<tr>
							<td align='right' colspan='2'><br><input type='submit' value='Edit Data'></br></td>
						</tr>
					</table>
				</form>
		</div>";
		?>
<div id="foot">
@copyright 2015 by Christian.
</div>
</div>
</body>
</html>
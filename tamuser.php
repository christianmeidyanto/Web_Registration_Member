<html>
<head>
<title>Pemesanan Online Ticketing PT.KAI</title>
</head>
<link rel="stylesheet" type = "text/css" href ="style.css">
<body>
<div id="luaran">
<div class="head">
<div class="menu">
<ul>
	<li><img src="img/logo1.png" width="100%" height="50"></li>
	<li><a class="nav" href="homeadmin.php">Home</a></li>
	<li><a class="nav">Data</a>
<ul>
<br><br>
	<li><a class="nav" href="tickty.php">Ticket Type</a></li>
	<li><a class="nav" href="ven.php">Venue</a></li>
	<li><a class="nav" href="sea.php">Seat</a></li>
	<li><a class="nav" href="tick.php">Ticket</a></li>
</ul></li>
	<li><a class="nav" href="ma.php">Manage Users</a></li>
	<li>
	<li><form action="logout.php" method="POST">
<input type="Submit" name="logout" value="Logout"></form>
</li></li>
</ul></div>	
</div>
<br>
<div id="isi">
<center><table border="1" align="center" bgcolor="white"width="auto" height="auto">
<tr>
<font color='black' align="center">
<th colspan="9" align="center" style='color:black;'>Tambah Data User dan Admin</th>
<tr>
<form action="tamuser.php">
<input type="submit" name="tambah" value="Tambah User">
</form><th style="color:black; font-size:14;">Email</th>
<th style="color:black; font-size:14;">Password</th>
<th style="color:black; font-size:14;">Full Name</th>
<th style="color:black; font-size:14;">Address</th>
<th style="color:black; font-size:14;">Town</th>
<th style="color:black; font-size:14;">Country</th>
<th style="color:black; font-size:14;">Post Code</th>
<th style="color:black; font-size:14;">Level</th>
<th style="color:black; font-size:14;">Action</th>
</tr>
<?php
include "config/connection.php";
$select=mysql_query("SELECT * FROM users");
while($data = mysql_fetch_array($select)){
	echo "<tr>";
	echo "<form method='POST' action='edit.php?email=$data[email]'>";
	echo "<td style='color:black;font-size:13'>$data[email]</td>";
	echo "<td style='color:black;font-size:13'>$data[password]</td>";
	echo "<td style='color:black;font-size:13'>$data[full_name]</td>";
	echo "<td style='color:black;font-size:13'>$data[address]</td>";
	echo "<td style='color:black;font-size:13'>$data[town]</td>";
	echo "<td style='color:black;font-size:13'>$data[country]</td>";
	echo "<td style='color:black;font-size:13'>$data[postcode]</td>";
	echo "<td style='color:black;font-size:13'>$data[level]</td>";
	
	echo "<td>";
	echo "<a href='edit.php?email=$data[email]'><img src='1.png'width='50'height='auto'></a>";
	echo "<a href='delete.php?email=$data[email]'><img src='2.png'width='25'height='auto'></a>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
?>
</div>
</div>
<div id="foot">
@copyright 2014 by Christian.
</div>
</div>
</body>
</head>
</html>
</html>
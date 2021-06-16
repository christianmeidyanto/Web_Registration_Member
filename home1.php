<html>
<head>
<title>Pendaftaran</title>
</head>
<link rel="stylesheet" type = "text/css" href ="style.css">
<body>

<?php 
include"k.php";
$select = mysqli_query ($db,'SELECT * FROM users');
while($data = mysqli_fetch_array($select)){
  echo"
      Selamat Datang $data[level]
";
}
?>
</body>
</head>
</html>
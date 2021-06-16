<?php
include('k.php');
$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
$nomr = $_POST['nomr'];
$keca = $_POST['keca'];
$kelu = $_POST['kelu'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jenis_kerjaan = $_POST['jenis_kerjaan'];

$query = mysql_query("insert into pendaftarananggota values('$nama', '$alamat', '$nomr', '$keca','$kelu','$rt','$rw','$jenis_kelamin','$jenis_kerjaan','')");

if ($query) {
	header('location:data1.php?message=SUSKES');
}
?>
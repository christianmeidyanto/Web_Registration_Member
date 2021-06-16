<?php
session_start();
include('K.php');
$tambah = mysql_query("update pendaftarananggota set nama='$_GET[nama]'
,alamat='$_GET[alamat]', nomr='$_GET[nomr]'
,keca='$_GET[kec]',kelu='$_GET[kel]'
,rt='$_GET[rt]', rw='$_GET[rw]'
,jenis_kelamin='$_GET[jenis_kelamin]',jenis_kerjaan='$_GET[jenis_kerjaan]'
where id_pend='$_GET[id_pend]'");
if($tambah){
    header('location:data1.php');
}else{
echo "<script>alert('Anda Gagal Mengupdate'); window.location = 'data1.php'</script>";
}
?>
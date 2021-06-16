<?php
session_start();
include('K.php');
$tambah = mysql_query("update pendaftarananggota set nama='$_GET[nama]'
,alamat='$_GET[alamat]', nomr='$_GET[nomr]'
,keca='$_GET[kec]',kelu='$_GET[kel]'
,rt='$_GET[rt]', rw='$_GET[rw]'
,jenis_kelamin='$_GET[jenis_kelamin]',jenis_kerjaan='$_GET[jenis_kerjaan]'
,stat='$_GET[stat]'
where id_pend='$_GET[id_pend]'");
if($tambah){
    header('location:data4.php');
}else{
echo "<script>alert('Anda Gagal Mengupdate'); window.location = 'data3.php'</script>";
}
?>
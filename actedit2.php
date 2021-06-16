<?php
session_start();
include('K.php');
$tambah = mysql_query("update admin set username='$_GET[username]'
,password='$_GET[password]' where id_admn='$_GET[id_admn]'");
if($tambah){
    header('location:data5.php');
}else{
echo "<script>alert('Anda Gagal Mengupdate'); window.location = 'data5.php'</script>";
}
?>
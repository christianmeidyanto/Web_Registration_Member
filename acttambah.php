<?php
include('k.php');
$query = mysql_query("insert into admin values('$_POST[username]','$_POST[nama_admn]', 
'$_POST[password]','$_POST[level]','','$_POST[email]','$_POST[block]')") or die(mysql_error());

if ($query) {
    header('location:data.php');
}
else{
echo "<script>alert('Anda Gagal Menambah'); window.location = 'home.php'</script>";
}
?>

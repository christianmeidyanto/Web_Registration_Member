<?php
include('k.php');

$id_pend= $_GET['id_pend'];

$query = mysql_query("delete from pendaftarananggota where id_pend='$id_pend'") or die(mysql_error());

if ($query) {

    header('location:data1.php?message=delete');
}
?>
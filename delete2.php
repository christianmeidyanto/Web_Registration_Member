<?php
include('K.php');

$id_admn= $_GET['id_admn'];

$query = mysql_query("delete from admin where id_admn='$id_admn'") or die(mysql_error());

if ($query) {

    header('location:data5.php?message=delete');
}
?>
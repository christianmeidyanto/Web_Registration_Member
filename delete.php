<?php
include('K.php');

$email= $_GET['email'];

$query = mysql_query("delete from users where email='$email'") or die(mysql_error());

if ($query) {

    header('location:ma.php?message=delete');
}
?>
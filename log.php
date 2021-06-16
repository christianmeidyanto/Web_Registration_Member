<?php
include "k.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$login= mysqli_query($db,"SELECT * FROM admin WHERE 
username = '$_POST[username]' AND password='$_POST[password]'");
$a = mysqli_Fetch_array($login);
$b = mysqli_num_rows($login);

if ($b>0){
  session_start();
  $_SESSION['username']     = $a['username'];
  $_SESSION['password']     = $a['password'];
  $_SESSION['level']    = $a['level'];
  
  
  if($_SESSION['level']==1){
	header('location:home.php');
  } else if($_SESSION['level']==2){
	header('location:home1.php');
  }
  else if($_SESSION['level']==3){
	header('location:data6.php');
  }
}
else{
  include "error.php";
}
?>

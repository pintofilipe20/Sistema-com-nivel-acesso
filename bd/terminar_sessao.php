<?php 

session_start();
unset( $_SESSION['admin'],$_SESSION['user_normal']);
header('Location:../index.php');

 ?>
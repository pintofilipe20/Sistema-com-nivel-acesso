<?php 

session_start();

if(!$_SESSION['admin']){

header("Location:../index.php");

}
?>
<!DOCTYPE html>
<html>
<head lang="put">
	<meta charset="utf-8">
	<title>User Admin</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<center><h1 style="margin-top: 10%;">BEM VINDO <?php echo $_SESSION['admin']; ?> <br><a href="bd/terminar_sessao.php">sair</a></h1></center>
</body>
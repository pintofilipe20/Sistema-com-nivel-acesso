<?php 

session_start();

if(!$_SESSION['user_normal']){

header("Location:../index.php");

}

?>
<!DOCTYPE html>
<html>
<head lang="put">
	<meta charset="utf-8">
	<title>User Normal</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<center><h1 style="margin-top: 10%;">BEM VINDO USUÁRIO <?php echo $_SESSION['user_normal']; ?> <br><a href="bd/terminar_sessao.php">sair</a></h1></center>
</body>
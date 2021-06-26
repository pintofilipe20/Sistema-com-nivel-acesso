<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="put">
	<meta charset="utf-8">
	<title>Login Com Nível de Acesso</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<section class="login">
	<div class="adminlogin">
			<center><h1>LOGIN-NÍVEL-ACESSO</h1></center>
	<?php if(isset($_SESSION['erro'])){ ?>
	<div class="adminaviso">
		<p>Dados incorrectos,tente Novamente!</p>
	</div>	
	<?php
	 } 
      unset($_SESSION['erro']); 
	?>
		<form method="POST" action="bd/login.php">
			<div class="form-group">
				<input type="text" name="email" placeholder="Insira o email.." class="form-input">
				<div class="input-icon">
					<i class="fa fa-user"></i>
				</div>
			</div>
			<div class="form-group">
				<input type="password" name="senha" placeholder="Insira a Senha.." class="form-input">
				<div class="input-icon">
					<i class="fa fa-lock"></i>
				</div>
			</div>
             <button type="submit" class="btnlogin">Entrar</button>
		</form>
	</div>
	</section>
</body>
</html>
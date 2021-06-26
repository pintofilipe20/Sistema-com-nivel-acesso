<?php 

	include_once("conexao.php");

	if(isset($_POST['email']) && isset($_POST['senha'])){

	$email=$_POST['email'];
	$senha=$_POST['senha'];

	$sql=("SELECT * FROM usuarios WHERE email='$email' and senha='$senha'");
	$consulta=mysqli_query($conexao,$sql);	
	$contador=mysqli_num_rows($consulta);

	if($contador==1) {
		while($dados=mysqli_fetch_array($consulta)){

			$acesso=$dados['acesso'];
			//$nome=$dados['nome'];
			//$id_pesq=$dados['id'];

			session_start();

			if($acesso == 1){
				$_SESSION['admin']="Admin";
				header('Location:../usuario_admin.php');
			}
			else{
				$_SESSION['user_normal']="Mixeiro";;
				header('Location:../usuario_normal.php');
			}

		}

	}
	else{
		session_start();
		$_SESSION['erro']=true;
		header('Location:../index.php');
	}
}
?>
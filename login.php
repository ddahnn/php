<?php 
$user = "admin@email.com";
$pass = "teste";

$usuarios = [
	"admin@email.com" => "teste",
	"teste@email.com" => "1234",
	"fe@email.com"	=> "5678"
];
if ( isset($_POST['logar']) ) {
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	//if ($email == $user AND $senha == $pass) {
	if ( array_key_exists($email, $usuarios) ) {
		if ($usuarios[$email] == $senha) {
			//Inicia a sessão
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['ativa'] = true;
			header("location: admin.php");
		}else{
			echo "Senha incorreta!";
		}		
	}else{
		echo "E-mail incorreto!";
	}
}

//Inicia Sessão
/*
session_start();
$_SESSION['email'] = "admin@email.com";
$_SESSION['ativa'] = true;
echo "<a href='admin.php'>Acessar área administrativa</a>";
*/

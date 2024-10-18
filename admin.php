<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Área Admin</title>
</head>
<body>
<?php if (isset($_SESSION['ativa'])) {	?>
	
	<h1>Bem vindo a área administrativa do site!</h1>
	<h3>Olá usuário, <?php echo $_SESSION['email']; ?></h3>
	<p>Conteúdo restrito do site...</p>

	<a href="logout.php">Sair (deslogar)</a>

<?php } else {
		echo "Sem autorização de acesso!";
	} ?>
	
</body>
</html>
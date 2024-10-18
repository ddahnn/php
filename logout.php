<?php 

session_start();

//Limpar os caches da sessão
session_unset();

//Encerra a sessão
session_destroy();

echo "Deslogado com Sucesso!";
header("location:index.php");
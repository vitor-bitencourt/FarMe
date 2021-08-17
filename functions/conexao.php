<?php
$conexao = mysqli_connect("localhost","root","","farme") or die ("Erro de conexão com localhost, o seguinte erro ocorreu --> ".mysqli_connect_error());
include 'functions.php';
$pdo = pdo_connect_mysql();
?>
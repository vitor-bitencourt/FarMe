<?php 
  //Conexão com o Banco de Dados
  function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'farme';

    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// Erro na conexão
    	die ('Erro ao conectar com o Banco de Dados!');
    }
  }
  
  function template_header(){
    echo <<<EOT
    <!DOCTYPE html>
    <html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link href="../style/functions.css" rel="stylesheet" type="text/css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,700;1,300;1,400&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
            <title>FarMe</title>
        </head>
          <header>
            <img class="logo" src="../assets/images/logo.png" alt="logo" height="40px">
            <nav>
              <ul class="nav_links">
                <li><a href="#">FarMe</a></li>
                <li><a href="#">Sobre Nós</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Login</a></li>
              </ul>
            </nav>              
          </header>
    </html>
    EOT;
  }
?>
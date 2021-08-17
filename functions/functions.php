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
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link href="../style/functions.css" rel="stylesheet" type="text/css">
            <title>FarMe</title>
        </head>
          <header>
            <img class="logo" src="../assets/images/logo.png" alt="logo" height="40px">
            <nav>
              <ul class="nav_links">
                <li><a href="#">FarMe</li>
                <li><a href="#">Sobre Nós</li>
                <li><a href="#">Contato</li>
                <li><a href="./cadastro_page.php">Login</li>
              </ul>
            </nav>              
          </header>

          

    </html>
EOT;
}
?>
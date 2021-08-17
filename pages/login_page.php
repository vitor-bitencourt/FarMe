<?php 
  include '../functions/functions.php'
?>

<?=template_header()?>

<link href="../style/login_page.css" rel="stylesheet" type="text/css">

<form method="post" action="../functions/login.php">
  <br><br><br>
  <h1>Login</h1>
  <p>
    <label for="email_login">Seu e-mail</label>
    <input id="email_login" name="email_login" required="required" type="text" placeholder="contato@htmlecsspro.com" />
  </p>

  <p>
    <label for="senha_login">Sua senha</label>
    <input id="senha_login" name="senha_login" required="required" type="password" placeholder="1234" />
  </p>

  <p>
    <input type="submit" value="Logar" />
  </p>

  <p class="link">
    Ainda não tem conta?
    <a href="../pages/cadastro_page.php">Cadastre-se</a>
  </p>
</form>
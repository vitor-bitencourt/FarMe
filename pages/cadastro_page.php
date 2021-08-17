<?php 
  include '../functions/functions.php'
?>

<?=template_header()?>

<link href="../style/cadastro_page.css" rel="stylesheet" type="text/css">



<form method="post" action="../functions/cadastro.php">
  <br><br><br>
  <h1>Cadastro</h1>

  <p>
    <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Nome" />
  </p>

  <p>
    <input id="email_cad" name="email_cad" required="required" type="email" placeholder="Email" />
  </p>


  <p>
    <input id="telefone_cad" name="telefone_cad" required="required" type="text" placeholder="Telefone" />
  </p>


  <p>
    <select id="atv_cad" name="atv_cad" required="required">
      <option disable select>Principal atividade</option>
      <option value="1">Grãos</option>
      <option value="2">Algodão</option>
      <option value="3">Hortifruti</option>
      <option value="4">Café</option>
      <option value="5">Não se aplica</option>
    </select>
  </p>

  <p>
    <select id="atv_cad" name="tamanho_cad" required="required">
      <option disable select>Qual o tamanho da sua propriedade?</option>
      <option value="1">Até 10 ha</option>
      <option value="2">De 10,1 à 25 ha</option>
      <option value="3">De 25,1 à 50 ha</option>
      <option value="4">De 50,1 à 100 ha</option>
      <option value="5">Acima de 100 ha</option>
    </select>
  </p>

  <p>
    <select id="atv_cad" name="uso_cad" required="required">
      <option disable select>Já usou algum software de gestão agrícola?</option>
      <option value="1">Sim</option>
      <option value="0">Não</option>
    </select>
  </p>

  <p>
    <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="Senha" />
  </p>

  <p>
    <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="Confirma senha" />
  </p>

  <p>
    <input type="submit" value="Cadastrar" />
  </p>

  <p class="link">
    Já tem conta?
    <a href="../pages/login_page.php"> Ir para Login </a>
  </p>
</form>
<html>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

<link href="../style/cadastro_page.css" rel="stylesheet" type="text/css">

<div id="cad_page"> 
    <img src="../assets/images/Illustration.svg" id="cad_img"/>

    
    <h2> Gerencie sua fazenda <br>
         de forma rápida <br>
         e eficiente! </h2>
    
</div>

<img src="../assets/images/logo.png" id="logo_img"/>

<form method="post" action="../functions/cadastro.php">
  <br><br><br>

  <h1>Cadastro</h1>

  <p>
    <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Luiz Augusto" />
  </p>

  <p>
    <input id="email_cad" name="email_cad" required="required" type="email" placeholder="Email" />
  </p>


  <p>
    <input id="telefone_cad" name="telefone_cad" required="required" type="text" placeholder="Telefone" />
  </p>


  <p>
    <select id="atv_cad" name="atv_cad" required="required">
      <option value="placeholder">Principal atividade</option>
      <option value="1">Grãos</option>
      <option value="2">Algodão</option>
      <option value="3">Hortifruti</option>
      <option value="4">Café</option>
      <option value="5">Não se aplica</option>
    </select>
  </p>

  <p>
    <select id="atv_cad2" name="tamanho_cad" required="required">
      <option value="placeholder">Qual o tamanho da sua propriedade?</option>
      <option value="1">Até 10 ha</option>
      <option value="2">De 10,1 à 25 ha</option>
      <option value="3">De 25,1 à 50 ha</option>
      <option value="4">De 50,1 à 100 ha</option>
      <option value="5">Acima de 100 ha</option>
    </select>
  </p>

  <p>
    <select id="atv_cad3" name="uso_cad" required="required">
      <option value="placeholder">Já usou algum software de gestão agrícola?</option>
      <option value="1">Sim</option>
      <option value="0">Não</option>
    </select>
  </p>

  <p>
    <input id="senha_cad1" name="senha_cad" required="required" type="password" placeholder="Senha" />
  </p>

  <p>
    <input id="senha_cad2" name="senha_cad" required="required" type="password" placeholder="Confirma senha" />
  </p>

  <p>
    <input type="submit" value="Cadastrar" id="cad"/>
  </p>

  <p class="link" id="link_cad">
    Já possui uma conta?
    <a href="../pages/login_page.php"> Ir para Login </a>
  </p>
</form>
</html>
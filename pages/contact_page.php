<?php 
  include '../functions/functions.php'
?>

<?=template_header()?>

<link href="../style/contact_page.css" rel="stylesheet" type="text/css">
<br><br>

<div id="contact-page">

  <aside>

  </aside>


  <main>
    <div class="main-content">
      <h1>Quer saber mais sobre o FarMe?</h1>
      <h4>Entre em contato conosco!</h4>

      <form method="post" action="../functions/contact.php" id="contact-form">
        <input type="text" id="name_email" name="name_email" required="required" placeholder="Nome" />
        <input type="text" id="phone_email" name="phone_email" required="required" placeholder="Telefone" /><br>
        <input type="text" id="email" name="email" required="required" placeholder="Email" />
        <select id="atv_email" name="atv_email" required="required">
          <option disable select>Principal atividade</option>
          <option value="1">Grãos</option>
          <option value="2">Algodão</option>
          <option value="3">Hortifruti</option>
          <option value="4">Café</option>
          <option value="5">Não se aplica</option>
        </select><br><br>
        <textarea name="message" id="message" cols="30" rows="10" required="required"
          placeholder="   Escreva sua mensagem"></textarea><br><br>
        <button type="submit" name="send" id="send">Enviar</button>
      </form>
    </div>
  </main>
</div>
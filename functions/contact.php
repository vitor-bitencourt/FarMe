<?php
  echo"
  <script>
    function alerta(){
    alert('Seu email foi enviado com sucesso!')
    window.location.href = '../pages/contact_page.php';
    }
  </script>
";

  try {
    if (isset($_POST['Enviar'])) {
      $nome = $_POST['name_email'];
      $telefone = $_POST['phone_email'];
      $email = $_POST['email'];
      $atv = $_POST['atv'];
      $mensagem = $_POST['mensagem']; 
                
      $mailTo = "";
      $headers = "From: ".$email;
      $txt = "Voce recebeu um email de: ".$nome.".\n\n".$mensagem;
      $atv_msg = "Principal atividade: ".$atv;
                    
      mail($mailTo, $atv_msg, $txt, $headers); 
      echo"<script>alerta()</script>";
    }   
    } catch (Exception $th) {
        echo"Erro no envio";
   }
?>
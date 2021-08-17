<?php
  //Criação do Cadastro
	
	if (isset($_POST["nome_cad"])) {
		
		$nome_cad = $_POST["nome_cad"];
		$email_cad = $_POST["email_cad"];
    $telefone_cad = $_POST["telefone_cad"];
    $atv_cad = $_POST["atv_cad"];
    $tamanho_cad = $_POST["tamanho_cad"];
    $uso_cad = $_POST["uso_cad"];
		$senha_cad = $_POST["senha_cad"];

		// conectando com o Banco de Dados (MySql)
		include("conexao.php");
		
		// montando comando requisição SQL
		$sql = "INSERT INTO cadastro (Nome, Email, Telefone, Atividade, Tamanho, Usa_Sft, Senha) VALUES ('$nome_cad','$email_cad','$telefone_cad','$atv_cad','$tamanho_cad','$uso_cad','$senha_cad');";
        
		// envidado requisição ao Banco de Dados (MySql)
		$resultado = mysqli_query($conexao,$sql) or die (mysqli_error($conexao));  

		// encerrando conexão com Banco de Dados (MySql)
        mysqli_close($conexao);
		echo "<script language='javascript' type='text/javascript'>
    alert('Cadastro feito com sucesso');window.location
    .href='../pages/home.php';</script>";;
	
	}
?>
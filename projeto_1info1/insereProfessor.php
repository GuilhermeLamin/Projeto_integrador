<?php
	print_r($_POST);

  $origem = $_FILES['foto']['tmp_name'];

  $destino = "imagens/professores/".$_FILES['foto']['name'];
  
    move_uploaded_file($origem, $destino);

/*
 	$siape= $_POST ['siape'];
 	$nome = $_POST ['nome'];
 	$email = $_POST ['email'];
 	$foto = $_POST ['foto'];

 	$linha = "\n".$siape.",".$nome.",".$email.",".$foto;
	
	
	$arquivo = fopen("dados/professores.csv", "a+");

	
	fwrite($arquivo, $linha);

	
	fclose($arquivo);

echo('<meta http-equiv="refresh"content=0;url=listaProfessores.php>');


?>

*/
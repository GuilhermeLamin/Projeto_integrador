<?php
	


 	$nome= $_POST ['siape'];
 	$telefone = $_POST ['nome'];
 	$email = $_POST ['email'];
 	$foto = $_POST ['foto'];

 	$linha = $siape.",".$nome.",".$email.",".$foto;
 	print($linha);
	
	//ABRIR O ARQUIVO EM MODOD DE ESCRITA 
	$arquivo = fopen("dados/professores.csv", "a+");

	//ESCREVER O TESTO NO ARQUIVO
	fwrite($arquivo, "\n.$linha");

	//FECHAR O ARQUIVO, PARA SALVÁ-LO
	fclose($arquivo);


	}

?>
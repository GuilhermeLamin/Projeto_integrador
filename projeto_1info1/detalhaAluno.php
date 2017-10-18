<?php


   include("cabecalho.php");
   include("alunos.php");

   $matricula = $_GET['cod'];

if($matricula!=''){ // se nao tiver valor no siape
   $aluno = buscaAluno($matricula);
  ?>
  
  <div class="detalhes-aluno">
	<img src="<?=$aluno['foto']?>">
  	<p><?=$aluno['foto']?></p>
  	<p><?=$aluno['email']?></p>
  </div>	


<?php
}else{

	echo('<meta http-equiv="refresh" content="0;url=listaAlunos.php">');
}
   include("rodape.php");


?>
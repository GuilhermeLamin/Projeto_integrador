<?php

     include("cabecalho.php");
     include("alunos.php");

?>
  <!-- conteudo principal -->
  <article class="coluna80">
    <section class="lista">
    <ul>
<?php


        $lista = listaAlunosTurma('1info1');


        foreach ($lista as $aluno) {
    	
?>

   	      <li><a href="detalhaAluno.php?cod=<?=$aluno['matricula'] ?>" ><?=$aluno['nome'] ?> </a></li>


<?php
    }
?>

    </ul>
  </section>
  </article>

<?php
    include("rodape.php");

?>
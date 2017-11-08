<?php

     include("cabecalho.php");
     include("alunos.php");

?>
  <!-- conteudo principal -->
  <article class="coluna80">
    <section class="lista">
      <h2>1info1</h2>
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


<section class="lista">
      <h2>1info2</h2>
    <ul>
<?php


        $lista = listaAlunosTurma('1info2');


        foreach ($lista as $aluno) {
    	
?>

   	      <li><a href="detalhaAluno.php?cod=<?=$aluno['matricula'] ?>" ><?=$aluno['nome'] ?> </a></li>


<?php
    }
?>

    </ul>
  </section>
  <section class="lista">
      <h2>1info3</h2>
    <ul>
<?php


        $lista = listaAlunosTurma('1info3');


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
<?php

     include("cabecalho.php");
     include("professores.php");


        $lista = listaProfessores();


        foreach ($lista as $professor) {
    	
?>


     <div class="lista-professor">
   	
   	    <img src="<?=$professor['foto'] ?>">

   	      <h2><a href="detalhaProfessor.php?cod=<?=$professor['siape'] ?>" ><?=$professor['nome'] ?> </a></h2>

    </div>

<?php
    }

    include("rodape.php");

?>
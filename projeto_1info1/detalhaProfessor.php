<?php


   include("cabecalho.php");
   include("professores.php");

   $siape = $_GET['cod'];

   $professor = buscaProfessor($siape);
  ?>
  <div class="detalhes-professor">

  	<img src="<?=professor['foto']?>">
  	<p>"<?=professor['foto']?>">
  	<p>email</p>>
  </div>	
<?php
   include("rodape.php");
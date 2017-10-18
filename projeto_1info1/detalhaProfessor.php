<?php


   include("cabecalho.php");
   include("professores.php");

   $siape = $_GET['cod'];

  ?>
  
  <div class="detalhes-professor">
	<img src="<?=$professor['foto']?>">
  	<p><?=$professor['foto']?></p>
  	<p><?=$professor['email']?></p>
  </div>	


<?php

   include("rodape.php");


?>
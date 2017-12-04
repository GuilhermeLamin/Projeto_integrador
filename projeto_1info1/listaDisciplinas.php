
<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<script type="text/javascript" src="js/script.js"></script>


<?php
	include("cabecalho.php");
	include("disciplinas.php");
?>	

	<article class= "coluna">
	<section class= "lista">
			<h2>Disciplinas</h2>
			<ul>
<?php
	$lista = listaDisciplinas();

	foreach ($lista as $disciplina){
		print('<li>'.$disciplina['nome'].'</li>');
	}
?>
		     </ul>
		</section>
	</article>

<?php
	include("rodape.php");
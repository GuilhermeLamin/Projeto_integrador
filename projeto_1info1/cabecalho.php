<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<script type="text/javascript" src="js/script.js"></script>

	<title>Todos professores</title>
	<meta charset="utf-8">
</head>
<body>
	<!-- cabeçalho -->
	<header>
		<img src="imagens/ifc.png" id="logo"/>
		<h1 id="nome_site">Instituto Federal Catarinense</h1>
		<div id="perfil">
<?php
	//isset()- verifica se uma variavel esta definida
if (isset($_SESSION['login'])) {

?>

		<!--MENSAGEM QUANDO LOGADO -->
		<p>Usuário: Administrador</p>
		<a href="logout.php">Sair</a>

<?php
}else{
?>

	<!--Formulario de login-->
	<a  class="entrar">Clique aqui para efetuar o login</a>

		<form method="post" action="login.php" id="formEntrar" class="escondido">
				<label for="login">Login</label>
				<input type="text" name="login" class="login1">
<br>
				<label for="senha">Senha</label>
				<input type="password" name="senha" class="senha1">
<br>
				<input type="submit" name="enviar" class="enviar">
		</form>
	<!--Formulario de login-->

<?php
}
?>
		</div>

	</header>
	<div class='divider'></div>
	<!-- menu -->
	
	<nav class="menu">
		<a href=""><section class="item menu">Próximas tarefas</section></a>
		<a href=""><section class="item menu">Todas Tarefas</section></a>
		<a href="listaDisciplinas.php"><section class="item menu">Tarefas por disciplina</section></a>
		<a href=""><section class="item menu">Tarefas por data</section></a>
		<a href="listaProfessores.php"><section class="item menu">Professores</section></a>
		<a href="listaAlunos.php"><section class="item menu">Colegas</section></a>
	</nav>
	<div class='divider'></div>

	<!-- colunas para centralizar -->
	<div class="coluna10">.</div>

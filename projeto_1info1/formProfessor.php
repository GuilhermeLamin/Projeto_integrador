<?php
        include("cabecalho.php");

?>

     <article class="coluna80">
<?php
//isset - is set - está definida?
if(isset($_SESSION['login'])){
?>     
        <form method="post" action="insereProfessor.php">
     	<h3>Informações do novo professor</h3>
        <br>
     	<label for="siape">SIAPE:</label>
     	 <input type="text" name="siape" class="espaco_input">
        <br>
     	<label for="nome">Nome:</label>
     	 <input type="text" name="nome" class="espaco_input">
        <br>
     	<label for="E-mail">E-mail:</label>
     	 <input type="text" name="E-mail" class="espaco_input">
        <br>
     	<label for="foto">Foto:</label>
     	 <input type="text" name="foto" class="espaco_input">
     	<br>

       <input type="submit" value="Cadastrar professor">
       </form>
<?php
}else{
  echo("acesso negado");
}
?>
     </article>
<?php
   include("rodape.php")
?>

<?php
include_once "Galeria.php";
$a=new Galeria);
$b=$a->getById($_GET['id']);
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="design.css">
<title>Mostrar <?php echo $b->getNome(); ?></title>
</head></html>
<?php
echo "<br>Id:".$b->getId();
echo "<br>Nome:".$b->getNome();
echo "<br>Autor:".$b->getAutor();
echo "<br>Ano:".$b->getAno();
echo "<br>Tipo:".$b->getTipo();

echo "<a href=editar.php?acao=editar&id=".$b->getId().">Editar</a> 
<br><a href=processa.php?acao=excluir&id=".$b->getId();
?>

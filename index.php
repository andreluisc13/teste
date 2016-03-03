<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Obras</title>
</head>
<body>
<br><br>
<div id="formulario">
<form name="inscricaoUA" action="processa.php" enctype="multipart/form-data" method="POST" onsubmit="return enviarDados();">

<input type="text" style=width:200px name="id" placeholder="Id"><br><br>
<input type="text" style=width:200px name="nome" placeholder="Nome"><br><br>
<input type="text" style=width:200px name="autor" placeholder="Autor"><br><br>
<input type="text" style=width:200px name="ano" placeholder="ano"><br><br>
<input type="text" style=width:200px name="tipo" placeholder="Tipo"><br><br>

<input type="submit" name="acao" value="Cadastro"><br><br>
</div>

</form>
</body>
</html>
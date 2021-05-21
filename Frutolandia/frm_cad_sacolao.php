<!DOCTYPE html>
<html>
	<head>
		<title>Inserir Sacolão</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<h1 align="center"> Trabalho de programação (DAO) - 11/09/2020</h1>
		<h2 align="center"> Inserção ao carrinho (Sacolão)</h2>
		<form action="sacolao/inserir.php" method="POST" align="center">
			<div>Código cliente</div>
			<input type="number" name="cod_cli" value="" autocomplete="off"><br><br>
			<div>Código fruta</div>
            <input type="number" name="cod_fruta" value="" autocomplete="off"><br><br>
            <div>Quantidade total:</div>
            <input type="number" name="qtd_total" value="" autocomplete="off"><br><br>
            <div>Valor total:</div>
			<input type="number" name="valor_total" value="" autocomplete="off"><br><br>
			<input type="submit" name="salvar" value="Salvar">
		</form>
	
	</body>
</html>
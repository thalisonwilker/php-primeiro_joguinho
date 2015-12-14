<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{
		font-family: Arial 14px;
		background-color: green;
		color: black;
		text-align: center;
	}
	a{
		font-family: Arial 14px;
		background-color: green;
		color: black;
		text-align: center;
	}
	a:hover{
		font-size: 40px;
		cursor: auto;
	}
	</style>
<script type="text/javascript">

	function volter(){
		javascript:history.back();

	}


</script>
</head>
<body>

<?php
$num = rand (1,5);
$chute = $_POST["chute"];
$chute = htmlspecialchars($chute);
$code_erro = 0;

if ($chute > 5) {
	echo "<html><header><meta charset = 'utf-8'><title>LOL</title></header><body><h2><br/><br/><br/><br/>escolhe um número entre 1 e 5 porra!</h2>";
	echo "<a href = 'javascript:history.back()'>voltar</a><br/>";
	echo "</body><html>";
	$code_erro = 1;
}
if ($code_erro != 1) {
	if ($num == $chute) {
		echo "<html><header><meta charset = 'utf-8'></header><body><h2><br/><br/><br/><br/>$chute Na mosca!<br/>Você acertou!!!</h2>";
		echo "<a href = 'javascript:history.back()'>jogar novamente</a><br/>";
		echo "<img src = 'acerto.png'/>";
		echo "</body><html>";
	}else{
		echo "<html><body><h2><br/><br/><br/><br/>Erradooo !!<br/>Eu escolhi $num</h2>";
		echo "<a href = 'javascript:history.back()'>tentar novamente</a><br/>";
		echo "<img src = 'erro.png'/>";
		echo "</body><html>";
	}
}

?>
</body>
</html>

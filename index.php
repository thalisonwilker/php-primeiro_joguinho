<!DOCTYPE>
<html>
<head>
	<meta charset = "utf-8">
	<title>Jogo do acerta número!</title>
	<style type="text/css">
	body{
		background-color: green;
		color: black;
	}
	h2{
		font-family: Arial;
	}
	h3{
		font-family: Arial;
	}
	p{
		text-align: center;
	}
	input{
		font-family: Arial;
		font-size: 20px;
		background-color: green;
		color: white;
	}
	a{
		font-family: Arial;
		font-size: 20px;
		text-decoration: none;
		text-align: center;
		}
	a:hover{
		font-size: 30px;
		color: black;
		}

	</style>
	<script type="text/javascript">
	function alerta(){
		alert("a cada erro ou acerto eu gero outro número!");
	}

	</script>
	<script type="text/javascript">
	</script>
</head>
<body>

	<nav class="menu">
	    <ul type = "none">
	    	<li><p><a href="#">Sobre</a></p></li>
			<li><p><a href="#">Estatísticas</a></p></li>
			<LI><p><a href="http://pudim.com.br/" target="aboutblanck">Site do pudim</a></p></LI>
	    </ul>
	</nav>

	<h2 align="center"><br/><br/><br/>Escolhi um númeor entre 1 e 5, tente acertar.<br/>Boa sorte!<br></h2>
	<h3 align="center">Digite aqui seu chute e aperte enter!<br/></h3>
	<p align="center">
		<form method = "POST" action = "checar.php">
			<p>
				<input type = "text" name = "chute" size="3">
				<br/>
				<br/>
			<input  type="submit" name = "enviar" value = "Checar!" >
		</p>
		<p>
			<a href="" onclick="alerta()">+info</a></p>
		</form>
	</p>		

</body>
</html>

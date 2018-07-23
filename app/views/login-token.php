<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<center><h1>Totem</h1></center>
	<div class="welcome">
		<form action="/token" method="post">			
			Usuário : <input type="text" name="login" ><br><br>
		  	Senha : <input type="text" name="senha" ><br><br>
		  <input type="submit" value="Acessar">
		</form>
	</div>
</body>
</html>

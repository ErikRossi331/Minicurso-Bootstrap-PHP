<!DOCTYPE HTML>
	<head>
		<title> Formulário de Cadastro</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<meta charset="utf-8">

<style type="text/css">
	
	.container {

		padding: 200px;
		width: 880px;

	}

	.border {

		border: 5px solid #8c8c8c;
		padding: 50px;
		background-color: white;

	}

	body {

		background-color: #f2f2f2;
	}

</style>

	</head>
	<body>

<form action="cadastro.php" method="POST">

<div class="container">
	<div class="border">
	<center>

	<h2> Cadastre-se </h2></center>
	<br>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome:</label>
    <input type="nome" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">E-mail:</label>
    <input type="email" class="form-control" name="email" id="exampleInputPassword1">
    <div id="emailHelp" class="form-text">Nós não compartilhamos seu E-mail com ninguém.</div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Lembre-se de mim</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
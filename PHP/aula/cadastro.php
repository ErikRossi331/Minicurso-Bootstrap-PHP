<!DOCTYPE HTML>
	<head>
		<title> Cadastro Realizado </title>
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


<div class="container">
	<div class="border">
	<center>

	<h2> Cadastro Realizado </h2></center>
	<br>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome Cadastrado:</label><br><b>
    <?php
    echo $_POST['nome'];

    ?>
</b>

<hr>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">E-mail Cadastrado:</label><br><b>
<?php
    echo $_POST['email'];

    ?>
</b>
  </div>
  <div class="mb-3 form-check">
  </div>
 


</form>
 <a href="index.php">
  <button class="btn btn-primary">Voltar</button></a>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
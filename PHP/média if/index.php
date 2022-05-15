<!DOCTYPE HTML>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php 

		$nota1 = 10;
		$nota2 = 9;
		$nota3 = 8;
		$nota4 = 6;

		$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

		if($media >= 7) {

			Echo "<font color='green'>Aluno Aprovado!</font><br> Média = $media";

		}

		elseif($media >= 5 ) {

			echo "<font color='yellow'>Aluno de Recuperação</font><br> Média = $media";

		}

		else {

			echo "<font color='red'>Aluno Reprovado!</font><br> Média = $media";

		}


	?>
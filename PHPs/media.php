<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="styelsheet" type="text/css" href=""/>
	</head>
	<body>
		<center>
			<?php
				$nome = $_POST['nomeAl'];
				$cond = "";
				
				$pBim = $_POST['bim1'];
				$sBim = $_POST['bim2'];
				$tBim = $_POST['bim3'];
				$qBim = $_POST['bim4'];
				$MD = ($pBim + $sBim + $tBim + $qBim)/4;
				
				if($MD >=5) $cond = "APROVADO";
				else $cond = "REPROVADO";
				
				echo "Colégio Palma Fernandez<br><br>";
				echo "O aluno ".$nome." foi ".$cond."<br>";
				echo "Pela média: ".$MD;
			?>
		</center>
	</body>
</html>
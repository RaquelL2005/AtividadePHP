<?php 
	echo "Exercício 1<br>";
	//Exercício 1
	$v1 = 10;
	$v2 = 5;
	$r = $v1 + $v2;
	//a
	if ($r <= 20) {
		$r = $r - 5;
		echo "É menor e/ou igual 20, então subtrai por 5 que fica ".$r;
	} else{ //b
		$r = $r + 8;
		echo "É maior que 20, então adiciona mais 5 que fica ".$r;
	}

	//Exercício 2
	echo "<br>Exercício 2<br>";
	$numero = 13;
	if (($numero % 10) == 0 || ($numero % 5) == 0 || ($numero % 2) == 0) {
		print($numero." é divisível por 10, por 5 ou por 2");
	} else {
		print($numero." não é divisível nem por 10, por 5 ou por 2");
	}

	//Exercício 3
	echo "<br>Exercício 3<br>";
	$nome = "Raquell";
	$idade = 5;
	$sexo = 1; // Masculino 2 e Feminino 1

	if ($sexo == 1 && $idade < 25) {
		echo $nome." ACEITA";
	} else {
		echo "NÃO ACEITA";
	}

	//Exercício 4
	echo "<br>Exercício 4<br>";
	$num1=1;
	$num2=2;
	$num3=3;

	if ($num1 > $num2) {
		if ($num1 > $num3) {
			if ($num2 > $num3) {
				print($num1." ".$num2." ".$num3);	
			}else{
				print($num1." ".$num3." ".$num2);
			}
		}else{
			print($num3." ".$num2." ".$num1);
		}
	}elseif ($num2 > $num3) {
		if ($num1 > $num3) {
			print($num2." ".$num1." ".$num3);	
		}else{
			print($num2." ".$num3." ".$num1);
		}
	}else{
		print($num3." ".$num2." ".$num1);
	}

	//Exercício 5
	echo "<br>Exercício 5<br>";
	$alt = 1.58;
	$idd = 16;
	$sx = 1; // Masculino 2 e Feminino 1 
	for ($p=0; $p <= 5; $p++) { 
		
	}
 ?>
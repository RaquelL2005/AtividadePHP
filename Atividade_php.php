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
	$alt1=1.60;
	$altM = 1.80;
	$altMM = 0.00;
	$altMrM = 0.00;
	$altNrM = 0.00;
	$altMrF = 0.00;
	$altNrF = 0.00;
	$altF = 0.00;
	$iddM = 16;
	$iddMM = 0;
	$iddMmr = 0;
	$iddF =19;
	$iddFF = 0;
	$iddFmr = 0;
	$sx = 1; // Masculino 2 e Feminino 1
	$contF = 0;
	$contM = 0;

	for ($p=0; $p <= 5; $p++) {
		echo "<br>Digite seu sexo: ";
		//sx
		switch ($sx) {
			case 1:
				echo "<br>Digite sua altura:";
				//Pega pelo alt
				$contF++;
				$altF = $alt + $altF;
				if ($alt > $alt1) {
					$altMrF = $alt;
					$altNrF = $alt1;
				}else {
					$altMrF = $alt1;
					$altNrF = $alt;
				}
				$alt1 = $alt;
				echo "<br>Digite sua idade";
				//pega pelo idd
				if ($iddF < $iddFF) {
					$iddFmr = $iddF;
				}else{
					$iddFmr = $iddFF;
				}
				$iddFF = $iddF;
				break;
			case 2:
				echo "<br>Digite sua altura:";
				//Pega pelo altM
				$contM++;
				if ($altM > $altMM) {
					$altMrM = $altM;
					$altNrM = $altMM;
				}else {
					$altMrM = $altMM;
					$altNrM = $altM;
				}
				$altMM = $altM;
				echo "<br>Digite sua idade";
				//pega pelo idd
				if ($iddM > $iddMM) {
					$iddMmr = $iddM;
				}else{
					$iddMmr = $iddMM;
				}
				$iddMM = $iddM;
				break;
			default:
				echo "Resposta inválida";
		}

	}

	$altF = $altF / $contF;
		if ($altMrM > $altMrF) {
			echo "<br>A altura maior é: ".$altMrM;
		}else{
			echo "<br>A altura maior é: ".$altMrF;
		}

		if ($altNrM < $altNrF) {
			echo "<br>A altura menor é: ".$altNrM;
		}else{
			echo "<br>A altura menor é: ".$altNrF;
		}

		print("<br>A média da altura das mulheres é: ".$altF);
		print("<br>A idade do homem mais velho é: ".$iddMmr."<br>E a idade da mulher mais nova é: ".$iddFmr);
 ?>
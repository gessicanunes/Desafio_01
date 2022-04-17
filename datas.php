<?php

/**
* Calcula o numero de dias entre 2 datas.
* As datas passadas sempre serao validas e a primeira data sempre sera menor que a segunda data.
* @param string $dataInicial No formato YYYY-MM-DD
* @param string $dataFinal No formato YYYY-MM-DD
* @return int O numero de dias entre as datas
**/
function calculaDias($dataInicial, $dataFinal) {
	/*
		- Setembro, abril, junho e novembro tem 30 dias, todos os outros meses tem 31 exceto fevereiro que tem 28, exceto nos anos bissextos nos quais ele tem 29.
		- Os anos bissexto tem 366 dias e os demais 365.
		- Todo ano divisivel por 4 e um ano bissexto.
		- A regra acima não e valida para anos divisiveis por 100. Estes anos devem ser divisiveis por 400 para serem anos bissextos. Assim, o ano 1700, 1800, 1900 e 2100 nao sao bissextos, mas 2000 e bissexto.
		- Não e permitido o uso de classes e funcoes de data da linguagem (DateTime, mktime, strtotime, etc).
	*/
	$anoInicial = substr($dataInicial, -10, 4);

if(substr($dataInicial, -5, 1) == 0){
$mesInicial = substr($dataInicial, -4, 1);
} else {$mesInicial = substr($dataInicial, -5, 2);}
$diaInicial = substr($dataInicial, -2, 2);
$anoFinal = substr($dataFinal, -10, 4);  
if(substr($dataFinal,-5, 1) == 0){
$mesFinal = substr($dataFinal, -4, 1);
} else {$mesInicial = substr($dataInicial, -5, 2);}
if(substr($dataFinal,-2, 1) == 0){
$diaFinal = substr($dataFinal, -1, 1);
} else {
$diaFinal = substr($dataFinal, -2, 2);	
}
$dataFinal = $anoFinal."-".$mesFinal."-".$diaFinal;

// Contadores
$fim = 0;

//Contadoras responsáveis por controlar Do While
$contAnos = 0;
$contMesses = $mesInicial;
$contDias = $diaInicial;

$contAnoFinal = $anoInicial;
$diasEntreDatas = 0;
$backupDias = 0;

do { 

	if($contAnoFinal%4 != 0){

		if($contMesses == 1){
			if($contDias <= 30){
				$contDias = ++$contDias;
				$diasEntreDatas = ++$diasEntreDatas;
			}
			  else if($contDias == 31){
				if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
					$backupDias = $backupDias + $contDias;	
				}else{
					$backupDias = $backupDias + $contDias;
					$contDias = 0;
					$contMesses = ++$contMesses;
				}
			  }
		}else if($contMesses == 2){
			if($contDias <= 27){
				$contDias = ++$contDias;
				$diasEntreDatas = ++$diasEntreDatas;
			}
			else if($contDias == 28){
				if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
					$backupDias = $backupDias + $contDias;	
				}else{
					$backupDias = $backupDias + $contDias;
					$contDias = 0;
					$contMesses = ++$contMesses;
				}
			}
		}else if($contMesses == 3){
			if($contDias <= 30){
				$contDias = ++$contDias;
				$diasEntreDatas = ++$diasEntreDatas;
			}
			  else if($contDias == 31){
				if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
					$backupDias = $backupDias + $contDias;	
				}else{
					$backupDias = $backupDias + $contDias;
					$contDias = 0;
					$contMesses = ++$contMesses;
				}
			  }
		}else if($contMesses == 4){
			if($contDias <= 29){
				$contDias = ++$contDias;
				$diasEntreDatas = ++$diasEntreDatas;
			}
		     else if($contDias = 30){
				if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
					$backupDias = $backupDias + $contDias;	
				}else{
					$backupDias = $backupDias + $contDias;
					$contDias = 0;
					$contMesses = ++$contMesses;
				}
			}
		}else if($contMesses == 5){
			if($contDias <= 30){
				$contDias = ++$contDias;
				$diasEntreDatas = ++$diasEntreDatas;
			}
			  else if($contDias == 31){
				if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
					$backupDias = $backupDias + $contDias;	
				}else{
					$backupDias = $backupDias + $contDias;
					$contDias = 0;
					$contMesses = ++$contMesses;
				}
			  }
		}else if($contMesses == 6){
			if($contDias <= 29){
				$contDias = ++$contDias;
				$diasEntreDatas = ++$diasEntreDatas;
			}
			else if($contDias = 30){
				if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
					$backupDias = $backupDias + $contDias;	
				}else{
					$backupDias = $backupDias + $contDias;
					$contDias = 0;
					$contMesses = ++$contMesses;
				}
			}
		}else if($contMesses == 7){
			if($contDias <= 30){
				$contDias = ++$contDias;
				$diasEntreDatas = ++$diasEntreDatas;
			}
			  else if($contDias == 31){
				if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
					$backupDias = $backupDias + $contDias;	
				}else{
					$backupDias = $backupDias + $contDias;
					$contDias = 0;
					$contMesses = ++$contMesses;
				}
			  }
		}else if($contMesses == 8){
			if($contDias <= 30){
				$contDias = ++$contDias;
				$diasEntreDatas = ++$diasEntreDatas;
			}
			else if($contDias == 31){
				if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
					$backupDias = $backupDias + $contDias;	
				}else{
					$backupDias = $backupDias + $contDias;
					$contDias = 0;
					$contMesses = ++$contMesses;
				}
			}
		}else if($contMesses == 9){
			if($contDias <= 29){
				$contDias = ++$contDias;
				$diasEntreDatas = ++$diasEntreDatas;
			}
			else if($contDias = 30){
				if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
					$backupDias = $backupDias + $contDias;	
				}else{
					$backupDias = $backupDias + $contDias;
					$contDias = 0;
					$contMesses = ++$contMesses;
				}	
			}
		}else if($contMesses == 10){
			if($contDias <= 30){
				$contDias = ++$contDias;
				$diasEntreDatas = ++$diasEntreDatas;
			}
			  else if($contDias == 31){
				if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
					$backupDias = $backupDias + $contDias;	
				}else{
					$backupDias = $backupDias + $contDias;
					$contDias = 0;
					$contMesses = ++$contMesses;
				}
			  }
		}else if($contMesses == 11){
			if($contDias <= 29){
				$contDias = ++$contDias;
				$diasEntreDatas = ++$diasEntreDatas;
			}else if($contDias = 30){
				if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
					$backupDias = $backupDias + $contDias;	
				}else{
					$backupDias = $backupDias + $contDias;
					$contDias = 0;
					$contMesses = ++$contMesses;
				}
			}
		}else if($contMesses == 12){
			if($contDias <= 30){
				$contDias = ++$contDias;
				$diasEntreDatas = ++$diasEntreDatas;
			}
			  else if($contDias == 31){
				if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
					$backupDias = $backupDias + $contDias;
				  }else{
					$backupDias = $backupDias + $contDias;
					$contDias = 0;
					$contMesses = 1;
					$contAnos = ++$contAnos;
					$contAnoFinal = ++$contAnoFinal;
				  }
			  }
		}
	}else if($contAnoFinal%4 == 0){

			if($contMesses == 1){
				if($contDias <= 30){
					$contDias = ++$contDias;
					$diasEntreDatas = ++$diasEntreDatas;
				}
				  else if($contDias == 31){
					if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
						$backupDias = $backupDias + $contDias;	
					}else{
						$backupDias = $backupDias + $contDias;
						$contDias = 0;
						$contMesses = ++$contMesses;
					}
				  }
			}else if($contMesses == 2){
				if($contDias <= 27){
					$contDias = ++$contDias;
					$diasEntreDatas = ++$diasEntreDatas;
				} if($contDias == 28){

				 if($contAnoFinal%100 == 0){
					 if($contAnoFinal%400 == 0){
							$contDias = ++$contDias;
							$diasEntreDatas = ++$diasEntreDatas;
				}}
				 if($contAnoFinal%100 == 0){
					if($contAnoFinal%400 != 0){
					$contDias = ++$contDias + 0;
					$backupDias = $backupDias + $contDias;
					$contDias = 0;
					$contMesses = ++$contMesses;
				}}else{
					$contDias = ++$contDias;
					$diasEntreDatas = ++$diasEntreDatas;	
				}}
				else if($contDias == 29){
					if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
						$backupDias = $backupDias + $contDias;	
					}else{
						$backupDias = $backupDias + $contDias;
						$contDias = 0;
						$contMesses = ++$contMesses;
					}
				}
			}else if($contMesses == 3){
				if($contDias <= 30){
					$contDias = ++$contDias;
					$diasEntreDatas = ++$diasEntreDatas;
				}
				  else if($contDias == 31){
					if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
						$backupDias = $backupDias + $contDias;	
					}else{
						$backupDias = $backupDias + $contDias;
						$contDias = 0;
						$contMesses = ++$contMesses;
					}
				  }
			}else if($contMesses == 4){
				if($contDias <= 29){
					$contDias = ++$contDias;
					$diasEntreDatas = ++$diasEntreDatas;
				}
				else if($contDias = 30){
					if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
						$backupDias = $backupDias + $contDias;	
					}else{
						$backupDias = $backupDias + $contDias;
						$contDias = 0;
						$contMesses = ++$contMesses;
					}	
				}
			}else if($contMesses == 5){
				if($contDias <= 30){
					$contDias = ++$contDias;
					$diasEntreDatas = ++$diasEntreDatas;
				}
				  else if($contDias == 31){
					if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
						$backupDias = $backupDias + $contDias;	
					}else{
						$backupDias = $backupDias + $contDias;
						$contDias = 0;
						$contMesses = ++$contMesses;
					}
				  }
			}else if($contMesses == 6){
				if($contDias <= 29){
					$contDias = ++$contDias;
					$diasEntreDatas = ++$diasEntreDatas;
				}
				else if($contDias = 30){
					if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
						$backupDias = $backupDias + $contDias;	
					}else{
						$backupDias = $backupDias + $contDias;
						$contDias = 0;
						$contMesses = ++$contMesses;
					}
				}
			}else if($contMesses == 7){
				if($contDias <= 30){
					$contDias = ++$contDias;
					$diasEntreDatas = ++$diasEntreDatas;
				}
				else if($contDias == 31){
					if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
						$backupDias = $backupDias + $contDias;	
					}else{
						$backupDias = $backupDias + $contDias;
						$contDias = 0;
						$contMesses = ++$contMesses;
					}}
			}else if($contMesses == 8){
				if($contDias <= 30){
					$contDias = ++$contDias;
					$diasEntreDatas = ++$diasEntreDatas;
				}
				else if($contDias == 31){
					if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
						$backupDias = $backupDias + $contDias;	
					}else{
						$backupDias = $backupDias + $contDias;
						$contDias = 0;
						$contMesses = ++$contMesses;
					}
				}
			}else if($contMesses == 9){
				if($contDias <= 29){
					$contDias = ++$contDias;
					$diasEntreDatas = ++$diasEntreDatas;
				}
				else if($contDias = 30){
					if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
						$backupDias = $backupDias + $contDias;	
					}else{
						$backupDias = $backupDias + $contDias;
						$contDias = 0;
						$contMesses = ++$contMesses;
					}
				}
			}else if($contMesses == 10){
				if($contDias <= 30){
					$contDias = ++$contDias;
					$diasEntreDatas = ++$diasEntreDatas;
				}
				  else if($contDias == 31){
					if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
						$backupDias = $backupDias + $contDias;	
					}else{
						$backupDias = $backupDias + $contDias;
						$contDias = 0;
						$contMesses = ++$contMesses;
					}
				  }
			}else if($contMesses == 11){
				if($contDias <= 29){
					$contDias = ++$contDias;
					$diasEntreDatas = ++$diasEntreDatas;
				}
				else if($contDias = 30){
					if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
						$backupDias = $backupDias + $contDias;	
					}else{
						$backupDias = $backupDias + $contDias;
						$contDias = 0;
						$contMesses = ++$contMesses;
					}	
				}
			}else if($contMesses == 12){
				if($contDias <= 30){
					$contDias = ++$contDias;
					$diasEntreDatas = ++$diasEntreDatas;
				}
				else if($contDias == 31){
					if($dataFinal == ($contAnoFinal."-".$contMesses."-".$contDias)){
					  $backupDias = $backupDias + $contDias;
					}else{
					  $backupDias = $backupDias + $contDias;
					  $contDias = 0;
					  $contMesses = 1;
					  $contAnos = ++$contAnos;
					  $contAnoFinal = ++$contAnoFinal;
					}			  
				  }
			}
	}

} while ($dataFinal != ($contAnoFinal."-".$contMesses."-".$contDias)); 

return ($diasEntreDatas);
}

/***** Teste 01 *****/
$dataInicial = "2018-01-01";
$dataFinal = "2018-01-02";
$resultadoEsperado = 1;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("01", $resultadoEsperado, $resultado);
echo "<br>";


/***** Teste 02 *****/
$dataInicial = "2018-01-01";
$dataFinal = "2018-02-01";
$resultadoEsperado = 31;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("02", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 03 *****/
$dataInicial = "2018-01-01";
$dataFinal = "2018-02-02";
$resultadoEsperado = 32;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("03", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 04 *****/
$dataInicial = "2018-01-01";
$dataFinal = "2018-02-28";
$resultadoEsperado = 58;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("04", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 05 *****/
$dataInicial = "2018-01-15";
$dataFinal = "2018-03-15";
$resultadoEsperado = 59;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("05", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 06 *****/
$dataInicial = "2018-01-01";
$dataFinal = "2019-01-01";
$resultadoEsperado = 365;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("06", $resultadoEsperado, $resultado);

echo "<br>";

/***** Teste 07 *****/
$dataInicial = "2018-01-01";
$dataFinal = "2020-01-01";
$resultadoEsperado = 730;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("07", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 08 *****/
$dataInicial = "2018-12-31";
$dataFinal = "2019-01-01";
$resultadoEsperado = 1;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("08", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 09 *****/
$dataInicial = "2018-05-31";
$dataFinal = "2018-06-01";
$resultadoEsperado = 1;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("09", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 10 *****/
$dataInicial = "2018-05-31";
$dataFinal = "2019-06-01";
$resultadoEsperado = 366;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("10", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 11 *****/
$dataInicial = "2016-02-01";
$dataFinal = "2016-03-01";
$resultadoEsperado = 29;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("11", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 12 *****/
$dataInicial = "2016-01-01";
$dataFinal = "2016-03-01";
$resultadoEsperado = 60;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("12", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 13 *****/
$dataInicial = "1981-09-21";
$dataFinal = "2009-02-12";
$resultadoEsperado = 10006;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("13", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 14 *****/
$dataInicial = "1981-07-31";
$dataFinal = "2009-02-12";
$resultadoEsperado = 10058;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("14", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 15 *****/
$dataInicial = "2004-03-01";
$dataFinal = "2009-02-12";
$resultadoEsperado = 1809;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("15", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 16 *****/
$dataInicial = "2004-03-01";
$dataFinal = "2009-02-12";
$resultadoEsperado = 1809;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("16", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 17 *****/
$dataInicial = "1900-02-01";
$dataFinal = "1900-03-01";
$resultadoEsperado = 28;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("17", $resultadoEsperado, $resultado);

echo "<br>";

/***** Teste 18 *****/
$dataInicial = "1899-01-01";
$dataFinal = "1901-01-01";
$resultadoEsperado = 730;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("18", $resultadoEsperado, $resultado);
echo "<br>"; 

/***** Teste 19 *****/
$dataInicial = "2000-02-01";
$dataFinal = "2000-03-01";
$resultadoEsperado = 29;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("19", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 20 *****/
$dataInicial = "1999-01-01";
$dataFinal = "2001-01-01";
$resultadoEsperado = 731;
$resultado = calculaDias($dataInicial, $dataFinal);
verificaResultado("20", $resultadoEsperado, $resultado);

function verificaResultado($nTeste, $resultadoEsperado, $resultado) {
	if(intval($resultadoEsperado) == intval($resultado)) {
		echo "Teste $nTeste passou.\n";
	} else {
		echo "Teste $nTeste NAO passou (Resultado esperado = $resultadoEsperado, Resultado obtido = $resultado).\n";
	}
}

?>
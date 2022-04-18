<?php

/**
* Retorna a temperatura mais proxima de zero.
* Se duas temperaturas com o mesmo valor absouto (uma positiva e outra negativa) serem igualmente proxima a zero, deve ser dada a preferencia para o valor positivo.
* @param array $temperaturas Lista de temperaturas
* @return int A temperatura mais proxima de zero
**/

function menorTemperatura($temperaturas) {
$f = 0;
$h = 0;
$tempNeg[$f] = "vazio";
$tempPos[$h] = "vazio";

/* Criando lista de números positivos e lista de número 
 negativos */
for( $i=0; $i < count($temperaturas); $i ++) {

    if($temperaturas[$i] < 0){
      $tempNeg[$f] = $temperaturas[$i];
      $f = ++$f;}
      else{ 
          $tempPos[$h] = $temperaturas[$i];
          $h = ++$h;
    }}
    
//Selecionando o maior valor negativo  
    for( $f=0; $f < count($tempNeg); $f ++){ 

        if($tempNeg[$f] != "vazio"){
        while (count($tempNeg) != 1 ) {
            if($tempNeg[0] > $tempNeg[1]){
            array_splice($tempNeg, 1, 1);
        }else{
            array_splice($tempNeg, 0, 1);
        }}}
        $temperaturaNegativa = $tempNeg[$f]."<br/>";}

//Selecionando o menos valor positivo
    for( $h=0; $h < count($tempPos); $h ++){
      
        if($tempPos[$h] != "vazio"){
        while (count($tempPos) != 1 ) {
              if($tempPos[0] < $tempPos[1]){
                 array_splice($tempPos, 1, 1);}
              else{
                 array_splice($tempPos, 0, 1);
        }}}
        $temperaturaPositiva = $tempPos[$h]."<br/>";}


        if($tempNeg[0] == "vazio"){
            $TemperaturaFinal = (int)$temperaturaPositiva;
        }else if($tempPos[0] == "vazio"){
            $TemperaturaFinal = (int)$temperaturaNegativa;
        }else if((int)$temperaturaNegativa + (int)$temperaturaPositiva == 0){
			$TemperaturaFinal = (int)$temperaturaPositiva;
        }else if((int)$temperaturaNegativa + (int)$temperaturaPositiva < 0){
            $TemperaturaFinal = (int)$temperaturaPositiva;
            ;
        }else if((int)$temperaturaNegativa + (int)$temperaturaPositiva > 0){
            $TemperaturaFinal = $temperaturaNegativa;
        }     

	return($TemperaturaFinal);
}


/***** Teste 01 *****/
$temperaturas = array( 17, 32, 14, 21 );
$resultadoEsperado = 14;
$resultado = menorTemperatura($temperaturas);
verificaResultado("01", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 02 *****/
$temperaturas = array( 27, -8, -12, 9 );
$resultadoEsperado = -8;
$resultado = menorTemperatura($temperaturas);
verificaResultado("02", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 03 *****/
$temperaturas = array( -6, 14, 42, 6, 25, -18 );
$resultadoEsperado = 6;
$resultado = menorTemperatura($temperaturas);
verificaResultado("03", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 04 *****/
$temperaturas = array( 34, 11, 13, -23, -11, 18 );
$resultadoEsperado = 11;
$resultado = menorTemperatura($temperaturas);
verificaResultado("04", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 05 *****/
$temperaturas = array( 17, 0, 28, -4 );
$resultadoEsperado = 0;
$resultado = menorTemperatura($temperaturas);
verificaResultado("05", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 06 *****/
$temperaturas = array( -10, 27, 9, -12 );
$resultadoEsperado = 9;
$resultado = menorTemperatura($temperaturas);
verificaResultado("06", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 07 *****/
$temperaturas = array( -47, -14, -5, -12, -8 );
$resultadoEsperado = -5;
$resultado = menorTemperatura($temperaturas);
verificaResultado("07", $resultadoEsperado, $resultado);
echo "<br>";

/***** Teste 08 *****/
$temperaturas = array( -47, -14, -5, -12, -5 );
$resultadoEsperado = -5;
$resultado = menorTemperatura($temperaturas);
verificaResultado("08", $resultadoEsperado, $resultado);
echo "<br>"; 

/***** Teste 09 *****/
$temperaturas = array( -7, 12, -13, 8 );
$resultadoEsperado = -7;
$resultado = menorTemperatura($temperaturas);
verificaResultado("09", $resultadoEsperado, $resultado);
echo "<br>";

function verificaResultado($nTeste, $resultadoEsperado, $resultado) {
	if(intval($resultadoEsperado) === intval($resultado)) {
		echo "Teste $nTeste passou.\n";
	} else {
		echo "Teste $nTeste NAO passou (Resultado esperado = $resultadoEsperado, Resultado obtido = $resultado).\n";
	}
}

?>
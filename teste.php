<?php
 /* do {
     $ano = --$ano;

       if($ano%100 == 0){
        echo "Ano ".$ano." é divisível por 100.<br>";
                 if($ano%400 == 0){
        echo "Ano ".$ano." é um ano bissexto (divisível por 100 e por 400).<br>";
        echo "------------------------------------------------------------------<br>";
    }}
    if($ano%4 == 0){
    echo "Ano ".$ano." é um ano bissexto (divisível por 4).<br>";
        //} else {
       // echo "Ano ".$ano." não é um ano bissexto (divisível por 4 e nem por 400).<br>";
    }
 } while ($ano != 1699); 


*/

$array = array(1, 2, 3);

//Definindo variáveis
$f = 0;
$h = 0;
$tempNeg[$f] = "vazio";
$tempPos[$h] = "vazio";

/* Criando lista de números positivos e lista de número 
 negativos */
for( $i=0; $i < count($array); $i ++) {

    if($array[$i] < 0){
      $tempNeg[$f] = $array[$i];
      $f = ++$f;}
      else{ 
          $tempPos[$h] = $array[$i];
          $h = ++$h;
    }}
// Emitindo lista

    for($f=0; $f < count($tempNeg); $f ++){
        echo $tempNeg[$f]."<br>";}

    for($h=0; $h < count($tempPos); $h ++){
        echo $tempPos[$h]."<br>";}
    
echo "____________________________________________________________<br>";
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
echo "____________________________________________________________<br/>";
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
            echo $temperaturaPositiva;
        }else if($tempPos[0] == "vazio"){
            echo $temperaturaNegativa;
        }else if((int)$temperaturaNegativa + (int)$temperaturaPositiva == 0){
          $temperaturaMaisProxima = $temperaturaPositiva;
          echo $temperaturaMaisProxima;
        }else if((int)$temperaturaNegativa + (int)$temperaturaPositiva < 0){
            $temperaturaMaisProxima = $temperaturaPositiva;
            echo $temperaturaMaisProxima;
        }else if((int)$temperaturaNegativa + (int)$temperaturaPositiva > 0){
            $temperaturaMaisProxima = $temperaturaNegativa;
            echo $temperaturaMaisProxima;

        }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
     



  

/* while (count($array) != 1) {

    for( $i=0; $i < count($array); $i ++) { 
    
        if($array[0] < $array[1]){
            array_splice($array, 1, 1);
        }else{
            array_splice($array, 0, 1);
        }}
}
for( $i=0; $i < count($array); $i ++){
echo $array[$i];
} */


 ?> 
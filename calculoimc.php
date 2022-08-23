<?php
//Altura e peso, respectivamente
$alt = 1.75;
$pes = 95;
//funcao para calcular o imc
function imc($altura, $peso){
  $imc = $peso / ($altura * $altura);
  //retorno da funcao junto a formatação do número com 2 casas decimais
  return number_format($imc, 2, '.', ',');}
//funcao para classificar o imc
function classificacao($imc){
  //array 
  $faixa = array("Magreza", "Saúdavel", "Sobrepeso", "Obesidade Grau I", "Obesidade Grau I", "Obesidade Grau II");
  if ($imc <= 18.5) {
    return $faixa[0];
  } elseif ($imc <= 24.9) {
    return $faixa[1];
  } elseif ($imc <= 29.9) {
    return $faixa[2];
  } elseif ($imc <= 34.9) {
    return $faixa[3];
  } elseif ($imc <= 39.9) {
    return $faixa[4];
  } else {
    return $faixa[5];
  }}
//saída
echo " Atenção, seu IMC é de " . imc($alt, $pes) . ", e você está classificado
como " . classificacao(imc($alt, $pes));
?>

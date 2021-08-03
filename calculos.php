<?php

function calc_delta($a_vlr, $b_vlr, $c_vlr)
{
  $delta = ($b_vlr * $b_vlr) - (4 * $a_vlr * $c_vlr);


  if($delta < 0 ) exit('DELTA NEGATIVO, SEM RAIZES REAIS');

  return $delta;
}

function calc_x1($a_vlr, $b_vlr, $delta_vlr)
{
  $x1 = (-$b_vlr + sqrt($delta_vlr)) / (2 * $a_vlr);

  return $x1;
}
function calc_x2($a_vlr, $b_vlr, $delta_vlr)
{
  $x2 = (-$b_vlr - sqrt($delta_vlr)) / (2 * $a_vlr);

  return $x2;
}




 ?>

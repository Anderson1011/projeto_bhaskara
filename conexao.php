<?php

function insert_db($a_vlr, $b_vlr, $c_vlr, $delta_vlr, $x1_vlr, $x2_vlr)
{
  $mysqli = new mysqli("localhost", "root", "", "bhaskara");
  $sqlstr = "insert into calculos (a, b, c, delta, x1, x2) values ($a_vlr,$b_vlr,$c_vlr,$delta_vlr,$x1_vlr,$x2_vlr)";
  mysqli_query($mysqli, $sqlstr);
}




 ?>

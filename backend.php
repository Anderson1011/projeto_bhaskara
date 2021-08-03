<?php
include 'conexao.php';
include 'calculos.php';

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

if(is_numeric($a) == FALSE) exit('A não é um numero');
if(is_numeric($b) == FALSE) exit('B não é um numero');
if(is_numeric($c) == FALSE) exit('C não é um numero');

$delta = calc_delta($a, $b, $c);
$x1 = calc_x1($a, $b, $delta);
$x2 = calc_x2($a, $b, $delta);
insert_db($a, $b, $c, $delta, $x1, $x2);


var_dump($delta);
var_dump($x1);
var_dump($x2);




 ?>

<?php

$meuSalario = 1500;
$salarioMinimo = 1045;
$salarioSonhado = 5000;

if ($meuSalario < $salarioMinimo) {

	echo "Objetivo não alcançado";

} else if ($meuSalario > $salarioMinimo) {

	echo "Objetivo parcialmente alcançado";

} else if ($meuSalario >= $salarioSonhado) {

	echo "Objetivo não alcançado";
}

?>
<?php

namespace ReemplazarNumeroMagicoConConstanteSimbolica\Antes;

function energiaPotencial(int $masa, int $altura): float {
  return $masa * $altura * 9.81;
}

printf(
	'La energía potencial de 5kg a una altura de 200m es: %.2f',
	energiaPotencial(5, 200)
);

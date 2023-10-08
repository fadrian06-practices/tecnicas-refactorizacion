<?php

namespace ReemplazarNumeroMagicoConConstanteSimbolica\Despues;

const CONSTANTE_GRAVITACIONAL = 9.81;

function energiaPotencial(int $masa, int $altura): float {
  return $masa * $altura * CONSTANTE_GRAVITACIONAL;
}

printf(
	'La energía potencial de 5kg a una altura de 200m es: %.2f',
	energiaPotencial(5, 200)
);

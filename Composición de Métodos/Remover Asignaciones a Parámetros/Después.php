<?php

namespace RemoverAsignacionesAParametros\Despues;

function descontar(int $valorEntrada, int $cantidad): int {
	$resultado = $valorEntrada;

	if ($cantidad > 50) {
		$resultado -= 2;
	}

	// ...
	return $resultado;
}

$valorDescontando = descontar(100, rand(51, 100));
echo "El valor descontado es $valorDescontando\n";

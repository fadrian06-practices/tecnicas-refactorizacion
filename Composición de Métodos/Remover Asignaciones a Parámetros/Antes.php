<?php

namespace RemoverAsignacionesAParametros\Antes;

function descontar(int $valorEntrada, int $cantidad): int {
	if ($cantidad > 50) {
		$valorEntrada -= 2;
	}

	// ...
	return $valorEntrada;
}

$valorDescontando = descontar(100, rand(51, 100));
echo "El valor descontado es $valorDescontando\n";

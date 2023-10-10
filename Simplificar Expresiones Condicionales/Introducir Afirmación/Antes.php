<?php

namespace IntroducirAfirmacion\Antes;

use IntroducirAfirmacion\MetodosPresupuesto;

require 'MetodosPresupuesto.php';

class Presupuesto {
	use MetodosPresupuesto;

	function obtenerLimiteDeGastos(): int {
		// Debería tener o un límite de gastos
		// o un proyecto primario
		return $this->limiteDeGastos !== self::GASTO_NULO
			? $this->limiteDeGastos
			: $this->proyectoPrimario->obtenerLimiteDeGastosDeMiembros();
	}
}

<?php

namespace IntroducirAfirmacion;

require_once 'Proyecto.php';

trait MetodosPresupuesto {
	private const GASTO_NULO = 0;

	function __construct(
		private int $limiteDeGastos,
		private Proyecto $proyectoPrimario
	) {}
}

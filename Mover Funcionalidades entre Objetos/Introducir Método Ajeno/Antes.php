<?php

namespace IntroducirMetodoAjeno\Antes;

use IntroducirMetodoAjeno\MetodosReporte;

require 'MetodosReporte.php';

class Reporte {
	use MetodosReporte;

	// ...
	function enviar(): void {
		$fechaPrevia = clone $this->fechaPrevia;
		$fechaDePago = $fechaPrevia->modify('+7 days');
		// ...
	}
}

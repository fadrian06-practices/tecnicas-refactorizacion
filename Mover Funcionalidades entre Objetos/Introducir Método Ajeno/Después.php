<?php

namespace IntroducirMetodoAjeno\Despues;

use DateTime;
use IntroducirMetodoAjeno\MetodosReporte;

require 'MetodosReporte.php';

class Reporte {
	use MetodosReporte;

	// ...
	function enviar(): void {
		$fechaDePago = self::proximaSemana($this->fechaPrevia);
		// ...
	}

	/** Método Ajeno. Debería estar en DateTime */
	private static function proximaSemana(DateTime $arg): DateTime {
		$fechaPrevia = clone $arg;
		return $fechaPrevia->modify('+7 days');
	}
}

<?php

namespace DescomponerCondicional\Antes;

use DescomponerCondicional\MetodosFactura;

require 'MetodosFactura.php';

class Factura {
	use MetodosFactura;

	function obtenerCarga(): float {
		if ($this->fecha->antes(self::INICIO_DE_VERANO)
			or $this->fecha->despues(self::FIN_DE_VERADO)
		) {
			$carga = (
				$this->cantidad
				* self::$tasaDeInvierno
				* self::$cargaDeServicioDeInvierno
			);
		} else {
			$carga = $this->cantidad * self::$tasaDeVerano;
		}

		return $carga;
	}
}

$factura = new Factura;
echo "La carga total es {$factura->obtenerCarga()}";

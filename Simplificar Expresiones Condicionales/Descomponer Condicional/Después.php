<?php

namespace DescomponerCondicional\Despues;

use DescomponerCondicional\MetodosFactura;

require 'MetodosFactura.php';

class Factura {
	use MetodosFactura;

	function obtenerCarga(): float {
		if ($this->esVerano($this->fecha)) {
			$carga = $this->cargaDeVerano($this->cantidad);
		} else {
			$carga = $this->cargaDeInvierno($this->cantidad);
		}

		return $carga;
	}
}

$factura = new Factura;
echo "La carga total es {$factura->obtenerCarga()}";

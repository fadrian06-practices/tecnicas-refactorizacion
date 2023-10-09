<?php

namespace ReemplazarCondicionalesAnidadasConClausulasDeGuarda\Antes;

use ReemplazarCondicionalesAnidadasConClausulasDeGuarda\MetodosNomina;

require 'MetodosNomina.php';

class Nomina {
	use MetodosNomina;

	function obtenerPago(): float {
		$pago = .0;

		if ($this->estaMuerto) {
			$pago = $this->pagoPorMuerto();
		} else {
			if ($this->estaSeparado) {
				$pago = $this->pagoPorSeparado();
			} else {
				if ($this->estaRetirado) {
					$pago = $this->pagoPorRetirado();
				} else {
					$pago = $this->pagoNormal();
				}
			}
		}

		return $pago;
	}
}

$nomina = new Nomina;
echo "La paga es de: {$nomina->obtenerPago()}";

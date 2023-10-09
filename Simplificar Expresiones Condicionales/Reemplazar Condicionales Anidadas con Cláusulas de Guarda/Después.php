<?php

namespace ReemplazarCondicionalesAnidadasConClausulasDeGuarda\Despues;

use ReemplazarCondicionalesAnidadasConClausulasDeGuarda\MetodosNomina;

require 'MetodosNomina.php';

class Nomina {
	use MetodosNomina;

	function obtenerPago(): float {
		if ($this->estaMuerto) {
			return $this->pagoPorMuerto();
		}

		if ($this->estaSeparado) {
			return $this->pagoPorSeparado();
		}

		if ($this->estaRetirado) {
			return $this->pagoPorRetirado();
		}

		return $this->pagoNormal();
	}
}

$nomina = new Nomina;
echo "La paga es de: {$nomina->obtenerPago()}";

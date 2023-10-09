<?php

namespace ReemplazarCondicionalesAnidadasConClausulasDeGuarda;

trait MetodosNomina {
	private bool $estaMuerto;
	private bool $estaSeparado;
	private bool $estaRetirado;

	function __construct() {
		$this->estaMuerto = (bool) rand(0, 1);
		$this->estaSeparado = (bool) rand(0, 1);
		$this->estaRetirado = (bool) rand(0, 1);
	}

	private function pagoPorMuerto(): float {
		return rand(11, 100) / rand(1, 10);
	}

	private function pagoPorSeparado(): float {
		return rand(11, 100) / rand(1, 10);
	}

	private function pagoPorRetirado(): float {
		return rand(11, 100) / rand(1, 10);
	}

	private function pagoNormal(): float {
		return rand(11, 100) / rand(1, 10);
	}
}

<?php

namespace ConsolidarExpresionCondicional;

trait MetodosAsilo {
	function __construct(
		private int $antiguedad,
		private int $mesesDeshabilitado,
		private bool $esTiempoParcial
	) {}

	function noEsElegibleParaDiscapacidad(): bool {
		if ($this->antiguedad < 2) {
			return true;
		}

		if ($this->mesesDeshabilitado > 12) {
			return true;
		}

		if ($this->esTiempoParcial) {
			return true;
		}

		return false;
	}
}

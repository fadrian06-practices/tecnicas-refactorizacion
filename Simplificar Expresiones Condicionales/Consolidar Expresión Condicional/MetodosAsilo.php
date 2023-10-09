<?php

namespace ConsolidarExpresionCondicional;

trait MetodosAsilo {
	function __construct(
		private int $antiguedad,
		private int $mesesDeshabilitado,
		private bool $esTiempoParcial
	) {}

	function noEsElegibleParaDiscapacidad(): bool {
		return (
			$this->antiguedad < 2
			|| $this->mesesDeshabilitado > 12
			|| $this->esTiempoParcial
		);
	}
}

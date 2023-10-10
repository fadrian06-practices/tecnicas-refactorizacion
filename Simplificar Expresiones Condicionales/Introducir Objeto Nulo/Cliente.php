<?php

namespace IntroducirObjetoNulo;

require_once 'Plan.php';

class Cliente {
	function esNulo(): bool {
		return false;
	}

	function obtenerPlan(): Plan {
		return new Plan;
	}
}

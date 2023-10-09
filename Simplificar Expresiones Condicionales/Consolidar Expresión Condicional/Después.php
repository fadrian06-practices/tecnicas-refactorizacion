<?php

namespace ConsolidarExpresionCondicional\Despues;

use ConsolidarExpresionCondicional\MetodosAsilo;

require 'MetodosAsilo.php';

class Asilo {
	use MetodosAsilo;

	function cantidadDeDiscapacidad(): float {
		if ($this->noEsElegibleParaDiscapacidad()) {
			return 0;
		}

		// Computar cantidad de discapacidad.
		// ...
		return rand(10, 100) / rand(1, 10);
	}
}

$asilo = new Asilo(rand(1, 10), rand(6, 24), (bool) rand(0, 1));
echo "Cantidad de discapacidad: {$asilo->cantidadDeDiscapacidad()}";

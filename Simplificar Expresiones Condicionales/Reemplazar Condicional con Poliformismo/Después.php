<?php

namespace ReemplazarCondicionalConPoliformismo\Despues;

use ReemplazarCondicionalConPoliformismo\MetodosPajaro;

require 'MetodosPajaro.php';

abstract class Pajaro {
	use MetodosPajaro;

	abstract function obtenerVelocidad(): float;
}

class PajaroEuropeo extends Pajaro {
	function obtenerVelocidad(): float {
		return $this->obtenerVelocidadBase();
	}
}

class PajaroAfricano extends Pajaro {
	function obtenerVelocidad(): float {
		return ($this->obtenerVelocidadBase()
			- ($this->obtenerFactorDeCarga() * $this->cantidadDeCocos)
		);
	}
}

class PajaroNoruego extends Pajaro {
	function obtenerVelocidad(): float {
		return $this->estaEncerrado
			? 0
			: $this->obtenerVelocidadBase($this->voltaje);
	}
}

function mostrarVelocidad(Pajaro $pajaro): void {
	printf(
		"La velidad del %s es %d\n",
		$pajaro::class,
		$pajaro->obtenerVelocidad()
	);
}

mostrarVelocidad(new PajaroEuropeo);
mostrarVelocidad(new PajaroAfricano);
mostrarVelocidad(new PajaroNoruego);

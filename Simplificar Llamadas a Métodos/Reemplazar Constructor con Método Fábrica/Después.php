<?php

namespace ReemplazarConstructorConMetodoFabrica\Despues;

class Empleado {
	private int $tipo;

  // ...

  private function __construct(int $tipo) {
   $this->tipo = $tipo;
  }

  // ...

  function obtenerTipo(): int {
  	return $this->tipo;
  }

	static function crear(int $tipo): self {
		$empleado = new self($tipo);

		// Hacer tareas costosas

		return $empleado;
	}
}

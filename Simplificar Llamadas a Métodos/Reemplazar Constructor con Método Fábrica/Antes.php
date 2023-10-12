<?php

namespace ReemplazarConstructorConMetodoFabrica\Antes;

class Empleado {
	private int $tipo;

  // ...

  function __construct(int $tipo) {
   $this->tipo = $tipo;
  }
  // ...

  function obtenerTipo(): int {
  	return $this->tipo;
  }
}

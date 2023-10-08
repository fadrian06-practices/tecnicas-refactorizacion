<?php

namespace EncapsularPropiedad\Despues;

class Persona {
	private string $nombre;

	function asignarNombre(string $nombre): void {
		$this->nombre = $nombre;
	}

	function obtenerNombre(): string {
		return $this->nombre;
	}
}

$persona = new Persona;
$persona->asignarNombre('Franyer');
echo "Hola, mi nombre es {$persona->obtenerNombre()}";

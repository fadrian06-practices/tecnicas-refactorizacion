<?php

namespace ReemplazarArregloConObjeto;

class Rendimiento {
	private string $nombre;
	private int $victorias;

	function asignarNombre(string $nombre): void {
		$this->nombre = $nombre;
	}

	function asignarVictorias(int $victorias): void {
		$this->victorias = $victorias;
	}

	function nombre(): string {
		return $this->nombre;
	}

	function victorias(): int {
		return $this->victorias;
	}
}

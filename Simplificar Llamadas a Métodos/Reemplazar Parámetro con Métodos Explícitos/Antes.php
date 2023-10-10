<?php

namespace ReemplazarParametroConMetodosExplicitos\Antes;

class Rectangulo {
	function __construct(private int $alto, private int $ancho) {}

	/** @param 'alto'|'ancho' $nombre */
	function asignarValor(string $nombre, int $valor): void {
	  if ($nombre === 'alto') {
	    $this->alto = $valor;
	    return;
	  }

	  if ($nombre === 'ancho') {
	    $this->ancho = $valor;
	    return;
	  }
	}
}

$rectangulo = new Rectangulo(rand(1, 10), rand(1, 10));
$rectangulo->asignarValor('alto', 5);
echo 'Valor cambiado';

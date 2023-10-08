<?php

namespace SustituirAlgoritmo\Antes;

function encontrarPersona(string ...$personas): string {
	$cantidadDePersonas = count($personas);

	for ($i = 0; $i < $cantidadDePersonas; ++$i) {
		if ($personas[$i] === 'Don') {
			return 'Don';
		}

		if ($personas[$i] === 'John') {
			return 'John';
		}

		if ($personas[$i] === 'Kent') {
			return 'Kent';
		}
	}

	return '';
}

echo 'Persona encontrada: ' . encontrarPersona('Jake', 'John', 'Kent');

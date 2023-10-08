<?php

namespace SustituirAlgoritmo\Antes;

function encontrarPersona(string ...$personas): string {
	$candidatos = ['Don', 'John', 'Kent'];

	foreach ($candidatos as $cantidado) {
		$id = array_search($cantidado, $personas, true);

		if ($id !== false) {
			return $personas[$id];
		}
	}

	return '';
}

echo 'Persona encontrada: ' . encontrarPersona('Jake', 'John', 'Kent');

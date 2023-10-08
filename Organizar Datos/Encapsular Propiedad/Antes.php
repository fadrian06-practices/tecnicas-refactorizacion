<?php

namespace EncapsularPropiedad\Antes;

class Persona {
	public string $nombre;
}

$persona = new Persona;
$persona->nombre = 'Franyer';
echo "Hola, mi nombre es $persona->nombre";

<?php

namespace IntroducirObjetoNulo;

require_once 'Cliente.php';

function obtenerCliente(): ?Cliente {
	return rand(0, 1) ? new Cliente : null;
}

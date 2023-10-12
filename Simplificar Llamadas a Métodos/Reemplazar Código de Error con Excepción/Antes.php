<?php

namespace ReemplazarCodigoDeErrorConExcepcion\Antes;

class Cuenta {
	function __construct(private int $balance) {}

	function retirar(int $cantidad) {
		if ($cantidad > $this->balance) {
			return -1;
		}

		$this->balance -= $cantidad;
		return 0;
	}
}

$cuenta = new Cuenta(50);
$resultado = $cuenta->retirar(2);

if ($resultado === -1) {
	echo "Saldo insuficiente.\n";
} elseif ($resultado === 0) {
	echo "Saldo retirado exitósamente.\n";
} else {
	echo "Ha ocurrido un error.\n";
}

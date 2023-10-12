<?php

namespace ReemplazarCodigoDeErrorConExcepcion\Despues;

use Exception;

class ExcepcionDeBalance extends Exception {}

class Cuenta {
	function __construct(private int $balance) {}

	/** @throws ExcepcionDeBalance */
	function retirar(int $cantidad): void {
		if ($cantidad > $this->balance) {
			throw new ExcepcionDeBalance('Balance insuficiente');
		}

		$this->balance -= $cantidad;
	}
}

$cuenta = new Cuenta(50);

try {
	$cuenta->retirar(52);
	echo "Saldo retirado exitósamente.\n";
} catch (ExcepcionDeBalance $error) {
	echo "{$error->getMessage()}\n";
}

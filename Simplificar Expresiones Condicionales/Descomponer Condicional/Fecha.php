<?php

namespace DescomponerCondicional;

use DateTime;

class Fecha {
	private int $segundosUNIX;

	function __construct(?int $segundosUNIX = null) {
		if (!$segundosUNIX) {
			$this->segundosUNIX = time();
			return;
		}

		$this->segundosUNIX = $segundosUNIX;
	}

	/** @param string $diaYMes una fecha de formato `DD/MM` */
	function antes(string $diaYMes): bool {
		$fechaSolicitada = DateTime::createFromFormat(
			'd/m/Y',
			"$diaYMes/" . date('Y')
		);

		assert($fechaSolicitada !== false);
		$segundosUNIXSolicitados = $fechaSolicitada->getTimestamp();

		return $segundosUNIXSolicitados < $this->segundosUNIX;
	}

	/** @param string $diaYMes una fecha de formato `DD/MM` */
	function despues(string $diaYMes): bool {
		$fechaSolicitada = DateTime::createFromFormat(
			'd/m/Y',
			"$diaYMes/" . date('Y')
		);

		assert($fechaSolicitada !== false);
		$segundosUNIXSolicitados = $fechaSolicitada->getTimestamp();

		return $segundosUNIXSolicitados > $this->segundosUNIX;
	}
}

<?php

namespace DescomponerCondicional;

require_once 'Fecha.php';

trait MetodosFactura {
	private const INICIO_DE_VERANO = '21/06';
	private const FIN_DE_VERADO = '22/09';

	private Fecha $fecha;
	private int $cantidad;

	private static float $tasaDeInvierno;
	private static float $tasaDeVerano;
	private static float $cargaDeServicioDeInvierno;

	function __construct(?Fecha $fecha = null) {
		$this->fecha = $fecha ?? new Fecha;
		$this->cantidad = rand(1, 10);
		self::$tasaDeInvierno = rand(5, 10) / 10;
		self::$tasaDeVerano = rand(5, 10) / 10;
		self::$cargaDeServicioDeInvierno = rand(5, 10) / 10;
	}

	function esVerano(Fecha $fecha): bool {
		return (
			$fecha->despues(self::INICIO_DE_VERANO)
			and $fecha->antes(self::FIN_DE_VERADO)
		);
	}

	function cargaDeVerano(int $cantidad): float {
		return $cantidad * self::$tasaDeVerano;
	}

	function cargaDeInvierno(int $cantidad): float {
		return (
			$cantidad
			* self::$tasaDeInvierno
			* self::$cargaDeServicioDeInvierno
		);
	}
}

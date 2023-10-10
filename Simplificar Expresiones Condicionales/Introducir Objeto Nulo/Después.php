<?php

namespace IntroducirObjetoNulo\Despues;

use IntroducirObjetoNulo\Cliente;
use IntroducirObjetoNulo\Pedido;
use IntroducirObjetoNulo\Plan;
use IntroducirObjetoNulo\PlanNulo;

require_once 'PlanDeNomina.php';
require_once 'Cliente.php';
require_once 'Plan.php';
require_once 'PlanNulo.php';
require_once 'Pedido.php';

class ClienteNulo extends Cliente {
	function esNulo(): bool {
		return true;
	}

	function obtenerPlan(): Plan {
		return new PlanNulo;
	}

	// Alguna otra funcionalidad NULA.
}

$pedido = rand(0, 1) ? new Pedido(new Cliente) : new Pedido;

// Reemplaza valores nulos por objetos-Nulos
$cliente = $pedido->cliente ?? new ClienteNulo;

// Utiliza el objeto-Nulo como si fuera una subclase normal
$plan = $cliente->obtenerPlan();
printf("El plan es %s\n", $plan::class);

<?php

namespace IntroducirObjetoNulo\Antes;

use IntroducirObjetoNulo\PlanDeNomina;

use function IntroducirObjetoNulo\obtenerCliente;

require 'PlanDeNomina.php';
require 'obtenerCliente.php';

$cliente = obtenerCliente();

if ($cliente === null) {
  $plan = PlanDeNomina::basico();
} else {
  $plan = $cliente->obtenerPlan();
}

printf("El plan es %s\n", $plan::class);

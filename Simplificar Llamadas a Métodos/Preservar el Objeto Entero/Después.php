<?php

namespace PreservarElObjetoEntero\Despues;

use PreservarElObjetoEntero\Rango;

require 'Rango.php';
require 'PlanDespues.php';

$rangoDiasTemporales = new Rango(rand(1, 10), rand(10, 28));
$plan = new Plan(+date('d'));

$dentroDePlan = $plan->dentroDeRango($rangoDiasTemporales);

echo $dentroDePlan
	? 'El rango solicitado está en el rango del plan'
	: 'El rango solicitado no está en el rango del plan';

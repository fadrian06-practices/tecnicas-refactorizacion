<?php

namespace PreservarElObjetoEntero\Antes;

use PreservarElObjetoEntero\Rango;

require 'Rango.php';
require 'PlanAntes.php';

$rangoDiasTemporales = new Rango(rand(1, 10), rand(10, 28));
$plan = new Plan(+date('d'));

$bajo = $rangoDiasTemporales->obtenerBajo();
$alto = $rangoDiasTemporales->obtenerAlto();
$dentroDePlan = $plan->dentroDeRango($bajo, $alto);

echo $dentroDePlan
	? 'El rango solicitado está en el rango del plan'
	: 'El rango solicitado no está en el rango del plan';

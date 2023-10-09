<?php

namespace ConsolidarFragmentosDeCondicionalesDuplicados\Antes;

use ConsolidarFragmentosDeCondicionalesDuplicados\MetodosEntrega;

require 'MetodosEntrega.php';

class Entrega {
	use MetodosEntrega;

	function enviarTotal(): void {
		if ($this->esOfertaEspecial()) {
			$total = $this->precio * 0.95;
		} else {
			$total = $this->precio * 0.98;
		}

		$this->enviar($total);
	}
}

$entrega = new Entrega(rand(11, 100) / rand(1, 10));
$entrega->enviarTotal();

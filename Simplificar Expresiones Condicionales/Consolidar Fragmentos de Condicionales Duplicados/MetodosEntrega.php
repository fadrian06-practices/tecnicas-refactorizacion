<?php

namespace ConsolidarFragmentosDeCondicionalesDuplicados;

trait MetodosEntrega {
	function __construct(private float $precio) {}

	private function esOfertaEspecial(): bool {
		return (bool) rand(0, 1);
	}

	private function enviar(float $total): void {
		echo "Enviando $total...\n";
	}
}

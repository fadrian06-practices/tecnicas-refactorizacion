<?php

namespace ExtraerVariable;

require_once __DIR__ . '/JsString.php';

trait MetodosGUI {
	private JsString $plataforma;
	private JsString $navegador;
	private int $redimensionar;

	function __construct() {
		$this->plataforma = new JsString(PHP_OS);
		$this->navegador = new JsString(@$_SERVER['HTTP_USER_AGENT'] ?? '');
		$this->redimensionar = rand(0, 10);
	}

	private function estabaInicializada(): bool {
		return (bool) rand(0, 1);
	}
}

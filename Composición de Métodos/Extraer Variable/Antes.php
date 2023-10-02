<?php

namespace ExtraerVariable\Antes;

use ExtraerVariable\MetodosGUI;

require 'MetodosGUI.php';

/** Interfaz Gráfica de Usuario */
class GUI {
	use MetodosGUI;

	function renderizarEncabezado(): void {
		if ($this->plataforma->toUpperCase()->indexOf('MAC') > -1 &&
			$this->navegador->toUpperCase()->indexOf('IE') > -1 &&
			$this->estabaInicializada() && $this->redimensionar > 0
		) {
			// hacer algo
			echo '<h1>Encabezado en MAC usando Internet Explorer</h1>';
			return;
		}

		echo '<h1>No estás usando Internet Explorer en MAC</h1>';
	}
}

$gui = new GUI;
$gui->renderizarEncabezado();

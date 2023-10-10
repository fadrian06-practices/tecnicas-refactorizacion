<?php

namespace IntroducirObjetoNulo;

readonly class Pedido {
	function __construct(public ?Cliente $cliente = null) {}
}

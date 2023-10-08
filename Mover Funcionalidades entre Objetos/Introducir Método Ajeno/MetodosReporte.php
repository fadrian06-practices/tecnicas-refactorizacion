<?php

namespace IntroducirMetodoAjeno;

use DateTime;

trait MetodosReporte {
	function __construct(private DateTime $fechaPrevia) {}
}

<?php

namespace ExtraerVariable;

readonly class JsString {
	function __construct(private string $value) {}

	function toUpperCase(): self {
		return new self(mb_convert_case($this->value, MB_CASE_UPPER));
	}

	function indexOf(string $searchString, int $position = 0): int {
		$index = mb_strpos($searchString, $this->value, $position);
		return $index === false ? -1 : $index;
	}

	function __toString(): string {
		return $this->value;
	}
}

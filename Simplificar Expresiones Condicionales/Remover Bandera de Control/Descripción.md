# Eliminar bandera de control

## Problema

> Tiene una variable booleana que actúa como bandera de control
para varias expresiones booleanas.

## Solución

> En lugar de la variable, use `break`, `continue` y `return`.

### ¿Por qué Refactorizar?

Las banderas de control se remontan a los días de antaño, cuando los
programadores "adecuados" siempre tenían un punto de entrada para
sus funciones (la línea de declaración de función) y un punto de
salida (al final de la función).

En los lenguajes de programación modernos este estilo tic está
obsoleto, ya que disponemos de operadores especiales para modificar
el control de flujo en bucles y otras construcciones complejas:

- `break`: detiene el bucle

- `continue`: detiene la ejecución de la rama del bucle actual y va
	a comprobar las condiciones del bucle en la siguiente iteración

- `return`: detiene la ejecución de toda la función y devuelve su
resultado si se da en el operador

### Beneficios

El código de bandera de control suele ser mucho más pesado que el
código escrito con operadores de control de flujo.

### Cómo refactorizar

1. Busque la asignación de valor a la marca de control que provoca
la salida del bucle o de la iteración actual.

2. Reemplácelo con `break`, si se trata de una salida de un bucle;
`continue`, si se trata de una salida de una iteración, o `return`,
si necesita devolver este valor de la función.

3. Quite el código restante y las comprobaciones asociadas con la
bandera de control.

# prueba_cidenet
Prueba de Números Binarios.

Ejercicio:
Valeria tiene una abuela llamada Lucía, es una encantadora anciana, propietaria de una
granja y experta repostera. Valeria pide dulces continuamente, pero su sabia abuela no
permite que Valeria coma demasiados para que no caiga enferma. Lucía es aficionada a los
números binarios, así que propuso un juego a Valeria: ella diría un número N y Valeria
escogería dos números, X e Y, tales que X + Y = N. Entonces, Lucía daría a Valeria tantos
dulces como la cantidad de unos que tengan X e Y en base 2.

Por ejemplo, si Lucía propone 7 y Valeria escoge 3 y 4, recibiría: 2 por el 3, pues 3 en base 2 = 11 y 1 por el 4,
pues 4 en base 2 es 100; por tanto recibiría 3 dulces. Valeria quiere saber la máxima
cantidad de dulces que podría obtener de Lucía para cualquier número entre 0 y 100.
Diseñe un programa capaz de calcular la cantidad máxima de dulces que puede obtener
Valeria para cualquier número entre 0 y 100.

Sugerencias:
1) Tenga en cuenta que para convertir de números Binarios a Números Naturales se hace
de la siguiente manera:

Número binario = 1010
Número Natural = 1 * 23 + 0 * 22+ 1 * 21 + 0 * 20 = 10

Donde la base siempre es 2, y el número 0 o 1 que se multiplica es de acuerdo a la posición
de cada número en el número binario.

2) Tenga en cuenta que para convertir de números Naturales a Números Binarios se hace
de la siguiente manera
Número Natural = 10
Número Binario = 10 / 2 = 5, Residuo = 0
5 / 2 = 2, Residuo = 1
2 / 2 = 1, Residuo = 0
1 / 2 = 0, Residuo = 1

Resultado Binario Final = 1010

Ejemplo de entrada y salida esperados:
Entrada = 9
Salida = “Los números que mayor cantidad de dulces pueden obtener son: "7 + 2"
<?php
//Mostrar la tabla de multiplicar del 3, utilizando un while (Hasta el numero 20).
//Se debe mostrar al similar a lo siguiente.
//3 * 1 = 3
//3 * 2 = 6
//3 * 3 = 9
//...................

$n1 = 3;
$n2 = 1;
$res = $n1*$n2;

while ($n2 <= 20)
 {
    echo $n1 . ' * ' . $n2 . ' = ' . $res;
    echo '<hr>';
    $n2 = $n2 + 1;
    $res = $n1*$n2;

}

?>

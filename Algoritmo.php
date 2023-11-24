<?php

function ordenamientoBurbuja($lista) {
    $n = count($lista);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($lista[$j] > $lista[$j + 1]) {

                $temp = $lista[$j];
                $lista[$j] = $lista[$j + 1];
                $lista[$j + 1] = $temp;
            }
        }
    }
    return $lista;
}


$miLista = [64, 34, 25, 12, 22, 11, 90];
$listaOrdenada = ordenamientoBurbuja($miLista);

echo "Lista original: " . implode(", ", $miLista) . "\n";
echo "Lista ordenada: " . implode(", ", $listaOrdenada);

?>

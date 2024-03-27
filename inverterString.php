<?php
function inverterString($texto) {
    $tamanho = strlen($texto);
    $textoInvertido = '';
    

    for ($i = $tamanho - 1; $i >= 0; $i--) {
    
        $textoInvertido .= $texto[$i];
    }
    
    return $textoInvertido;
}

$stringOriginal = "Hello, world!";

$stringInvertida = inverterString($stringOriginal);

echo "String original: $stringOriginal\n";
echo "String invertida: $stringInvertida\n";
?>

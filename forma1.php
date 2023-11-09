<?php

/**
 * A FORMA MAIS PERFORMÁTICA E SIMPLES É ATRAVÉS DE REGEX
 * Poderia ainda ser feito usando IFs ou Switch porém ficaria um código muito maior
 */


$entrada = "You _should_ see the new walrus at the zoo!
 Move it from *Accounts Payable* to *Receiving*.";

$entrada .= "I saw _Chelydra serpentina_ in *Centennial Park*.
 _ _ __ _ yabba dabba _ * dooooo * ****
 _now_I_know_*my*_ABC_next_time_*sing*it_with_me";

$resultado = '';
$isItalic = false;
$isBold = false;

for ($i = 0; $i < strlen($entrada); $i++) {
    $char = $entrada[$i];

    switch ($char) {
        case '_':
            $isItalic = !$isItalic;
            if ($isItalic) {
                $resultado .= '<i>';
            } else {
                $resultado .= '</i>';
            }
            break;

        case '*':
            $isBold = !$isBold;
            if ($isBold) {
                $resultado .= '<b>';
            } else {
                $resultado .= '</b>';
            }
            break;

        default:
            $resultado .= $char;
            break;
    }
}
echo $resultado . PHP_EOL;

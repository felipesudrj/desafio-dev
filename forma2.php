<?php

$entrada2 = "You _should_ see the new walrus at the zoo!
Move it from *Accounts Payable* to *Receiving*.";

$entrada = "I saw _Chelydra serpentina_ in *Centennial Park*.
_ _ __ _ yabba dabba _ * dooooo * ****
_now_I_know_*my*_ABC_next_time_*sing*it_with_me";


$token = strtok($entrada, " ");
while ($token !== false) {
    
    $result = preg_replace('/\*([^\*]+)\*/', '<b>$1</b>', $token);
    $result = preg_replace('/_([^_]+)_/', '<i>$1</i>', $result);
    $result . ' ';
    $token = strtok(" ");
}
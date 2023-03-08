<?php
function isBitten() {
    $rdm = rand(1,2);
    if ($rdm == 1) {
        return TRUE;
    }else{
        return FALSE;
    }
}
// imprimir//
if (isBitten()) {
    echo "MORDIDO";
}else{
    echo "NO TE MORDIO";
}
?>
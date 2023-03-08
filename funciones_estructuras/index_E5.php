<?php
$grd = 22;

if ($grd >= 60) {
    echo "La teva nota es $grd i correspon a Primera Divisio";
} elseif ($grd <= 59 && $grd >= 45) {
    echo "La teva nota es $grd i correspon a Segona Divisio";
} elseif ($grd <= 44 && $grd >= 33) {
    echo "La teva nota es $grd i correspon a Tercera Divisio";
} else{
    echo "La teva nota es $grd i estas reprovat";
}

?>
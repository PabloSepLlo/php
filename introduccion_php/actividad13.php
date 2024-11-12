<?php
    $a = 7;
    $b = 17;
    $c =15;
    if (($a > $b) && ($a > $c)){
        echo "$a es el mayor numero";
    }
    elseif (($b > $a) && ($b > $c)) {
        echo "$b es el mayor numero";
    }
    else {
        echo "$c es el mayor";
    }
?>
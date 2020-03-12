<?php
    function calculaFatorial($a) {
        $resultado = 1;
        while ($a >= 1) {
            $resultado = $resultado * $a;
            $a--;
        }
        return  $resultado;
    }
?>
<?php
    function somarIntevalo($num1, $num2) {
        $soma = 0;

        for ($i = $num1; $i <= $num2 ; $i++) { 
            $soma = $soma + $i;
        }

        return $soma;
    }
?>
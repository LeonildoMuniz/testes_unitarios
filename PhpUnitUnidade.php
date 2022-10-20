<?php

class PhpUnitUnidade{

    public function validaQtdePares($numeros)
    {

        $pares = 0;
        foreach($numeros as $numeros)
        {
            if($numeros %2 ==0)
            {
                $pares ++;
            }
        }
        return $pares;
    }

    public function validaQtdeOperacoes($num1, $num2, $operador)
    {
        $result = 0;

        if($operador = "+"){
            $result = $num1+$num2;
        }
        elseif($operador = "/")
        {
            if($num2=0)
            {
                $result = 0;
            }
            elseif($num2>0)
            {
                $result = $num1/$num2;
            }
        }
        elseif($operador = "-")
        {
            $result = $num1-$num2;
        }
        elseif($operador = "*")
        {
            $result = $num1*$num2;
        }

        return $result;
    }

    public function contCaracter($texto)
    {
        $valida;
        $totalCaracteres = strlen($texto);

        if($totalCaracteres >= 5)
        {
            $valida = true;
        }
        else
        {
            $valida = false;
        }

        return $valida;
    }
    
}

?>

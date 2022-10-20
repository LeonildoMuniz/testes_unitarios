<?php
require_once "PhpUnitUnidade.php";
use PHPUnit\Framework\TestCase;

class PhpUnitUnidadeTeste extends TestCase {
    public function testValidaQtdePares(){
        $numeros = [1,2,6,4,8];

        $phpUnitUnidade = new PhpUnitUnidade();
        $result = $phpUnitUnidade->validaQtdePares($numeros);
        $this->assertGreaterThan(3,$result);
    }

    public function testValidaOperacoes(){
        $num1 = 10;
        $num2 = 5;
        $operador = "+";

        $phpUnitUnidade = new PhpUnitUnidade();
        $result = $phpUnitUnidade->validaQtdeOperacoes($num1,$num2,$operador);
        $this->assertEquals(15,$result);

    }

}


?>
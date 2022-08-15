<?php

namespace Cliente\Tests;

use Cliente\Helper\Calculadora;
use Cliente\Helper\Cliente;
use PHPUnit\Framework\TestCase;

/**
 * @group calculadora
 */
final class CalculadoraTest extends TestCase {
    /**
     * @covers ::Cliente\Helper\Calculadora\somar
     * @test
     */
    public function Somar() {

        $mock_cliente = $this->createMock(Cliente::class); // new Calculadora(new Cliente)
        $calc = new Calculadora($mock_cliente);
        $resultado = $calc->somar(1,2);
        $this->assertEquals(3, $resultado);
    }
    /**
     * @covers ::Cliente\Helper\Calculadora\listar
     */
    public function testListar() {
        $mock_cliente = $this->createMock(Cliente::class);

        $expected = [
            'Jonas' => '1',
            'Andre' => '1',
            'João'  => '1',
        ];
        $mock_cliente
            ->expects($this->once())
            ->method('listaClientes')
            ->willReturn($expected);

        $calc = new Calculadora($mock_cliente);
        $result = $calc->listar();

        $this->assertEquals($expected, $result);
        $this->assertIsArray($result);
    }

    public function ProviderTestEncontraCliente () {
        $dataset = [];
        $dataset[] = [
            'cliente' => 'Amanda',
            'resultado_esperado' => ['msn' => 'Cliente não encontrado'],
        ];
        $dataset[] = [
            'cliente' => '',
            'resultado_esperado' => ['msn' => 'Cliente não encontrado'],
        ];
        $dataset[] = [
            'cliente' => 'Jonas',
            'resultado_esperado' => true,
        ];
        return $dataset;
    }

    /**
     * @covers ::Cliente\Helper\Calculadora\encontraCliente
     * @dataProvider ProviderTestEncontraCliente
     */
    public function testEncontraCliente(string $cliente, $resultado_esperado) {

        $mock_cliente = $this->createMock(Cliente::class);

        $mock_cliente
         ->expects($this->once())
         ->method('listaClientes')
         ->willReturn([
            'Jonas' => '1',
            'Andre' => '1',
            'João'  => '1',
        ]);

        $calc = new Calculadora($mock_cliente);
        $result = $calc->encontrarCliente($cliente);

        $this->assertEquals($resultado_esperado, $result);
    } 
}

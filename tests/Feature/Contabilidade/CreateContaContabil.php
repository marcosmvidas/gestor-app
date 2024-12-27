<?php

namespace Tests\Feature\Contabilidade;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateContaContabil extends TestCase
{
    protected $validatorMock;
    protected $createConta;

    protected function setUp(): void
    {
        $this->validatorMock = Mockery::mock(ContaContabilValidate::class);
        $this->createConta = new CreateContaContabil($this->validatorMock);
    }

    public function testCreateContaContabil()
    {
        $input = [
            'classificacao' => '01',
            'codigo_reduzido' => '10001-1',
            'descricao' => 'Conta de Ativo',
            'tipo' => 'Ativo',
            'natureza' => 'D',
            'ativo' => true,
        ];

        // Mocks a validação
        $this->validatorMock->shouldReceive('validate')->once()->with($input);

        // Mocks a criação da conta
        $contaMock = Mockery::mock(ContaContabilModel::class);
        $contaMock->shouldReceive('create')->once()->with($input)->andReturnSelf();

        $result = $this->createConta->create($input);

        $this->assertInstanceOf(ContaContabilModel::class, $result);  // Verifica se a instância retornada é do tipo esperado
    }
}
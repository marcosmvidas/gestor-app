<?php

namespace App\Actions\Contabilidade;

use App\Repositories\ContaContabilRepository;
use App\Actions\Contabilidade\InputContaContabil;
use App\Services\Validation\ContaContabilValidate;

/**
 * Classe responsável pela criação de uma conta contábil.
 *
 * Esta classe trata da validação dos dados, preparação dos dados de entrada,
 * e chamada ao repositório para realizar a criação da conta contábil no banco de dados.
 */
class CreateContaContabil
{
    protected $validator;
    protected $prepareInput;
    protected $contaContabilRepository;

    /**
     * Cria uma nova instância da classe CreateContaContabil.
     *
     * @param ContaContabilValidate $validator Instância do validador de conta contábil.
     * @param InputContaContabil $prepareInput Instância para preparação dos dados de entrada.
     * @param ContaContabilRepository $contaContabilRepository Instância do repositório para manipulação da conta contábil.
     */
    public function __construct(
        ContaContabilValidate $validator,
        InputContaContabil $prepareInput,
        ContaContabilRepository $contaContabilRepository
    )

    {
        $this->validator = $validator;
        $this->prepareInput = $prepareInput;
        $this->contaContabilRepository = $contaContabilRepository;
    }

    /**
     * Cria uma conta contábil no sistema.
     *
     * Este método realiza a validação e preparação dos dados de entrada,
     * e chama o repositório para persistir a conta contábil no banco de dados.
     *
     * @param array $input Dados necessários para a criação da conta contábil.
     * @return int O ID da conta contábil criada.
     * @throws \Exception Se houver algum erro na criação da conta contábil.
     */
    public function create(array $input): int
    {
        $this->validator->validate($input);

        $inputData = $this->prepareInput->prepare($input);

        if (!$inputData) {
            throw new \Exception("Erro  ao criar a conta contábil.");
        }

        return $inputData->id;
    }
}

<?php

namespace App\Actions\Contabilidade;

use App\Repositories\ContaContabilRepository;
use App\Services\Validation\ContaContabilValidate;
use App\Actions\Contabilidade\InputContaContabil;

/**
 * Classe responsável pela atualização de uma conta contábil.
 *
 * Esta classe realiza a validação dos dados, preparação dos dados de entrada, e chama o repositório para atualizar
 * os dados da conta contábil no banco de dados.
 */
class UpdateContaContabil
{
    protected $validator;
    protected $prepareInput;
    protected $repository;

    /**
     * Cria uma nova instância da classe UpdateContaContabil.
     *
     * @param ContaContabilValidate $validator Instância do validador de conta contábil.
     * @param InputContaContabil $prepareInput Instância para preparação dos dados de entrada.
     * @param ContaContabilRepository $repository Instância do repositório para manipulação da conta contábil.
     */
    public function __construct(
        ContaContabilValidate $validator,
        InputContaContabil $prepareInput,
        ContaContabilRepository $repository,
    )

    {
        $this->validator = $validator;
        $this->prepareInput = $prepareInput;
        $this->repository = $repository;
    }

    /**
     * Atualiza uma conta contábil no sistema.
     *
     * Este método realiza a validação e preparação dos dados de entrada,
     * e chama o repositório para atualizar a conta contábil no banco de dados.
     *
     * @param array $input Dados necessários para a atualização da conta contábil.
     * @param int $id O ID da conta contábil a ser atualizada.
     * @throws \Exception Se houver algum erro na atualização da conta contábil.
     */
    public function update(array $input, int $id): void
    {
        $this->validator->validate($input);

        $inputData = $this->prepareInput->prepare($input);

        $updated = $this->repository->update($id, $inputData);

        if (!$updated) {
            throw new \Exception('Erro ao atualizar a conta contábil.');
        }
    }
}

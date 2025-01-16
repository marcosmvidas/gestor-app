<?php

namespace App\Actions\Rubrica;

use App\Repositories\RubricaRepository;
use App\Actions\Rubrica\InputRubrica;
use App\Services\Validation\RubricaValidate;

/**
 * Classe responsável pela atualização da rubric.
 *
 * Esta classe realiza a validação dos dados, preparação dos dados de entrada, e chama o repositório para atualizar
 * os dados da conta contábil no banco de dados.
 */
class UpdateRubrica
{
    protected $validator;
    protected $prepareInput;
    protected $repository;

    /**
     * Cria uma nova instância da classe UpdateRubrica.
     *
     * @param RubricaValidate $validator Instância do validador da rubrica.
     * @param InputRubrica $prepareInput Instância para preparação dos dados de entrada.
     * @param RubricaRepository $repository Instância do repositório para manipulação da rubrica.
     */
    public function __construct(
        RubricaValidate $validator,
        InputRubrica $prepareInput,
        RubricaRepository $repository,
    )

    {
        $this->validator = $validator;
        $this->prepareInput = $prepareInput;
        $this->repository = $repository;
    }

    /**
     * Atualiza uma rubrica no sistema.
     *
     * Este método realiza a validação e preparação dos dados de entrada,
     * e chama o repositório para atualizar a rubrica no banco de dados.
     *
     * @param array $input Dados necessários para a atualização da rubrica.
     * @param int $id O ID da rubrica a ser atualizada.
     * @throws \Exception Se houver algum erro na atualização da rubrica.
     */
    public function update(array $input, int $id): void
    {
        $this->validator->validate($input);

        $inputData = $this->prepareInput->prepare($input);

        $updated = $this->repository->update($id, $inputData);

        if (!$updated) {
            throw new \Exception('Erro ao atualizar a rubrica.');
        }
    }
}



<?php

namespace App\Actions\Rubrica;

use App\Repositories\RubricaRepository;
use App\Actions\Rubrica\InputRubrica;
use App\Services\Validation\RubricaValidate;

/**
 * Classe responsável pela criação de uma rubrica utilizada na folha de pagamento.
 *
 * Esta classe lida com a validação dos dados da rubrica, preparação dos dados de entrada
 * e a interação com o repositório para realizar a criação da rubrica no banco de dados.
 * A rubrica pode se referir a um tipo de compensação ou dedução a ser aplicada aos salários
 * dos funcionários, como horas extras, descontos, impostos, etc.
 */
class CreateRubrica
{
    protected $validator;
    protected $prepareInput;
    protected $repository;

    /**
     * Cria uma nova instância da classe CreateRubrica.
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
     * Cria uma rubrica para folha de pagamento no sistema.
     *
     * Este método realiza a validação e preparação dos dados de entrada,
     * e chama o repositório para persistir a rubrica no banco de dados.
     *
     * @param array $input Dados necessários para a criação da rubrica.
     * @return int O ID da rubrica criada.
     * @throws \Exception Se houver algum erro na criação da rubrica.
     */
    public function create(array $input): int
    {
        $this->validator->validate($input);

        $inputData = $this->prepareInput->prepare($input);

        $inputData = $this->repository->create($inputData);

        if (!$inputData) {
            throw new \Exception("Erro  ao criar a rubrica");
        }

        return $inputData->id;
    }

}

<?php

namespace App\Actions\Contabilidade;

use App\Repositories\ContaContabilRepository;
use App\Services\Validation\ContaContabilValidate;
use App\Actions\Contabilidade\InputContaContabil;

class UpdateContaContabil
{
    protected $validator;
    protected $prepareInput;
    protected $repository;

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

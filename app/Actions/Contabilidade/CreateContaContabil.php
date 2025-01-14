<?php

namespace App\Actions\Contabilidade;

use App\Repositories\ContaContabilRepository;
use App\Actions\Contabilidade\InputContaContabil;
use App\Services\Validation\ContaContabilValidate;

class CreateContaContabil
{
    protected $validator;
    protected $prepareInput;
    protected $contaContabilRepository;

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

    public function create(array $input): int
    {
        $this->validator->validate($input);

        $inputData = $this->prepareInput->prepare($input);

        $conta = $this->contaContabilRepository->create($inputData);

        return $conta->id;
    }
}

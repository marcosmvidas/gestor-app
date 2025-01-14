<?php

namespace App\Actions\Contabilidade;

use App\Models\ContaContabilModel;
use App\Actions\Contabilidade\InputContaContabil;
use App\Services\Validation\ContaContabilValidate;

class CreateContaContabil
{
    protected $validator;
    protected $prepareInput;

    public function __construct(ContaContabilValidate $validator, InputContaContabil $prepareInput)
    {
        $this->validator = $validator;
        $this->prepareInput = $prepareInput;
    }

    public function create(array $input): ContaContabilModel
    {
        $this->validator->validate($input);

        $inputData = $this->prepareInput->prepare($input);

        return ContaContabilModel::create($inputData);
    }
}

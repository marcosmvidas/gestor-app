<?php

namespace App\Actions\Contabilidade;

use App\Models\ContaContabilModel;
use App\Services\Validation\ContaContabilValidate;
use App\Actions\Contabilidade\InputContaContabil;

class UpdateContaContabil
{
    protected $validator;
    protected $prepareInput;

    public function __construct(ContaContabilValidate $validator, InputContaContabil $prepareInput)
    {
        $this->validator = $validator;
        $this->prepareInput = $prepareInput;
    }

    public function update(array $input, ContaContabilModel $conta): ContaContabilModel
    {
        $this->validator->validate($input);

        $inputData = $this->prepareInput->prepare($input);

        $updated = $conta->update($inputData);

        if (!$updated) {
            throw new \Exception('Erro ao atualizar a conta contábil.');
        }

        return $conta;
    }
}

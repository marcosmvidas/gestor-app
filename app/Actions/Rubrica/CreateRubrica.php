<?php

namespace App\Actions\Rubrica;

use App\Models\RubricaModel;
use App\Actions\Rubrica\InputRubrica;
use App\Services\Validation\RubricaValidate;

class CreateRubrica
{
    protected $validator;
    protected $prepareInput;

    public function __construct(RubricaValidate $validator, InputRubrica $prepareInput )
    {
        $this->validator = $validator;
        $this->prepareInput;
    }

    /**
     * Cria uma nova rubrica.
     *
     * @param array $input
     * @return RubricaModel
     */
    public function create(array $input): RubricaModel
    {
        $this->validator->validate($input);

        $inputData = $this->prepareInput->prepare($input);

        return RubricaModel::create($inputData);
    }
}




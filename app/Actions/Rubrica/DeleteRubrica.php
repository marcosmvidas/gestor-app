<?php

namespace App\Actions\Rubrica;

use App\Repositories\RubricaRepository;

class DeleteRubrica
{
    protected $rubricaRepository;

    public function __construct(RubricaRepository $rubricaRepository)
    {
        $this->rubricaRepository = $rubricaRepository;
    }

    public function delete(int $id): void
    {
        $this->rubricaRepository->delete($id);
    }
}

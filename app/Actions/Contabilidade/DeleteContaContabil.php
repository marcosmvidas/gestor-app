<?php

namespace App\Actions\Contabilidade;

use App\Repositories\ContaContabilRepository;

class DeleteContaContabil
{
    protected $contaContabilRepository;

    public function __construct(ContaContabilRepository $contaContabilRepository)
    {
        $this->contaContabilRepository = $contaContabilRepository;
    }

    public function delete(int $id): void
    {
        $this->contaContabilRepository->delete($id);
    }
}

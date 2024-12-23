<?php

namespace App\Services;

use App\Repositories\ContaContabilRepository;

class ContaContabilService
{
    protected $contaContabilRepository;

    public function __construct(ContaContabilRepository $contaContabilRepository)
    {
        $this->contaContabilRepository = $contaContabilRepository;
    }

    /**
     * Cria uma nova conta contábil com o código reduzido gerado automaticamente.
     *
     * @param array $data
     * @return \App\Models\ContaContabil
     */
    public function create(array $data)
    {
        return $this->contaContabilRepository->create($data);
    }

    /**
     * Atualiza uma conta contábil existente.
     *
     * @param int $id
     * @param array $data
     * @return \App\Models\ContaContabil
     */
    public function update(int $id, array $data)
    {
        return $this->contaContabilRepository->update($id, $data);
    }

    /**
     * Exclui uma conta contábil.
     *
     * @param int $id
     * @return bool|null
     */
    public function delete(int $id)
    {
        return $this->contaContabilRepository->delete($id);
    }

    /**
     * Lista as contas contábeis com paginação.
     *
     * @param int $perPage
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function list(int $perPage = 2, string $orderBy = 'descricao', string $orderDirection = 'asc')
    {
        return $this->contaContabilRepository->list($perPage, $orderBy, $orderDirection);
    }

}

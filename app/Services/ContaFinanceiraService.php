<?php

namespace App\Services;

use App\Repositories\ContaFinanceiraRepository;

class ContaFinanceiraService
{
    protected $contaFinanceiraRepository;

    public function __construct(ContaFinanceiraRepository $contaFinanceiraRepository)
    {
        $this->contaFinanceiraRepository = $contaFinanceiraRepository;
    }

    /**
     * Atualiza uma conta financeira existente.
     *
     * @param int $id
     * @param array $data
     * @return \App\Models\ContaFinanceira
     */
    public function update(int $id, array $data)
    {
        return $this->contaFinanceiraRepository->update($id, $data);
    }

    /**
     * Exclui uma conta financeira.
     *
     * @param int $id
     * @return bool|null
     */
    public function delete(int $id)
    {
        return $this->contaFinanceiraRepository->delete($id);
    }

    /**
     * Lista as contas financeiras com paginação.
     *
     * @param int $perPage
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function list(int $perPage = 2, string $orderBy = 'descricao', string $orderDirection = 'asc')
    {
        return $this->contaFinanceiraRepository->list($perPage, $orderBy, $orderDirection);
    }
}

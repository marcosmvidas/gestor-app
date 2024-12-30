<?php

namespace App\Repositories;

use App\Models\ContaFinanceiraModel;

class ContaFinanceiraRepository
{
    /**
     * Cria uma nova conta financeira.
     *
     * @param array $data
     * @return \App\Models\ContaFinanceiraModel
     */
    public function create(array $data)
    {
        return ContaFinanceiraModel::create($data);
    }

    /**
     * Atualiza uma conta financeira.
     *
     * @param int $id
     * @param array $data
     * @return \App\Models\ContaFinanceiraModel
     */
    public function update(int $id, array $data)
    {
        $conta = ContaFinanceiraModel::findOrFail($id);
        $conta->update($data);
        return $conta;
    }

    /**
     * Deleta uma conta financeira.
     *
     * @param int $id
     * @return bool|null
     */
    public function delete(int $id)
    {
        $conta = ContaFinanceiraModel::findOrFail($id);
        return $conta->delete();
    }

    /**
     * Lista as contas financeiras com paginação e ordenação.
     *
     * @param int $perPage
     * @param string $orderBy
     * @param string $orderDirection
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function list(int $perPage = 5, string $orderBy = 'descricao', string $orderDirection = 'asc')
    {
        return ContaFinanceiraModel::orderBy($orderBy, $orderDirection)
            ->paginate($perPage);
    }

}

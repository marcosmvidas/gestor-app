<?php

namespace App\Repositories;

use App\Models\ContaContabilModel;

class ContaContabilRepository
{
    /**
     * Cria uma nova conta contábil.
     *
     * @param array $data
     * @return \App\Models\ContaContabilModel
     */
    public function create(array $data): ContaContabilModel
    {
        $data['codigo_reduzido'] = $this->generateCodigoReduzido();

        return ContaContabilModel::create($data);
    }

    public function findById(int $id)
    {
        return ContaContabilModel::findOrFail($id);
    }

    /**
     * Atualiza uma conta contábil.
     *
     * @param int $id
     * @param array $data
     * @return \App\Models\ContaContabilModel
     */
    public function update(int $id, array $data): bool
    {
        $conta = ContaContabilModel::findOrFail($id);

        return $conta->update($data);
    }

    /**
     * Deleta uma conta contábil.
     *
     * @param int $id
     * @return bool|null
     */
    public function delete(int $id)
    {
        $conta = ContaContabilModel::findOrFail($id);
        return $conta->delete();
    }

    /**
     * Lista as contas contábeis com paginação e ordenação.
     *
     * @param int $perPage
     * @param string $orderBy
     * @param string $orderDirection
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function list(int $perPage = 5, string $orderBy = 'descricao', string $orderDirection = 'asc')
    {
        return ContaContabilModel::orderBy($orderBy, $orderDirection)
            ->paginate($perPage);
    }

    /**
     * Gera o código reduzido para a conta contábil.
     *
     * @return string
     */
    protected function generateCodigoReduzido()
    {
        return '10000-' . rand(0, 9);
    }

     public function getMaxCodigoReduzido()
     {
         return ContaContabilModel::max('codigo_reduzido');
     }
}

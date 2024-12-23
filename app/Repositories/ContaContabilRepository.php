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
    public function create(array $data)
    {
        // Geração do código reduzido automaticamente
        $data['codigo_reduzido'] = $this->generateCodigoReducido();

        // Cria a conta
        return ContaContabilModel::create($data);
    }

    /**
     * Atualiza uma conta contábil.
     *
     * @param int $id
     * @param array $data
     * @return \App\Models\ContaContabilModel
     */
    public function update(int $id, array $data)
    {
        $conta = ContaContabilModel::findOrFail($id);
        $conta->update($data);
        return $conta;
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
    protected function generateCodigoReducido()
    {
        // Lógica para gerar o código reduzido
        return '10000-' . rand(0, 9);  // Exemplo simples de código reduzido
    }
}

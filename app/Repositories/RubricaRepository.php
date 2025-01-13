<?php

namespace App\Repositories;

use App\Models\RubricaModel;

class RubricaRepository
{
    public function all()
    {
        return RubricaModel::all();
    }

    public function findById(int $id)
    {
        return RubricaModel::findOrFail($id);
    }

    public function create(array $data)
    {
        return RubricaModel::create($data);
    }

    public function update(int $id, array $data)
    {
        $rubrica = $this->findById($id);
        $rubrica->update($data);
        return $rubrica;
    }

    public function delete(int $id)
    {
        $rubrica = $this->findById($id);
        $rubrica->delete();
    }

    public function list(int $perPage = 5, string $orderBy = 'descricao', string $orderDirection = 'asc')
    {
        return RubricaModel::orderBy($orderBy, $orderDirection)
            ->paginate($perPage);
    }


}

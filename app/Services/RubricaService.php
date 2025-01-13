<?php

namespace App\Services;

use App\Repositories\RubricaRepository;
use App\Services\Validation\RubricaValidate;

class RubricaService
{
    protected $repository;

    public function __construct(RubricaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function list(int $perPage = 2, string $orderBy = 'descricao', string $orderDirection = 'asc')
    {
        return $this->repository->list($perPage, $orderBy, $orderDirection);
    }

    public function show(int $id)
    {
        return $this->repository->findById($id);
    }

    public function store(array $data)
    {
        RubricaValidate::validate($data);

        return $this->repository->create($data);
    }

    public function update(int $id, array $data)
    {
        RubricaValidate::validate($data, true);

        return $this->repository->update($id, $data);
    }

    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }
}

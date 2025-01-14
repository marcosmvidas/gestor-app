<?php

namespace App\Actions\Rubrica;

use App\Models\RubricaModel;

class DeleteRubrica
{
    /**
     * Deleta uma rubrica.
     *
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        // Localizando a rubrica
        $rubrica = RubricaModel::findOrFail($id);

        // Deletando a rubrica
        $rubrica->delete();
    }
}

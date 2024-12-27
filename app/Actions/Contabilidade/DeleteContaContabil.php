<?php 

namespace App\Actions\Contabilidade;

use App\Models\ContaContabilModel;

class DeleteContaContabil
{
    public function delete(ContaContabilModel $conta): void
    {
        $conta->delete();
    }
}

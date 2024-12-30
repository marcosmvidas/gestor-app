<?php 

namespace App\Actions\Financeiro;

use App\Models\ContaFinanceiraModel;

class DeleteContaFinanceira
{
    public function delete(ContaFinanceiraModel $conta): void
    {
        $conta->delete();
    }
}

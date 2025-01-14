<?php

namespace App\Actions\Contabilidade;

use App\Repositories\ContaContabilRepository;

/**
 * Classe responsável pela exclusão de uma conta contábil.
 *
 * Esta classe manipula a exclusão de contas contábeis no banco de dados, chamando o repositório para remover a conta.
 */
class DeleteContaContabil
{
    protected $contaContabilRepository;

    /**
     * Cria uma nova instância da classe DeleteContaContabil.
     *
     * @param ContaContabilRepository $contaContabilRepository Instância do repositório para manipulação da conta contábil.
     */
    public function __construct(ContaContabilRepository $contaContabilRepository)
    {
        $this->contaContabilRepository = $contaContabilRepository;
    }

    /**
     * Exclui uma conta contábil do sistema.
     *
     * Este método chama o repositório para excluir a conta contábil do banco de dados.
     *
     * @param int $id O ID da conta contábil a ser excluída.
     * @return bool Retorna true se a exclusão foi bem-sucedida, false caso contrário.
     * @throws \Exception Se ocorrer algum erro durante a exclusão.
     */
    public function delete(int $id): bool
    {
        return $this->contaContabilRepository->delete($id);
    }
}

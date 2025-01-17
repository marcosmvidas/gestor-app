<?php

namespace App\Actions\Contabilidade;

class InputContaContabil
{
    /**
     * Retorna os campos padrão para a conta contabil.
     *
     * @return array
     */
    public static function fields(): array
    {
        return [
            'classificacao' => null,
            'codigo_reduzido' =>  null,
            'descricao' => null,
            'tipo' => null,
            'natureza' => null,
            'cta_referencial_sped' => null,
            'observacao' => null,
            'ativo' => true,
        ];
    }

    /**
     * Prepara os dados de entrada para criação ou atualização.
     *
     * @param array $input
     * @return array
     */
    public function prepare(array $input): array
    {
        $fields = self::fields();

        $prepared = array_intersect_key($input, $fields);

        return $prepared;
    }
}

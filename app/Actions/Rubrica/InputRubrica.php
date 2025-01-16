<?php

namespace App\Actions\Rubrica;

class InputRubrica
{
    /**
     * Retorna os campos padrão para a rubrica.
     *
     * @return array
     */
    public static function fields(): array
    {
        return [
            'codigo' => null,
            'descricao' => null,
            'tipo' => null,
            'incidencias' => [],
            'ordem_calculo' => null,
            'natureza_rubrica' => null,
            'chave_contabil' => null,
            'chave_financeira' => null,
            'campo_trct' => null,
            'exibe_em_folha' => false,
        ];
    }

    /**
     * Prepara os dados para criação ou atualização.
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

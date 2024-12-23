<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContaContabilModel extends Model
{
    use HasFactory;

    protected $table = 'contas_contabil';

    protected $fillable = [
        'classificacao',
        'descricao',
        'tipo',
        'natureza',
        'cta_referencial_sped',
        'observacao',
        'ativo',
    ];

    // Método para gerar o código reduzido com base no próximo número sequencial
    public static function gerarCodigoReduzido(): string
    {
        // Obtém o maior código base atual ou inicia em 10000
        $ultimoCodigoBase = self::query()->max('codigo_reduzido');
        $proximoBase = $ultimoCodigoBase ? intval(explode('-', $ultimoCodigoBase)[0]) + 1 : 10000;

        $pesos = [2, 5, 4, 3, 2];
        $digitos = array_reverse(str_split($proximoBase));
        $soma = 0;

        foreach ($digitos as $index => $digito) {
            if (isset($pesos[$index])) {
                $soma += $digito * $pesos[$index];
            }
        }

        $resultado = $soma % 11;

        // Caso o resultado seja >= 10, retorna 0
        if ($resultado >= 10) {
            $resultado = 0;
        }

        return "{$proximoBase}-{$resultado}";
    }

    // Hook para definir o código reduzido automaticamente
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($conta) {
            $conta->codigo_reduzido = self::gerarCodigoReduzido();
        });
    }
}

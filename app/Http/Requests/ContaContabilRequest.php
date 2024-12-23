<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContaContabilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'classificacao' => 'required|string|max:14|unique:contas_contabil,classificacao',
            'codigo_reduzido' => 'required|string|unique:contas_contabil,codigo_reduzido',
            'descricao' => 'required|string|max:255',
            'tipo' => 'required|in:A,S',
            'natureza' => 'nullable|in:D,C',
            'cta_referencial_sped' => 'nullable|string|max:255',
            'observacao' => 'nullable|string',
            'ativo' => 'boolean',
        ];
    }
}

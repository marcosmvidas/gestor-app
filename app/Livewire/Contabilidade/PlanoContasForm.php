<?php

namespace App\Livewire\Contabilidade;

use Livewire\Component;
use App\Actions\Contabilidade\CreateContaContabil;
use App\Actions\Contabilidade\UpdateContaContabil;
use App\Actions\Contabilidade\DeleteContaContabil;
use App\Repositories\ContaContabilRepository;

class PlanoContasForm extends Component
{
    public $editing = false;
    public $contaId;
    public $classificacao;
    public $codigo_reduzido;
    public $descricao;
    public $tipo;
    public $natureza;
    public $cta_referencial_sped;
    public $observacao;
    public $ativo = true;

    public function mount($contaId = null)
    {
        $repository = app(ContaContabilRepository::class);

        if ($contaId) {
            $this->editing = true;

            $conta = $repository->findById($contaId);
            if ($conta) {
                $this->fill($conta->toArray());
            }
        } else {
            $this->codigo_reduzido = self::gerarCodigoReduzido();
        }
    }

    public static function gerarCodigoReduzido(): string
    {
        $repository = app(ContaContabilRepository::class);

        $ultimoCodigoBase = $repository->getMaxCodigoReduzido();
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

        if ($resultado >= 10) {
            $resultado = 0;
        }

        return "{$proximoBase}-{$resultado}";
    }

    public function createConta()
    {
        $input = $this->prepareInputData();

        $createAction = app(CreateContaContabil::class);
        $createAction->create($input);

        session()->flash('message', 'Conta contábil criada com sucesso!');
        $this->resetForm();
    }

    public function updateConta()
    {
        $input = $this->prepareInputData();

        $updateAction = app(UpdateContaContabil::class);
        $updateAction->update($input, $this->contaId);

        session()->flash('message', 'Conta contábil atualizada com sucesso!');
        $this->resetForm();
    }

    public function deleteConta()
    {
        $deleteAction = app(DeleteContaContabil::class);
        $deleteAction->delete($this->contaId);

        session()->flash('message', 'Conta contábil excluída com sucesso!');
        $this->resetForm();
    }

    private function prepareInputData(): array
    {
        return [
            'classificacao' => $this->classificacao,
            'codigo_reduzido' => $this->codigo_reduzido,
            'descricao' => $this->descricao,
            'tipo' => $this->tipo,
            'natureza' => $this->natureza,
            'cta_referencial_sped' => $this->cta_referencial_sped ?? '',
            'observacao' => $this->observacao ?? '',
            'ativo' => $this->ativo,
        ];
    }

    private function resetForm()
    {
        $this->reset([
            'classificacao', 'codigo_reduzido', 'descricao', 'tipo', 'natureza', 'cta_referencial_sped', 'observacao', 'ativo'
        ]);
        $this->editing = false;
    }

    public function render()
    {
        return view('livewire.contabilidade.plano-contas-form')->layout('layouts.app');
    }
}

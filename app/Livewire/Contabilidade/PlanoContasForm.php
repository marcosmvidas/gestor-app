<?php

namespace App\Livewire\Contabilidade;

use Livewire\Component;
use App\Actions\Contabilidade\InputContaContabil;
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

    protected $fields = [];
    protected $inputAction;
    protected $createAction;
    protected $updateAction;
    protected $deleteAction;
    protected $repository;

    public function __construct()
    {
        $this->inputAction = app(InputContaContabil::class);
        $this->createAction = app(CreateContaContabil::class);
        $this->updateAction = app(UpdateContaContabil::class);
        $this->deleteAction = app(DeleteContaContabil::class);
        $this->repository = app(ContaContabilRepository::class);

        $this->fields = InputContaContabil::fields();
        foreach ($this->fields as $field => $defaultValue) {
            $this->{$field} = $defaultValue;
        }
    }

    public function mount($contaId = null)
    {
        if ($contaId) {
            $this->editing = true;

            $conta = $this->repository->findById($contaId);
            if ($conta) {
                $this->fill($conta->toArray());
            }
        } else {
            $this->codigo_reduzido = self::gerarCodigoReduzido();
        }
    }

    public static function gerarCodigoReduzido(): string
    {
        $ultimoCodigoBase = app(ContaContabilRepository::class)->getMaxCodigoReduzido();
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
        $input = $this->inputAction->prepare($this->getFormData());

        $this->createAction->create($input);

        session()->flash('message', 'Conta contábil criada com sucesso!');
        $this->resetForm();
        $this->codigo_reduzido = self::gerarCodigoReduzido();
    }

    public function updateConta()
    {
        $input = $this->inputAction->prepare($this->getFormData());

        $this->updateAction->update($input, $this->contaId);

        session()->flash('message', 'Conta contábil atualizada com sucesso!');
        $this->resetForm();
    }

    public function deleteConta()
    {
        $this->deleteAction->delete($this->contaId);

        session()->flash('message', 'Conta contábil excluída com sucesso!');
        $this->resetForm();
    }

    private function getFormData(): array
    {
        $data = [];
        foreach ($this->fields as $field => $_) {
            $data[$field] = $this->{$field};
        }

        return $data;
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

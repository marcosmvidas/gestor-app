<?php

namespace App\Livewire\FolhaPagamento;

use Livewire\Component;
use App\Repositories\RubricaRepository;
use App\Actions\Rubrica\InputRubrica;
use App\Actions\Rubrica\CreateRubrica;
use App\Actions\Rubrica\UpdateRubrica;
use App\Actions\Rubrica\DeleteRubrica;

class RubricaForm extends Component
{
    public $editing = false;
    public $rubricaId;
    public $codigo;
    public $descricao;
    public $tipo;
    public $base_calculo;
    public $observacao;
    public $ativo = true;
    public $incidencias = [];
    public $ordem_calculo;
    public $natureza_rubrica;
    public $chave_contabil;
    public $chave_financeira;
    public $campo_trct;
    public $exibe_em_folha;

    protected $fields = [];
    protected $inputAction;
    protected $createAction;
    protected $updateAction;
    protected $deleteAction;
    protected $rubricaRepository;

    public function __construct()
    {
        $this->inputAction = app(InputRubrica::class);
        $this->createAction = app(CreateRubrica::class);
        $this->updateAction = app(UpdateRubrica::class);
        $this->deleteAction = app(DeleteRubrica::class);
        $this->rubricaRepository = app(RubricaRepository::class);

        $this->fields = InputRubrica::fields();
        foreach ($this->fields as $field => $defaultValue) {
            $this->{$field} = $defaultValue;
        }
    }

    public function mount($rubricaId = null)
    {
        if ($rubricaId) {
            $this->editing = true;

            $rubrica = $this->rubricaRepository->findById($rubricaId);
            if ($rubrica) {
                $this->fill($rubrica->toArray());
            }
        }
    }

    public function createRubrica()
    {
        $input = $this->prepareInput();

        $this->createAction->create($input);

        session()->flash('message', 'Rubrica criada com sucesso!');
        $this->resetForm();
    }

    public function updateRubrica()
    {
        $input = $this->prepareInput();

        $this->updateAction->update($input, $this->rubricaId);

        session()->flash('message', 'Rubrica atualizada com sucesso!');
        $this->resetForm();
    }

    public function deleteRubrica()
    {
        $this->deleteAction->delete($this->rubricaId);

        session()->flash('message', 'Rubrica excluída com sucesso!');
        $this->resetForm();
    }

    private function prepareInput(): array
    {
        return $this->inputAction->prepare($this->getFormData());
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
            'codigo', 'descricao', 'tipo', 'ordem_calculo', 'natureza_rubrica', 'chave_contabil', 'chave_financeira', 'incidencias', 'campo_trct', 'exibe_em_folha',
        ]);
        $this->editing = false;
    }

    public function render()
    {
        return view('livewire.folha-pagamento.rubrica-form')->layout('layouts.app');
    }
}

<?php

namespace App\Livewire\FolhaPagamento;

use Livewire\Component;
use App\Repositories\RubricaRepository;
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
    public $ordem_calculo; // Adicionando a propriedade aqui
    public $natureza_rubrica;
    public $chave_contabil;
    public $chave_financeira;
    public $campo_trct;
    public $exibe_em_folha;

    protected $createAction;
    protected $updateAction;
    protected $deleteAction;
    protected $rubricaRepository;

    public function __construct()
    {
        // Injetando as actions e o repository no construtor
        $this->createAction = app(CreateRubrica::class);
        $this->updateAction = app(UpdateRubrica::class);
        $this->deleteAction = app(DeleteRubrica::class);
        $this->rubricaRepository = app(RubricaRepository::class); // Injeção do repositório
    }

    public function mount($rubricaId = null)
    {
        if ($rubricaId) {
            $this->editing = true;

            // Usando o repositório para buscar a Rubrica
            $rubrica = $this->rubricaRepository->findById($rubricaId);
            if ($rubrica) {
                $this->fill($rubrica->toArray());
            }
        }
    }

    public function createRubrica()
    {
        $input = $this->prepareInputData();

        // Usando a Action para criar a Rubrica
        $this->createAction->create($input);

        session()->flash('message', 'Rubrica criada com sucesso!');
        $this->resetForm();
    }

    public function updateRubrica()
    {
        $input = $this->prepareInputData();

        $this->updateAction->update($this->rubricaId, $input);

        session()->flash('message', 'Rubrica atualizada com sucesso!');
        $this->resetForm();
    }

    public function deleteRubrica()
    {
        // Usando o repositório para excluir a Rubrica
        $this->deleteAction->delete($this->rubricaId);

        session()->flash('message', 'Rubrica excluída com sucesso!');
        $this->resetForm();
    }

    private function prepareInputData(): array
    {
        return [
            'codigo' => $this->codigo,
            'descricao' => $this->descricao,
            'tipo' => $this->tipo,
            'ordem_calculo' => $this->ordem_calculo ?? 0, // Certifique-se de que a ordem_calculo está definida
            'natureza_rubrica' => $this->natureza_rubrica ?? 0,
            'chave_contabil' => $this->chave_contabil ?? 0,
            'chave_financeira' => $this->chave_financeira ?? 0,
            'incidencias' => $this->incidencias,
            'campo_trct' => $this->campo_trct ?? 0,
            'exibe_em_folha' => $this->exibe_em_folha ?? true,
        ];
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

<?php

namespace App\View\Components\Contabilidade;

use Illuminate\View\Component;

class InformeContabil extends Component
{
    public $title;
    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null, $content = null)
    {
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contabilidade.informe-contabil');
    }
}

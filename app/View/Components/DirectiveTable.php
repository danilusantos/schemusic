<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DirectiveTable extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $data,
        public $model,
        public $columns,
        public $columnsTitle,
        public $routePrefix,
        public $title
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        $data = $this->data;

        return view('components.directive-table', compact('data'));
    }
}

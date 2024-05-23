<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GenericTable extends Component
{
    /**
     * Create a new component instance.
     *
     * @param array $data
     * @param array $columns
     * @param string $routePrefix
     * @return void
     */
    public function __construct(
        public $data,
        public $model,
        public $columns,
        public $columnsTitle,
        public $routePrefix,
        public $title,
        public $routeCreate
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $data = $this->data;

        return view('components.generic-table', compact('data'));
    }
}

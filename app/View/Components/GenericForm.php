<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;
use stdClass;

class GenericForm extends Component
{
    /**
     * Create the component instance.
     *
     * @param string $title
     * @param string $action
     * @param string $method
     * @param mixed $model
     * @param string $fieldView
     * @return void
     */
    public function __construct(
        public string $title,
        public string $action,
        public string $method,
        public mixed $model,
        public string $modelName,
        public string $fieldView
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
        return view('components.generic-form');
    }
}

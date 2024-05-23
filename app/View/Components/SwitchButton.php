<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SwitchButton extends Component
{
    public $name;
    public $checked;
    public $id;

    /**
    * Create a new component instance.
    *
    * @param string $name
    * @param bool $checked
    * @return void
    */
    public function __construct($checked, $name, $id)
    {
        $this->checked = $checked;
        $this->name = $name;
        $this->id = $id;
    }

    /**
    * Get the view / contents that represent the component.
    *
    * @return \Illuminate\View\View
    */
    public function render()
    {
        return view('components.switch-button');
    }
}

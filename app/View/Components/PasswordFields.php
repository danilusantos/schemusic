<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PasswordFields extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  bool  $editPassword
     * @return void
     */
    public function __construct(
        public bool $editPassword
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
        return view('components.password-fields');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeleteModalButton extends Component
{
    public $modalId;
    public $modalLabel;
    public $deleteRoute;

    /**
     * Create the component instance.
     *
     * @param string $modalId
     * @param string $modalLabel
     * @param string $deleteRoute
     */
    public function __construct($modalId, $modalLabel, $deleteRoute)
    {
        $this->modalId = $modalId;
        $this->modalLabel = $modalLabel;
        $this->deleteRoute = $deleteRoute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.delete-button');
    }
}

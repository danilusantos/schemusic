<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteModal extends Component
{
    /**
     * Create the component instance.
     */
    public function __construct(
        public string $modalId,
        public string $modalLabel,
        public string $deleteRoute,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.delete-modal');
    }
}

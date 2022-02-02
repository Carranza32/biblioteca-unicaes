<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BookFormModal extends Component
{
    public $showModal;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($showModal)
    {
        $this->showModal = $showModal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.book-form-modal');
    }
}

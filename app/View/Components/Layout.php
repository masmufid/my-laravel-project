<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Layout extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  string|null  $title
     * @return void
     */
    public function __construct(
        public ?string $title = null
    ) {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render(): View
    {
        return view('components.layout');
    }
}


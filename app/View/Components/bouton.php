<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Bouton extends Component
{
    public $action;
    public $bgColor;
    /**
     * Create a new component instance.
     */
    public function __construct($action, $bgColor)
    {
        $this->action = $action;

        $this->bgColor = $bgColor;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bouton');
    }
}

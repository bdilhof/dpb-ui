<?php

namespace App\View\Components\UI\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $link;

    public $icon;

    public $text;

    public $color;

    public $outline;

    public function __construct(
        $link = "#",
        $icon,
        $text,
        $color = "primary",
        $outline = false
    ) {
        $this->link    = $link;
        $this->icon    = $icon;
        $this->text    = $text;
        $this->color   = $color;
        $this->outline = $outline;
    }

    public function getClass()
    {
        return $this->outline ?
            "btn btn-outline-{$this->color} text-nowrap" :
            "btn btn-{$this->color} text-nowrap";
    }

    public function render()
    {
        return view('components.ui.buttons.button');
    }
}

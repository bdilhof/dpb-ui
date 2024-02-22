<?php

namespace App\View\Components\UI\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Guest extends Component
{
    public $title;

    public function __construct($title = "")
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        if (isset($this->title)) {
            return $this->title . " - " . config('app.name');
        } else {
            return config('app.name');
        }
    }

    public function render()
    {
        return view('components.ui.layout.guest');
    }
}

<?php

namespace Dpb\Ui\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component
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

    public function render(): View|Closure|string
    {
        return view('ui::layout.app');
    }
}

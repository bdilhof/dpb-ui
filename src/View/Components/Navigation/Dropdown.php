<?php

namespace Dpb\Ui\View\Components\Navigation;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dropdown extends Component
{
    public function __construct()
    {

    }

    public function render(): View|Closure|string
    {
        return view('ui::navigation.dropdown');
    }
}

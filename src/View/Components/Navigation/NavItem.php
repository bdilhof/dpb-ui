<?php

namespace App\View\Components\UI\Navigation;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavItem extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.ui.navigation.nav-item');
    }
}

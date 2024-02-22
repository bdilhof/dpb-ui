<?php

namespace App\View\Components\UI;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageHeader extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('ui.components.page-header');
    }
}

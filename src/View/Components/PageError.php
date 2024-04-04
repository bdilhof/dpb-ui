<?php

namespace Dpb\Ui\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageError extends Component
{
    public function render(): View|Closure|string
    {
        return view('ui::page-error');
    }
}

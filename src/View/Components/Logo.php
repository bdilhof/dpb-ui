<?php

namespace Dpb\Ui\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Logo extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('ui::logo');
    }
}

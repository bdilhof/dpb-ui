<?php

namespace Dpb\Ui\View\Components\Tables;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EmptyRow extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('ui::tables.empty-row');
    }
}

<?php

namespace Dpb\Ui\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FlashMessages extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('ui::flash-messages');
    }
}

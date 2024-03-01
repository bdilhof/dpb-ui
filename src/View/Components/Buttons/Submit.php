<?php

namespace Dpb\Ui\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Submit extends Component
{
    public function render()
    {
        return view('ui::buttons.submit');
    }
}

<?php

namespace Dpb\Ui\View\Components\Navigation;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Logout extends Component
{
    public function render()
    {
        return view('ui::navigation.logout');
    }
}

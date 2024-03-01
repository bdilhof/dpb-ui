<?php

namespace Dpb\Ui\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardCard extends Component
{
    public function render()
    {
        return view('ui::dashboard-card');
    }
}

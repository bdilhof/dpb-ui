<?php

namespace Dpb\Ui\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteLink extends Component
{
    public $uniqueId;

    public function __construct()
    {
        $this->uniqueId = uniqid();
    }

    public function render(): View|Closure|string
    {
        return view('ui::delete-link');
    }
}

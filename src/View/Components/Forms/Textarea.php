<?php

namespace Dpb\Ui\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    public function getDefaultClass()
    {
        if (false) {
            $class = "form-control is-invalid";
        } else {
            $class = "form-control";
        }
    
        return $class;
    }

    public function render(): View|Closure|string
    {
        return view('ui::forms.textarea');
    }
}

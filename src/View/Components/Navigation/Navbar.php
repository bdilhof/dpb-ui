<?php

namespace Dpb\Ui\View\Components\Navigation;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $homepage;

    public $items;

    public function __construct()
    {
        $this->homepage = config('navigation.homepage');
        $this->items = config('navigation.items');
    }

    public function render(): View|Closure|string
    {
        return view('ui::navigation.navbar');
    }
}

<?php

namespace Dpb\Ui\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FileTypeIcon extends Component
{
    public $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function getIcon()
    {
        $icons = [
            "image/png" => "fa-file-image",
            "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" => "fa-file-excel",
            "application/vnd.openxmlformats-officedocument.wordprocessingml.document" => "fa-file-word",
            "application/msword" => "fa-file-word",
            "application/pdf" => "fa-file-pdf",
        ];

        return data_get($icons, $this->type, "fa-file");
    }

    public function render(): View|Closure|string
    {
        return view('ui::file-type-icon');
    }
}

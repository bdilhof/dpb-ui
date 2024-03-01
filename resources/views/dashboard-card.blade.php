@props([
    "link",
    "icon" => "",
    "text"
])

<div class="col">
    <a href="{{ $link }}">
        <div class="card text-center h-100">
            <div class="card-body">
                <i class="fa fa-2xl fa-{{ $icon }} mb-3"></i>
                <h5 class="card-title">{{ $text }}</h5>
            </div>
        </div>
    </a>
</div>
@props([
    "display" => true,
    "icon" => null,
    "link",
    "text" => "",
])

@if($display)
<a href="{{ $link }}" {{ $attributes->merge(['class' => 'btn text-nowrap']) }}>

    @if(isset($icon))
    <i class="fa-solid fa-{{ $icon }}" aria-hidden="true"></i>
    @endif

    @if($text)
    <span @class(["ms-1" => isset($icon)])>{{ $text }}</span>
    @endif

</a>
@endif

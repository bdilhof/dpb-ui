@props([
    "text" => "Stránka bez názvu",
    "backUrl"
])

<x-ui::buttons.button
    :display="isset($backUrl)"
    :link="$backUrl"
    :text="trans('ui.back')"
    icon="arrow-left"
    class="btn btn-outline-secondary"
/>

<h1 class="h3 m-0 text-nowrap">{{ $text }}</h1>

{{ $slot }}

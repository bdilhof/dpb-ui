@props([
    "text" => "Stránka bez názvu",
    "backUrl",
    "buttons",
])

<div class="row">
    <div class="col">
        <div class="d-md-flex justify-content-between align-items-center">
            <div class="hstack gap-3">

                <x-ui::buttons.button
                    :display="isset($backUrl)"
                    :link="$backUrl"
                    :text="trans('ui.back')"
                    icon="arrow-left"
                    class="btn-outline-secondary"
                />

                <h1 class="h3 m-0">{{ $text }}</h1>

                {{ $slot }}

            </div>
            <div class="hstack gap-3 text-nowrap">
                {!! $buttons !!}
            </div>
        </div>
    </div>
</div>

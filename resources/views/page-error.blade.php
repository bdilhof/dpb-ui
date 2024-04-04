@props([
    "code",
    "description"
])

<div class="h-100 w-100">
    <div class="d-flex w-100 h-100 justify-content-center align-items-center">
        <div class="w-50">

            <div class="text-center mb-4">
                <x-ui::logo width="150" height="150" />
            </div>

            <div class="mb-4 text-center">
                <h1 class="h4">
                    <b>Chyba {{ $code ?? "" }}</b>
                    @if(isset($description))
                    <br>{{ $description }}
                    @endif
                </h1>
            </div>

            @if($slot->isNotEmpty())
            <div class="bg-white text-center p-4">
                {{ $slot }}
            </div>
            @endif

        </div>
    </div>
</div>
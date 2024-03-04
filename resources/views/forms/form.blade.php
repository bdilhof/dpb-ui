@props(['method' => 'POST'])

@php
    $method = strtoupper($method);
    $formMethod = in_array($method, ['GET', 'POST']) ? $method : 'POST';
@endphp

<form method="{{ $formMethod === 'GET' ? 'GET' : 'POST' }}" action="{{ $attributes->get('action') }}" {{ $attributes }}>
    @csrf

    @if (in_array($method, ['PUT', 'PATCH', 'DELETE']))
        @method($method)
    @endif

    <div class="vstack gap-4">
        <div class="vstack gap-3">
            {{ $slot }}
        </div>
    </div>
</form>

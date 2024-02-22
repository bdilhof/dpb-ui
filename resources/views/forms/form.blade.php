<form {{ $attributes }}>
    @csrf

    <div class="vstack gap-4">
        <div class="vstack gap-3">
            {{ $slot }}
        </div>
    </div>
</form>

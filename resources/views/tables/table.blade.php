<div class="table-responsive">
    <table {{ $attributes->merge(['class' => 'table table-hover align-middle table-bordered text-nowrap m-0']) }}>
        <thead class="table-light">
            {{ $thead }}
        </thead>
        <tbody>
            {{ $tbody }}
        </tbody>
    </table>
</div>

@props([
    'small' => false,
    'striped' => false,
])

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table @class(['table align-middle text-nowrap m-0', 'table-sm' => $small, 'table-striped' => $striped, 'table-hover'])>
                {{ $slot }}
            </table>
        </div>
    </div>
</div>

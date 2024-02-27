@props([
    "items",
    "columns",
    "columnNames",
])

<div class="table-responsive">
    <table class="table align-middle text-nowrap m-0 table-striped">
        <thead>
            <tr>
                @foreach($columns as $column)
                <th>{{ $columnNames[$loop->index] ?? $column }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @forelse($items as $item)
            <tr>
                @foreach($columns as $column)
                    <td>{{ $item->$column }}</td>
                @endforeach
            </tr>
            @empty
            <tr>
                <td colspan="{{ count($columns) }}" class="text-center">
                    {{ trans('ui.empty_table') }}
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

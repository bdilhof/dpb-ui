@props([
    "items",
    "columns",
    "columnNames",
])

<x-ui::tables.table>
    <x-slot name="thead">
        <tr>
            @foreach($columns as $column)
            <th>{{ $columnNames[$loop->index] ?? $column }}</th>
            @endforeach
        </tr>
    </x-slot>
    <x-slot name="tbody">
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
    </x-slot>
</x-ui::tables.table>

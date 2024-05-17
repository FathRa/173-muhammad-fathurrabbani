<x-table.table>
    <x-table.thead>
        <x-table.th>#</x-table.th>
        <x-table.th>Title</x-table.th>
        <x-table.th>Description</x-table.th>
        <x-table.th>Author</x-table.th>
        <x-table.th>Agent</x-table.th>
        <x-table.th>Action</x-table.th>
    </x-table.thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr class="bg-white text-dark-blue">
                <x-table.td>{{ $task['id'] }}</x-table.td>
                <x-table.td>{{ $task['title'] }}</x-table.td>
                <x-table.td>
                    {{ $task['description'] }}
                </x-table.td>
                <x-table.td>{{ $task['author'] }}</x-table.td>
                <x-table.td>{{ $task['agent'] }}</x-table.td>
                <x-table.td>
                    <div class="flex items-center justify-evenly">
                        <x-button.edit route="{{ route('tasks.edit', $task['id']) }}" />
                        <x-button.delete route="{{ route('tasks.delete', $task['id']) }}" />
                    </div>
                </x-table.td>
            </tr>
        @endforeach
    </tbody>
</x-table.table>

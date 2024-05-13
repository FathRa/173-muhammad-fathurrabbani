<x-table.table>
    <x-table.thead>
        <x-table.th>#</x-table.th>
        <x-table.th>Name</x-table.th>
        <x-table.th>Email</x-table.th>
        <x-table.th>Role</x-table.th>
        <x-table.th>Actions</x-table.th>
    </x-table.thead>
    <x-table.tbody>
        <x-table.td>1</x-table.td>
        <x-table.td>Your Name</x-table.td>
        <x-table.td>Your Email</x-table.td>
        <x-table.td>Admin</x-table.td>
        <x-table.td>
            <div class="flex items-center justify-evenly">
                <x-button.edit route="{{ route('users.edit', 1) }}" />
                <x-button.delete route="{{ route('users.delete', 1) }}" />
            </div>
        </x-table.td>
    </x-table.tbody>
</x-table.table>

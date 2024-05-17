<table class="table">
    <thead>
        <tr class="tr-head">
            <th class="th">#</th>
            <th class="th">Title</th>
            <th class="th">Description</th>
            <th class="th">Author</th>
            <th class="th">Agent</th>
            <th class="th">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr class="tr-body">
                <td class="td">{{ $task['id'] }}</td>
                <td class="td">{{ $task['title'] }}</td>
                <td class="td">{{ $task['description'] }}</td>
                <td class="td">{{ $task['author'] }}</td>
                <td class="td">{{ $task['agent'] }}</td>
                <td class="td">
                    <div class="action-wrapper">
                        <x-button.edit route="{{ route('tasks.edit', $task['id']) }}" />
                        <x-button.delete route="{{ route('tasks.delete', $task['id']) }}" />
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

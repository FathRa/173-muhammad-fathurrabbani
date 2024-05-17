<table class="table">
    <thead>
        <tr class="tr-head">
            <th class="th">#</th>
            <th class="th">Name</th>
            <th class="th">Email</th>
            <th class="th">Role</th>
            <th class="th">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr class="tr-body">
            <td class="td">1</td>
            <td class="td">Name</td>
            <td class="td">Email</td>
            <td class="td">Role</td>
            <td class="td">
                <div class="action-wrapper">
                    <x-button.edit route="{{ route('users.edit', 1) }}" />
                    <x-button.delete route="{{ route('users.delete', 1) }}" />
                </div>
            </td>
        </tr>
    </tbody>
</table>

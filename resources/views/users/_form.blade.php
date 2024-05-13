<form action="{{ isset($user) ? route('users.update', $user['id']) : route('users.store') }}" method="POST">
    @csrf
    @method(isset($user) ? 'PUT' : 'POST')

    <x-form.input label="Name" type="text" name="name" placeholder="Type your name" error="name"
        value="{{ isset($name) ? old('name', $name) : old('name') }}" />
    <x-form.input label="Email" type="email" name="email" placeholder="Type your email" error="email"
        value="{{ isset($email) ? old('email', $email) : old('email') }}" />

    <div class="flex flex-col">
        <label for="role">Role</label>
        <select name="role" id="role" class="rounded-md p-2 ring-2 ring-dark-blue focus:outline-none">
            <option selected hidden>Select your Role</option>
            <option value="1">Admin</option>
            <option value="2">Agent</option>
            <option value="3">User</option>
        </select>
    </div>

    <div class="my-2 flex justify-end gap-2">
        <x-button.primary>{{ isset($user) ? 'Update' : 'Submit' }}</x-button.primary>
    </div>
</form>

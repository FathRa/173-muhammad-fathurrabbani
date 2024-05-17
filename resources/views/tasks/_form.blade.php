<form action="{{ isset($task) ? route('tasks.update', $task['id']) : route('tasks.store') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @method(isset($task) ? 'PUT' : 'POST')

    <x-form.input label="Title" name="title" type="text" error="title" placeholder="Your task title"
        value="{{ isset($task) ? $task['title'] : '' }}" />

    <div class="my-2 flex flex-col">
        <label for="description">Description</label>
        <textarea name="description" id="desciption" cols="30" rows="10"
            class="rounded-md p-2 ring-2 ring-dark-blue focus:outline-none">
            {{ isset($task['description']) ? $task['description'] : '' }}
        </textarea>
    </div>

    <div class="flex justify-end">
        <x-button.primary>{{ isset($task) ? 'Update' : 'Submit' }}</x-button.primary>
    </div>
</form>

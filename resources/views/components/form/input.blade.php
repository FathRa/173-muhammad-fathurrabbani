@props(['label', 'name', 'type', 'placeholder', 'error', 'value'])

<div class="flex flex-col">
    <label for="{{ $label }}">{{ $label }}</label>
    <input id="{{ $label }}" type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
        value="{{ $value ?? $slot }}"
        class="rounded-md p-3 ring-2 ring-dark-blue placeholder:text-dark-blue focus:outline-none">
    @error('{{ $error }}')
        <p class="p-2 font-bold text-red-500">{{ $message }}</p>
    @enderror
</div>

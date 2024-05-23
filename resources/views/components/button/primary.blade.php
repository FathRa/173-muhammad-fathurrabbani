@props(['id'])
<div>
    <button id="{{ $id ?? $slot }}" type="submit"
        class="rounded-md bg-dark-blue p-2 text-white hover:bg-white hover:text-dark-blue hover:ring-2 hover:ring-dark-blue">{{ $slot }}</button>
</div>

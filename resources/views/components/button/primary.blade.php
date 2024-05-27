@props(['id', 'route'])
<div>
    <button id="{{ $id ?? '' }}" type="submit" data-route="{{ $route ?? '' }}"
        class="rounded-md bg-dark-blue p-2 text-white hover:bg-white hover:text-dark-blue hover:ring-2 hover:ring-dark-blue">{{ $slot }}</button>
</div>

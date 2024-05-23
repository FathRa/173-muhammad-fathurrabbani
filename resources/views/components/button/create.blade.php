@props(['route', 'id'])

<div class="my-2 flex justify-end">
    <div title="Create">
        <a href="{{ $route ?? $slot }}" id="{{ $id ?? '' }}"
            class="block rounded-md bg-dark-blue p-3 text-white ring-2 ring-white hover:bg-white hover:text-dark-blue">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </a>
    </div>
</div>

<section>
    <dialog id="category-form" class="w-1/2 rounded-md p-5">
        <div class="flex justify-end">
            <button id="close" class="rounded-md p-2 ring-2 ring-dark-blue">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>

            </button>
        </div>
        <fieldset class="rounded-md border-2 border-dark-blue p-5">
            <legend class="text-lg font-semibold text-dark-blue">Add Category</legend>

            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="flex flex-col gap-2">
                    <x-form.input label="Name" name="name" type="text" placeholder="Your Name" error="name" />

                    <x-form.input label="Email" name="email" type="email" placeholder="Your Email"
                        error="email" />

                    <x-form.input label="Password" name="password" type="password" placeholder="Password" />

                    <x-form.input label="Confirmed Password" name="password" type="password" placeholder="Password" />

                    <div class="mt-2 flex justify-end">
                        <x-button.primary>Submit</x-button.primary>
                    </div>
                </div>
            </form>
        </fieldset>
    </dialog>
</section>

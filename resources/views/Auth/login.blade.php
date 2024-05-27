<section>
    <dialog id="login-dialog" class="w-1/2 rounded-md p-5">
        <div class="flex justify-end">
            <button id="close-login" class="rounded-md p-2 ring-2 ring-dark-blue">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>

            </button>
        </div>
        <fieldset class="rounded-md border-2 border-dark-blue p-5">
            <legend class="text-lg font-semibold text-dark-blue">
                Login
            </legend>

            <form id="login-form">
                <x-form.input label="Email" name="email" type="email" placeholder="Enter your email"
                    error="email" />
                <x-form.input label="Password" name="password" type="password" placeholder="Enter your password"
                    error="password" />

                <div class="mt-2 flex justify-end">
                    <x-button.primary>Login</x-button.primary>
                </div>
            </form>
        </fieldset>
    </dialog>
</section>

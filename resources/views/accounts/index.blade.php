@extends('layouts.app')

@section('content')
    <section>
        <fieldset class="rounded-md border-2 border-dark-blue p-5">
            <legend class="text-lg font-semibold text-dark-blue">Account Center</legend>

            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="flex flex-col gap-2">
                    <x-form.input label="Name" name="name" type="text" placeholder="Your Name" error="name" />

                    <x-form.input label="Email" name="email" type="email" placeholder="Your Email" error="email" />

                    <x-form.input label="Password" name="password" type="password" placeholder="Password" />

                    <x-form.input label="Confirmed Password" name="password" type="password" placeholder="Password" />

                    <div class="mt-2 flex justify-end">
                        <x-button.primary>Submit</x-button.primary>
                    </div>
                </div>
            </form>
        </fieldset>
    </section>
@endsection

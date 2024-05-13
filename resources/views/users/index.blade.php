@extends('layouts.app')
@section('content')
    <section class="rounded-lg bg-dark-blue p-5">
        <x-button.create route="{{ route('users.create') }}" />

        @include('users._table')
    </section>
@endsection

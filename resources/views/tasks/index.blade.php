@extends('layouts.app')

@section('content')
    <x-section-index-wrapper>
        <x-button.create route="{{ route('tasks.create') }}" />

        @include('tasks._table')
    </x-section-index-wrapper>
@endsection

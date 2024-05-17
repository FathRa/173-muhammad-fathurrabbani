@extends('layouts.app')

@section('content')
    <x-section-index-wrapper>
        <x-button.create route="{{ route('category.create') }}" />

        @include('categories._table')
    </x-section-index-wrapper>
@endsection

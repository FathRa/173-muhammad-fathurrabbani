@extends('layouts.app')
@section('content')
    <x-section-index-wrapper>
        <x-button.create id="category-create" />

        @include('categories._table')
        @include('categories._form')
    </x-section-index-wrapper>
@endsection

@section('script')
    <script src="{{ asset('js/category/form.js') }}"></script>
@endsection

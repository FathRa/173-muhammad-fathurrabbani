@extends('layouts.app')

@section('content')
    @include('accounts._profile')
@endsection

@section('script')
    <script src="{{ asset('js/profile/form.js') }}"></script>
@endsection

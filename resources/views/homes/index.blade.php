@extends('layouts.app')

@section('content')
    @include('homes._tasks-count')
    @include('homes._tasks-overview')
@endsection

@section('script')
    <script src="{{ asset('js/home/task-overview.js') }}"></script>
    <script src="{{ asset('js/auth/login.js') }}"></script>
    <script src="{{ asset('js/auth/register.js') }}"></script>
@endsection

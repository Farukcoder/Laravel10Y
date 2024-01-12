@extends('layouts.master')

@section('title')
Test
@endsection

@section('sidebar')

@parent
<h5>test page</h5>

@endsection

@section('content')
<h1>Blog</h1>
<h4>some Content ...</h4>
<a href="{{ route('user') }}">Home</a>
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@push('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush

@prepend('style')
    <style>
        .main {
            background-color: brown;
        }
    </style>
@endprepend

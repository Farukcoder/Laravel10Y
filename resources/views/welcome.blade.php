@extends('layouts.master')

@section('title')
Home
@endsection

@section('content')

<h2>Home</h2>
<p>Some content..</p>

<a href="{{ route('blog') }}">Blog</a>

@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

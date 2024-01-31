@extends('layouts.master')

@section('title')
Home
@endsection

@section('content')

<h2>Home</h2>
<p>Some content..</p>

<a href="{{ route('blog') }}">Blog</a>
<table style="border: 1px solid black">
    <tr style="border: 1px solid black">
        <th style="border: 1px solid black">Name</th>
        <th style="border: 1px solid black">Phone</th>
    </tr>
    @foreach($users as $user)
    <tr style="border: 1px solid black">
        <td style="border: 1px solid black">{{ $user->name }}</td>
        <td style="border: 1px solid black">{{ $user->phone->name }}</td>
    </tr>
    @endforeach
</table>

@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

<!DOCTYPE html>
<html>

<head>
    <title>Page Title - @yield('title', 'welcome')</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    @stack('style')
</head>

<body>

    <div class="header">
        <h1>Header</h1>
    </div>

    <div class="leftbar">
        @section('sidebar')
            <h2>Left Bar</h2>
            <a href="/test_f">test</a>
        @show
    </div>

    <div class="main">
        @hasSection('content')
            @yield('content')
        @else
            <h1>page not found</h1>
        @endif
    </div>

    <div class="footer">
        <h2>Footer</h2>
    </div>

    @stack('script')

</body>

</html>

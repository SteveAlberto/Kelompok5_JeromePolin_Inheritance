<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'myapp')</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="/resources/favicon.ico">
</head>
<body>
@section('partial.header')

    <main>
        @yield('content')
    </main>

@section('partial.footer')
</body>
</html>
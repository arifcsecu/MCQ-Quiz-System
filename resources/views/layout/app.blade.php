<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','MCQ App')</title>
    @vite('resources/css/app.css')
</head>

<body>
    @unless (View::hasSection('hideNavbar'))
    <x-navbar :name="$name"></x-navbar>
    @endunless

    @yield('content')
</body>

</html>
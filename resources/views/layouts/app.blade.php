<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{config('app.name')}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<header>
    <nav>
        <ul class="flex flex-row justify-center bg-gray-50 border shadow">
            <li class="p-5 hover:bg-gray-200 "><a href="{{route('contact.index')}}">List contacts</a></li>
            <li class="p-5 hover:bg-gray-200 "><a href="{{route('contact.create.page')}}">Add new contacts</a></li>
        </ul>
    </nav>
</header>
@yield('content')
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SmartX</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="container">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    </a>

                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 sm:block justify-content-center">
{{--                            @auth--}}
{{--                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>--}}
{{--                            @else--}}
{{--                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

                            @role('admin')
                            <a href="{{ route('admin_dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Админ панель</a>
                            @endrole
                            @role('user')
                            <a href="{{ route('user-dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Вход для пользователя</a>
                            @endrole

                        </div>
                    @endif

                </header>
            </div>
            <div>
                <img src="{{asset('admin/images/signin.svg')}}" width="1000" style="margin-left: 250px;!important;">
            </div>
        </div>
    </body>
</html>

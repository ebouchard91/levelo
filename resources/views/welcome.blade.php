<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} - {{ __('Plan your dream bike build') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            margin: 0;
        }

        #app {
            height: 100vh;
        }

        #app nav ul {
            margin: 0;
            padding: 0;
        }
        
        #app nav ul li {
            display: inline;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav>
            <ul>
                @auth
                    <li>
                        <a href="{{ url('/home') }}">{{ __('Home') }}</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>

                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @endauth
            </ul>
        </nav>

        <main>
            <h1>{{ config('app.name', 'Laravel') }}</h1>
            <p>{{ __('Plan your dream bike build') }}</p>
        </main>
    </div>
</body>
</html>

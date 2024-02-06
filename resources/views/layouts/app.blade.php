<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login&Register-Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('layouts.partials.nav')

    @if (session('success'))
        <div class="success">
            <div class="succes-content">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @yield('content')

</body>
</html>
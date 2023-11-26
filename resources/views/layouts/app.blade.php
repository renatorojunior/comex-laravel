<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{ isset($title) ? $title . ' - Comex em Laravel' : 'Comex em Laravel' }}</title>   
</head>
<body>
    <header>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        
    </footer>
</body>
</html>
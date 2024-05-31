<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Eventos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Lista de Eventos</h1>
    <ul>
        @foreach($events as $event)
            <li>{{ $event->name }} - {{ $event->location }} - {{ $event->date }} {{ $event->time }}</li>
        @endforeach
    </ul>
</body>
</html>

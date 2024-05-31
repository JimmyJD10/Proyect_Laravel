<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Evento</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Registrar Nuevo Evento</h1>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <label for="name">Nombre del Evento:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="location">Ubicación:</label><br>
        <input type="text" id="location" name="location" required><br><br>
        <label for="date">Fecha:</label><br>
        <input type="date" id="date" name="date" required><br><br>
        <label for="time">Hora:</label><br>
        <input type="time" id="time" name="time" required><br><br>
        <button type="submit">Registrar Evento</button>
    </form>
</body>
</html>

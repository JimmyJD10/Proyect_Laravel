<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Sitio Web</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/about">Acerca de</a></li>
            <li><a href="/contact">Contacto</a></li>
        </ul>
    </nav>

    @yield('content')

    <footer>
        <!-- Aqui se pone lo demas de la pagina pero
              aun no lo he definido -->
    </footer>

</body>
</html>

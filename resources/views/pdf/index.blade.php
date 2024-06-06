<!DOCTYPE html>
<html>
<head>
    <title>{{$titulo ?? 'PDF'}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    @page {
        margin: 0cm 0cm;
    }

    /** Defina ahora los márgenes reales de cada página en el PDF **/
    body {
        margin-top: 3.7cm;
        margin-left: 2cm;
        margin-right: 2cm;
        margin-bottom: 2cm;
        font-size: 12px;
    }

    .textoFooder {
        text-align: center;
    }

    footer {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        height: 2cm;
        text-align: center;
        margin-bottom: 3%;
    }

    header {
        margin-top: 3%;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 2cm;
        text-align: center;
    }

    p {
        text-align: justify;
    }
</style>
<body>
    <header>
    </header>
    <div class="contenido">
        @yield('content')
    </div>

    <footer>
        <div>
            <p class="textoFooder">
                hola
            </p>
        </div>
    </footer>
</body>
</html>
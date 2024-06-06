<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What's King</title>
    <link href="{{asset('css/farma-d/landing.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
    <script>
        // Ejecuta una función después de 2.5 segundos (2500 milisegundos)
        setTimeout(() => {
            let url = '{{$url}}';
            let nuevaCadena = url.replace(/amp;/g, "");
            window.location.href = nuevaCadena;
        }, 2500);
    </script>
    
</body>
</html>
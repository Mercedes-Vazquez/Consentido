<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{!! asset('css/category.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/enlacecompra.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/anadircompra.css') !!}">
    <title>Bienvenido a ConSentido, la plataforma de venta de productos para personas con discapacidades visuales, esperamos la disfrutes.</title>
</head>

<body>

    <x-header/>

    <x-enlacecompra/>

    <x-category/>

    <x-footer/>
    
</body>

</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{!! asset('css/category.css') !!}">
    <title>Bienvenido a ConSentido, la plataforma de venta de productos para personas con discapacidades visuales, esperamos la disfrutes.</title>
</head>

<x-header/>

<body>    
    <section class="py-5 px-5 ">
        <div>
            <a href="#" class="bg-indigo-900 px-7 py-1 text-white rounded-sm">CARRITO</a>
        </div>
    </section>

    <!-- Creo que aquí va un foreach -->
    <x-category/>

    <footer>
        <div></div>
    </footer>
</body>

</html>

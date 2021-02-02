<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="style.css" />
    <title>Contactanos</title>
</head>
<body>
    <header class="flex flex-col justify-center items-center">
        <h1 class="text-2xl font-medium mt-7 uppercase">Contáctanos</h1>
        <img src="{{asset('images/LogoConSentido.png')}}" alt="Logo de ConSentido" class="w-32 h-24 ml-3 mt-3">
    </header>

    <section class="mx-auto p-3 flex flex-col justify-between">
        <div>

        </div>
        <p class="mb-2">Queremos mejorar su experiencia de navegación en nuestra página. Haznos saber tu requerimiento o sugerencia. Escríbenos</p>

        <form action="{{route('contactanos.store')}}" method="POST">

            @csrf
            @error('mensaje')
                <x-alert>{{ $message }}</x-alert>
            @enderror
            <textarea name="mensaje" rows="5" cols="36" class="rounded shadow-lg w-full overflow-hidden" placeholder="Mensaje:"></textarea>


            <div class="flex flex-wrap overflow-hidden m-1">
                <label class="w-1/2 overflow-hidde">
                    Déjanos tu número de teléfono:
                </label>
                <input type="tel" placeholder="### ### ###" size="9" alt="insertar número de teléfono" name="telefono" class="w-1/2 overflow-hidden block my-2 rounded shadow-lg">
                @error('telefono')
                    <x-alert>{{ $message }}</x-alert>
                @enderror
            </div>


            <button type="submit" class="block mx-auto my-3 bg-blue-900 text-white p-2 rounded">Enviar</button>

        </form>
    </section>

    <section class="flex justify-end mx-3 uppercase">
        <a href="{{('/')}}">volver a inicio</a>
    </section>

    <footer>
        <x-footer/>
    </footer>

    </body>
</html>

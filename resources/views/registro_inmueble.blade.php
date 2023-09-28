<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/formulario.css')}}">
    <title>realestate</title>
</head>
<body>
    <form action="" id="formulario">
        <h2 class="text-2xl">Registrar Inmueble</h2>
        <div class="grid grid-cols-4 gap-2 items-center">
            <label for="">Titulo:</label><input type="text" class="col-span-3">
            <label for="">Ubicacion Descripcion:</label><textarea  class="col-span-3"></textarea>
            <label for="">Ubicacion x:</label><input type="text" class="col-span-3">
            <label for="">Ubicacion y:</label><input type="text" class="col-span-3">
            <label for="">Superficie Preview:</label><input type="number" class="col-span-3">
            <label for="">Superficie Bloque:</label><input type="number" class="col-span-3">
            <label for="">Bloque 1:</label><input type="number" class="col-span-3">
            <label for="">Bloque 2:</label><input type="number" class="col-span-3">
            <label for="">Bloque 3:</label><input type="number" class="col-span-3">
            <label for="">Bloque 4:</label><input type="number" class="col-span-3">
            <label for="">Bloque 5:</label><input type="number" class="col-span-3">
            <label for="">N° Dormitorios:</label><input type="number" class="col-span-3">
            <label for="">N° Suits:</label><input type="number" class="col-span-3">
            <label for="">N° Baños:</label><input type="number" class="col-span-3">
            <label for="">Cocina:</label><input type="checkbox" class="col-span-3 justify-self-start">
            <label for="">Cajoneria de Cocina:</label><input type="text" class="col-span-3">
            <label for="">Tipo de Cocina:</label><input type="text" class="col-span-3">
            <label for="">Living:</label><input type="checkbox" class="col-span-3 justify-self-start">
            <label for="">Sala de estar:</label><input type="checkbox" class="col-span-3 justify-self-start">
            <label for="">Lavanderia:</label><input type="checkbox" class="col-span-3 justify-self-start">
            <label for="">Jardin:</label><input type="checkbox" class="col-span-3 justify-self-start">
            <label for="">Terraza:</label><input type="checkbox" class="col-span-3 justify-self-start">
            <label for="">Churrasquero:</label><input type="checkbox" class="col-span-3 justify-self-start">
            <label for="">Patio:</label><input type="checkbox" class="col-span-3 justify-self-start">
        </div>
        <h2 class="text-2xl items-center">Areas Comunes</h2>
        <div class="grid grid-cols-4 gap-2">
            <label for="">Churrasquero:</label><input type="checkbox" class="col-span-3 justify-self-start">
            <label for="">Sala de Eventos:</label><input type="checkbox" class="col-span-3 justify-self-start">
            <label for="">Piscina:</label><input type="checkbox" class="col-span-3 justify-self-start">
            <label for="">Sala de juegos:</label><input type="checkbox" class="col-span-3 justify-self-start">
            <label for="">Jardin Infantil:</label><input type="checkbox" class="col-span-3 justify-self-start">
            <label for="">Sauna:</label><input type="checkbox" class="col-span-3 justify-self-start">
        </div>

        <h2 class="text-2xl items-center">Referencias</h2>
        <div class="grid grid-cols-4 gap-2">
            <label for="">Referencia 1:</label><textarea  class="col-span-3"></textarea>
            <label for="">Referencia 2:</label><textarea  class="col-span-3"></textarea>
            <label for="">Referencia 3:</label><textarea  class="col-span-3"></textarea>
            <label for="">Referencia 4:</label><textarea  class="col-span-3"></textarea>
            <label for="">Referencia 5:</label><textarea  class="col-span-3"></textarea>
            <label for="">Detalles:</label><textarea  class="col-span-3"></textarea>
        </div>
        <h2 class="text-2xl items-center">Precio</h2>
        <div class="grid grid-cols-4 gap-2">
            <label for="">Precio:</label><input type="number" class="col-span-3">
            <label for="">Valor Comercial:</label><input type="number" class="col-span-3">
        </div>
    </form>
</body>
</html>
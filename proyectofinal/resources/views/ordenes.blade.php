@extends('layouts.layout')
@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Orden</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #formulario {
            display: flex;
            width: 80%;
        }

        #producto-info, #cliente-info {
            flex: 1;
            padding: 20px;
        }

        #producto-img {
            width: 100%;
            max-width: 200px;
        }

        #cantidad {
            width: 50px;
        }

        #enviar-btn {
            width: 100%;
        }
    </style>
</head>
<body>

    <div id="formulario">
        <div id="producto-info">
            <h2>Producto</h2>
            <img src="{{ asset('url_de_la_imagen_del_producto.jpg') }}" alt="Imagen del Producto" id="producto-img">
            <p>Precio: $100.00</p>
            <label>
                <input type="radio" name="producto" value="producto1"> Producto 1
            </label>
            <label>
                <input type="radio" name="producto" value="producto2"> Producto 2
            </label>
            <!-- Agrega más opciones de productos según sea necesario -->
        </div>

        <div id="producto-detalle">
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" min="1" value="1" required>

            <p>Descripción del Producto: Lorem ipsum dolor sit amet, consectetur adipiscing elit....</p>
        </div>

        <div id="cliente-info">
            <h2>Datos del Cliente</h2>
            <form action="#" method="post">
                @csrf
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>

                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="direccion">Dirección:</label>
                <textarea id="direccion" name="direccion" required></textarea>

                <button type="submit" id="enviar-btn">Enviar Orden</button>
            </form>
        </div>
    </div>

</body>
</html>




@stop
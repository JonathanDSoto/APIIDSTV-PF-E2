@extends('layouts.layout')
@section('content')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Orden</title>
    <style>
                    table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }

            table,
            th,
            td {
                border: 1px solid #ddd;
            }

            th,
            td {
                padding: 10px;
                text-align: center;

            }

            th {
                background-color: #f2f2f2;
            }
            .contenedor{
                display: flex;
                justify-content: space-between;
                align-items: center;


            }
            .btn-agregar{
                background-color: cornflowerblue;
                color:white;
                padding: 5px 10px;
            }
            .btn-agregar:hover{
                color: yellow;
            }
            .btn-borrar{
                background-color: red;
                color:white;
                padding: 5px 10px;
            }
            .btn-editar{
                background-color: blueviolet;
                color:white;
                padding: 5px 10px;
            }



    </style>
</head>
<body>


    <div class="contenedor">
        <h2>Ordenes</h2>
        <a class="btn-agregar" href="">Agregar Orden</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Estado</th>
                <th>Cliente</th>
                <th>Fecha de creacion</th>
                <th>Cupon</th>
                <th>Subtotal</th>
                <th>Total</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>Completado</td>
                <td>Irbin</td>
                <td>27/11/2023</td>
                <td>50%</td>
                <td>$2000</td>
                <td>$1000</td>
                <td>
                    <a class="btn-borrar" href="">Borrar</a> 
                    <a class="btn-editar" href="">Detalles</a> 
                </td>

            </tr>
            <tr>
                <td>Completado</td>
                <td>Irbin</td>
                <td>27/11/2023</td>
                <td>50%</td>
                <td>$2000</td>
                <td>$1000</td>
                <td>
                    <a class="btn-borrar" href="">Borrar</a> 
                    <a class="btn-editar" href="">Detalles</a> 
                </td>

            </tr>
            <tr>
                <td>Completado</td>
                <td>Irbin</td>
                <td>27/11/2023</td>
                <td>50%</td>
                <td>$2000</td>
                <td>$1000</td>
                <td>
                    <a class="btn-borrar" href="">Borrar</a> 
                    <a class="btn-editar" href="">Detalles</a> 
                </td>

            </tr>
            <tr>
                <td>Completado</td>
                <td>Irbin</td>
                <td>27/11/2023</td>
                <td>50%</td>
                <td>$2000</td>
                <td>$1000</td>
                <td>
                    <a class="btn-borrar" href="">Borrar</a> 
                    <a class="btn-editar" href="">Detalles</a> 
                </td>

            </tr>


        </tbody>
    </table>



</body>
</html>






@stop
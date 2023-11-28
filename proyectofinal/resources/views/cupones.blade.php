@extends('layouts.layout')
@section('content')
    
       
      <!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <!-- ... Otras etiquetas head ... -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
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
        <h2>Cupones</h2>
        <a class="btn-agregar" href="">Agregar cupon</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Caducidad</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>Black friday</td>
                <td>50%</td>
                <td>27/11/2023</td>
                <td>
                    <a class="btn-borrar" href="">Borrar</a> 
                    <a class="btn-editar" href="">Editar</a> 
                </td>

            </tr>
            <tr>
                <td>Black friday</td>
                <td>50%</td>
                <td>27/11/2023</td>
                <td>
                    <a class="btn-borrar" href="">Borrar</a> 
                    <a class="btn-editar" href="">Editar</a> 
                </td>
            </tr>
            <tr>
                <td>Black friday</td>
                <td>50%</td>
                <td>27/11/2023</td>
                <td>
                    <a class="btn-borrar" href="">Borrar</a> 
                    <a class="btn-editar" href="">Editar</a> 
                </td>
            </tr>
            <tr>
                <td>Black friday</td>
                <td>50%</td>
                <td>27/11/2023</td>
                <td>
                    <a class="btn-borrar" href="">Borrar</a> 
                    <a class="btn-editar" href="">Editar</a> 
                </td>
            </tr>


        </tbody>
    </table>
   
</body>
</html>

   



    
@stop
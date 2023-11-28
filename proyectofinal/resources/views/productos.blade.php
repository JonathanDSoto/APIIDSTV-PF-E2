@extends('layouts.layout')
@section('content')

    
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu E-Commerce - Inventario</title>
    <!-- Agrega tus estilos CSS aquí -->
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
        .img-producto{
          width: 60px;
        }
  
  
  
    </style>
  </head>
<body>

  <div class="contenedor">
    <h2>Productos</h2>
    <a class="btn-agregar" href="">Agregar producto</a>
  </div>


  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoría</th>
        <th>Fabricante</th>
        <th>Cupón</th>
        <th>Descripción</th>
        <th>Imagen</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <!-- Aquí puedes usar un bucle para mostrar tus productos -->
      <tr>
        <td>Producto 1</td>
        <td>$19.99</td>
        <td>Ropa</td>
        <td>Fabricante A</td>
        <td>DESC10</td>
        <td>Descripción del producto 1.</td>
        <td><img class="img-producto" src="../assets/img/backgrounds/apple.jpg" alt="Imagen Producto 1"></td>
        <td>
          <a class="btn-borrar" href="">Borrar</a> 
          <a class="btn-editar" href="">Editar</a> 
      </td>
      </tr>
      <tr>
        <td>Producto 2</td>
        <td>$29.99</td>
        <td>Zapatos</td>
        <td>Fabricante B</td>
        <td>SALE20</td>
        <td>Descripción del producto 2.</td>
        <td><img class="img-producto" src="../assets/img/backgrounds/airpods.png" alt="Imagen Producto 2"></td>
        <td>
          <a class="btn-borrar" href="">Borrar</a> 
          <a class="btn-editar" href="">Editar</a> 
      </td>
      </tr>
      <!-- Agrega más filas  -->
    </tbody>
  </table>

  <!-- Agrega tus scripts  -->

</body>
</html>


            
            
            


    
@stop
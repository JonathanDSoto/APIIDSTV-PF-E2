@extends('layouts.layout')
@section('content')

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



  </style>
</head>

<div class="contenedor">
  <h2>Clientes</h2>
  <a class="btn-agregar" href="">Agregar cliente</a>
</div>

<table>
  <thead>
      <tr>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Direccion</th>
          <th>Telefono</th>
          <th>Accion</th>
      </tr>
  </thead>
  <tbody>

      <tr>
          <td>Jorge</td>
          <td>Garcia</td>
          <td>Enrique cegobiano</td>
          <td>6125558952</td>
          <td>
              <a class="btn-borrar" href="">Borrar</a> 
              <a class="btn-editar" href="">Editar</a> 
          </td>

      </tr>
      <tr>
        <td>Jorge</td>
        <td>Garcia</td>
        <td>Enrique cegobiano</td>
        <td>6125558952</td>
        <td>
            <a class="btn-borrar" href="">Borrar</a> 
            <a class="btn-editar" href="">Editar</a> 
        </td>

    </tr>
    <tr>
      <td>Jorge</td>
      <td>Garcia</td>
      <td>Enrique cegobiano</td>
      <td>6125558952</td>
      <td>
          <a class="btn-borrar" href="">Borrar</a> 
          <a class="btn-editar" href="">Editar</a> 
      </td>

  </tr>
  <tr>
    <td>Jorge</td>
    <td>Garcia</td>
    <td>Enrique cegobiano</td>
    <td>6125558952</td>
    <td>
        <a class="btn-borrar" href="">Borrar</a> 
        <a class="btn-editar" href="">Editar</a> 
    </td>

</tr>
  </tbody>
</table>
  @stop
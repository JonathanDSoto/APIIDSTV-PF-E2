@extends('layouts.layout')
@section('content')
    
       
      <!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <!-- ... Otras etiquetas head ... -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Barra de navegación y otras partes de la interfaz comunes -->
    
    <!-- Sección de descuentos/cupones -->
    <div class="discount-section">

      <div class="ofert">
        <div>   <h4>Ofertas😮😮</h4></div>
        <img class=" d-block w-15" src=" ../../assets/img/backgrounds/ofertas.png" alt=" <h4>Ofertas</h4>" />
        <div class="carousel-caption d-none d-md-block">
         
        </div>

        <p>Revisa Periodicamente Nuestros Cupones de Descuentos:</p>
        <!-- Aquí puedes mostrar los descuentos o cupones disponibles actualmente -->
        <div class="coupon-alert alert alert-success">
            ¡Descuento del 5% aplicado automáticamente en tu carrito!
        </div>
    </div>
    

   
</body>
</html>

   



    
@stop
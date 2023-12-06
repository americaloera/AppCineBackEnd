<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Asientos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <style>
    /* Estilos adicionales para la representación de asientos */
    .asiento {
      width: 30px;
      height: 30px;
      background-color: #c0c0c0;
      border: 1px solid #808080;
      margin: 2px;
      display: inline-block;
      cursor: pointer;
    }
    .asiento-seleccionado {
      background-color: #28a745;
      border: 1px solid #218838;
    }
    .pantalla {
      width: 100%;
      height: 20px;
      background-color: #808080;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
<x-navbar/>

<!-- Contenido principal con pantalla arriba y representación de asientos -->
<div class="container mt-4">
    <h1 class="text-center">Elige tus asientos</h1>

    <div class="row">
        <!-- Sala de funciones -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Sala</h5>
                    <div class="pantalla">Pantalla aquí</div>
                    <!-- Representación de asientos como imágenes -->
                    <?php
                        $filas = 5;
                        $columnas = 6;

                        for ($fila = 1; $fila <= $filas; $fila++) {
                            for ($columna = 1; $columna <= $columnas; $columna++) {
                                echo '<div class="asiento" id="asiento: ' . $fila . '-' .$columna . '" onclick="toggleAsiento(this)"></div>';
                            }
                            echo '<br>';
                        }
                    ?>
                </div>
            </div>
        </div>

        <!-- Resumen de la selección -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Estado</h5>
                    <p>Asientos seleccionados:</p>
                    <ul id="asientosSeleccionados"></ul>
                    <a class="btn btn-success btn-block" href="/boletos-comprados">Confirmar compra</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script para manejar la selección de asientos -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    function toggleAsiento(asiento) {
        $(asiento).toggleClass('asiento-seleccionado');
        var asientoId = asiento.id;
        var seleccionado = $(asiento).hasClass('asiento-seleccionado');

        if (seleccionado) {
            $('#asientosSeleccionados').append('<li>' + asientoId + '</li>');
        } else {
            $('#asientosSeleccionados li:contains("' + asientoId + '")').remove();
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

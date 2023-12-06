<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Compra Exitosa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
        }

        .card {
            margin-top: 20px;
            border: none;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
            color: #007bff;
        }

        p {
            font-size: 1.2rem;
        }

        .btn-continuar {
            background-color: #007bff;
            color: #fff;
            border: none;
        }
    </style>
</head>
<body>
<x-navbar/>

<!-- Contenido principal -->
<div class="container mt-4">
    <div class="card">
        <div class="card-body text-center">
            <h1>Boletos comprados exitosamente</h1>
            <p>¡Gracias por tu compra! Tus boletos han sido reservados con éxito.</p>
            <p>Recibirás un correo electrónico con los detalles de la transacción.</p>
            <a href="/" class="btn btn-continuar btn-lg">Volver al Inicio</a>
        </div>
    </div>
</div>

<!-- Script para habilitar funcionalidad PWA (Service Worker) -->
<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/service-worker.js')
            .then(function(registration) {
                console.log('Service Worker registrado con éxito:', registration);
            })
            .catch(function(error) {
                console.error('Error al registrar el Service Worker:', error);
            });
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

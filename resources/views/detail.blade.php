<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @laravelPWA
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

        .card img {
            max-width: 100%;
            height: auto;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            color: #007bff;
        }

        .badge {
            background-color: #28a745;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }
    </style>
    <title>Detalles de la Película</title>
</head>
<body>
<x-navbar/>

<div class="container text-center mt-5">
    <div class="card">
        <img src="{{ $data -> image }}" alt="Poster de la Película" class="card-img-top">
        <div class="card-body">
            <h2 class="card-title">{{ $data -> movie_name }}</h2>
            <p class="card-text">
                <span class="badge badge-primary">{{ $data -> category -> category_name }} | {{ $data -> duration }} minutos</span>
            </p>
            <p class="card-text"><strong>Director:</strong> {{ $data -> director -> director_name }}</p>
            <p class="card-text"><strong>Sinopsis:</strong> {{ $data -> synopsis }}</p>
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#functionsModal">
                Ver funciones
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="functionsModal" tabindex="-1" role="dialog" aria-labelledby="functionsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="functionsModalLabel">Funciones Disponibles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    <h6>Función 1</h6>
                    <p>Sala: A | Hora: 18:00</p>
                    <a href="/asientos" class="btn btn-primary">Conseguir boletos</a>
                </div>
                <div class="mb-2">
                    <h6>Función 2</h6>
                    <p>Sala: B | Hora: 20:30</p>
                    <a href="/asientos" class="btn btn-primary">Conseguir boletos</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

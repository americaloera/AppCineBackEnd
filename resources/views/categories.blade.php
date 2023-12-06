<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías de Películas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @laravelPWA
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
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

        .category-card {
            margin-bottom: 20px;
        }

        .category-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .category-title {
            margin-top: 10px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
<x-navbar/>

<!-- Contenido principal -->
<div class="container mt-4">
    <h1 class="text-center">Categorías de Películas</h1>

    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-6">
                <div class="card category-card">
                    <div class="card-body text-center">
                        <img src="{{ $category['image'] }}" alt="{{ $category['category_name'] }}" class="category-image">
                        <h3 class="category-title">{{ $category['category_name'] }}</h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

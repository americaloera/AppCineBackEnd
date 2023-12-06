<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Portada - Nombre de la Universidad</title>
</head>
<body>

<x-navbar/>

<div class="container text-center mt-5 p-4" style="color: white">
    <img src="{{ asset('images/utt.png') }}" alt="Logo de la Universidad" class="university-logo img-fluid mb-4">
    <p class="lead"><strong>Alumna:</strong> América Guadalupe Loera López</p>
    <p class="lead"><strong>Docente:</strong> Dr. Eliasib Reyes Moreno</p>
    <p class="lead"><strong>Grupo:</strong> 10A</p>
</div>

</body>
</html>

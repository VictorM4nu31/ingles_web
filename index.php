<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Curso de Inglés</title>
    <!-- Incluye Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"> <!-- Archivo CSS personalizado -->
</head>
<body>
    <?php include('includes/header.php'); ?> <!-- Header dinámico -->

    <div class="container mt-4">
        <h1 class="text-center">¡Bienvenid@!</h1>
        <p class="text-center">Bienvenid@ al curso de inglés para aprender y ejercitar tus conocimientos en inglés.</p>

        <!-- Carrusel de imágenes -->
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagen1.jpg" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="imagen2.jpg" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="imagen3.jpg" class="d-block w-100" alt="Imagen 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>

        <!-- Botones para las unidades 10 y 11 -->
        <div class="text-center mt-4">
            <a href="unidades/unidad10.php" class="btn btn-primary">Go to Unit 10: Living your Life</a>
            <a href="unidades/unidad11.php" class="btn btn-primary">Go to Unit 11: Music</a>
        </div>

    <?php include('includes/footer.php'); ?> <!-- Footer dinámico -->

    <!-- Incluye Bootstrap JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

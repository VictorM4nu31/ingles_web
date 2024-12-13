<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de Inglés</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between; /* Cambiar a space-between para distribuir el contenido */
            background-color: #4a4a4a;
            color: white;
            padding: 40px;
            flex-wrap: wrap;
            min-height: 100vh; /* Asegura que ocupe toda la altura visible */
            box-sizing: border-box; /* Asegura que el padding no aumente el tamaño total */
        }
        .hero-text {
            max-width: 50%;
            text-align: left; /* Asegura que el texto esté alineado a la izquierda en pantallas grandes */
        }
        .hero-text h1 {
            font-size: 3rem;
            font-weight: bold;
            color: white;
        }
        .hero-text p {
            font-size: 1.2rem;
            margin: 20px 0;
        }
        .hero-buttons {
            display: flex;
            gap: 15px;
        }
        .hero-buttons button {
            text-decoration: none;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            color: white;
            background-color: rgb(0, 172, 29);
            cursor: pointer;
        }
        .hero-buttons button:hover {
            background-color:rgb(26, 245, 77);
        }
        .hero-carousel {
            max-width: 50%;
        }
        .carousel-inner img {
            width: 100%;
            border-radius: 10px;
        }
        
        /* Media Queries para Pantallas Pequeñas */
        @media (max-width: 768px) {
            .hero-section {
                flex-direction: column;
                padding: 20px;
                align-items: center; /* Centra los elementos en pantallas pequeñas */
            }

            .hero-text {
                max-width: 100%;
                text-align: center;
                margin-bottom: 20px;
            }

            .hero-text h1 {
                font-size: 2rem;
            }

            .hero-text p {
                font-size: 1rem;
            }

            .hero-carousel {
                max-width: 100%;
                margin-top: 20px;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .hero-buttons button {
                margin-bottom: 10px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <?php include('includes/header.php'); ?>
    </header>

    <!-- Hero Section -->
    <div class="hero-section">
        <!-- Texto principal -->
        <div class="hero-text">
            <h1>¡Bienvenid@ al curso de inglés!</h1>
            <p>Aprende y ejercita tus conocimientos de inglés de una manera fácil y efectiva.</p>
            <div class="hero-buttons">
                <button onclick="window.location.href='unidades/unidad10.php'">Ir a Unidad 10</button>
                <button onclick="window.location.href='unidades/unidad11.php'">Ir a Unidad 11</button>
            </div>
        </div>
        <!-- Carrusel -->
        <div class="hero-carousel">
            <div id="carouselExample" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/1.jpeg" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img/2.png" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img src="img/3.jpeg" class="d-block w-100" alt="Imagen 3">
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
        </div>
    </div>

    <!-- Incluye Bootstrap JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 10 - Music</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Hace que el body ocupe toda la altura de la ventana */
            margin: 0; /* Elimina márgenes predeterminados */
            background-color: #4a4a4a;
            font-family: Arial, sans-serif; /* Fuente predeterminada */
        }

        /* Estilos generales */
        .layout-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 20px;
            gap: 20px;
            flex-wrap: wrap;
        }

        .button-section {
            width: 45%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .button-section button {
            width: 48%;
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            background-color:rgb(0, 172, 29); /* Color verde */
            color: white; /* Texto blanco */
            border: none;
            border-radius: 5px;
        }

        .button-section button:hover {
            background-color: rgb(26, 245, 77); /* Verde oscuro al pasar el cursor */
        }

        .return-button {
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        .image-section {
            width: 50%;
            text-align: center;
            position: relative; /* Necesario para posicionar elementos hijos */
        }

        .image-section img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 10px;
        }

        .image-section h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente para contraste */
            padding: 10px 20px;
            border-radius: 5px;
            z-index: 2;
        }

        /* Media queries para responsividad */
        @media (max-width: 768px) {
            .layout-container {
                flex-direction: column;
                align-items: center;
            }

            .button-section {
                width: 100%;
                justify-content: center;
            }

            .button-section button {
                width: 80%;
            }

            .image-section {
                width: 100%;
            }

            .image-section h1 {
                font-size: 20px;
            }
        }

        @media (max-width: 480px) {
            .button-section button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="layout-container">
        <!-- Sección de imagen -->
        <div class="image-section">
            <h1>Bienvenido a la Unidad 10. Music</h1>
            <img src="../img/5.jpeg" alt="Bienvenido a Unidad 10">
        </div>

        <!-- Sección de botones -->
        <div class="button-section">
            <button onclick="window.location.href='../unit10/lesson_a.php'">Lesson A</button>
            <button onclick="window.location.href='../unit10/lesson_b.php'">Lesson B</button>
            <button onclick="window.location.href='../unit10/lesson_c.php'">Lesson C</button>
            <button onclick="window.location.href='../unit10/lesson_d.php'">Lesson D</button>
            <div class="return-button">
                <button onclick="window.location.href='../index.php'">Regresar a la Pantalla Principal</button>
            </div>
        </div>
    </div>
</body>
</html>

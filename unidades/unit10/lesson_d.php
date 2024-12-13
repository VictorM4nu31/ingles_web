<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lección D</title>
    <style>
        /* Paleta de colores */
        :root {
            --fondo: #333333; /* Color de fondo */
            --fondo-formulario:rgb(218, 217, 217); /* Color de fondo de formulario */
            --color-texto: #333333; /* Color del texto */
            --color-boton: #32cd32; /* Color del botón */
            --color-boton-hover: #28a745; /* Color del botón al pasar el ratón */
            --color-titulo:rgb(68, 165, 112); /* Color de título */
        }

        body {
            background-color: var(--fondo);
            font-family: Arial, sans-serif;
            color: var(--color-texto);
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: var(--color-titulo);
            font-size: 2.5rem;
            text-align: center;
        }

        form {
            background-color: var(--fondo-formulario);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        p {
            font-size: 1.2rem;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        button[type="submit"] {
            background-color: var(--color-boton);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: var(--color-boton-hover);
        }

        button {
            background-color: #1e4d33;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }

        button:hover {
            background-color:rgb(26, 61, 42);
        }

        /* Nuevo estilo para el botón de regresar */
        .boton-regresar {
            width: 100%;
            background-color: #1e4d33; /* Color similar al botón de formulario */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .boton-regresar:hover {
            background-color: rgb(26, 61, 42);
        }
    </style>
</head>
<body>
    <h1>Lección D</h1>
    <form action="procesar_leccion_d.php" method="post">
        <div>
            <p>1. ¿Cuál es el río más largo del mundo?</p>
            <label>
                <input type="radio" name="pregunta1" value="a" required>
                a) Amazonas
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="b">
                b) Nilo
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="c">
                c) Yangtsé
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="d">
                d) Misisipi
            </label>
        </div>
        
        <div>
            <p>2. ¿Qué gas es esencial para la respiración humana?</p>
            <label>
                <input type="radio" name="pregunta2" value="a" required>
                a) Dióxido de carbono
            </label><br>
            <label>
                <input type="radio" name="pregunta2" value="b">
                b) Oxígeno
            </label><br>
            <label>
                <input type="radio" name="pregunta2" value="c">
                c) Nitrógeno
            </label><br>
            <label>
                <input type="radio" name="pregunta2" value="d">
                d) Helio
            </label>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <button onclick="window.location.href='../index.php'">Regresar a la Pantalla Principal</button>
</body>
</html>
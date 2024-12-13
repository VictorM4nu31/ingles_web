<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lección B - Unidad 11</title>
</head>
<body>
    <h1>Lección B - Unidad 11</h1>
    <form action="procesar_leccion_b.php" method="post">
        <div>
            <p>1. ¿Cuál es el antónimo de "grande"?</p>
            <label>
                <input type="radio" name="pregunta1" value="a" required>
                a) Pequeño
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="b">
                b) Enorme
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="c">
                c) Gigante
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="d">
                d) Colosal
            </label>
        </div>
        
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <button onclick="window.location.href='index.php'">Regresar a la Pantalla Principal</button>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lección A - Unidad 11</title>
</head>
<body>
    <h1>Lección A - Unidad 11</h1>
    <form action="procesar_leccion_a.php" method="post">
        <div>
            <p>1. ¿Cuál es el sinónimo de "feliz"?</p>
            <label>
                <input type="radio" name="pregunta1" value="a" required>
                a) Triste
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="b">
                b) Alegre
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="c">
                c) Enojado
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="d">
                d) Aburrido
            </label>
        </div>
        
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <button onclick="window.location.href='index.php'">Regresar a la Pantalla Principal</button>
</body>
</html>

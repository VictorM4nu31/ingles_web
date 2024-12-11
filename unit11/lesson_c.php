<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lección C - Unidad 11</title>
</head>
<body>
    <h1>Lección C - Unidad 11</h1>
    <form action="procesar_leccion_c.php" method="post">
        <div>
            <p>1. ¿Cuál es la forma correcta del verbo "comer" en primera persona del presente?</p>
            <label>
                <input type="radio" name="pregunta1" value="a" required>
                a) Comí
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="b">
                b) Como
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="c">
                c) Comeré
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="d">
                d) Comiendo
            </label>
        </div>
        
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <button onclick="window.location.href='index.php'">Regresar a la Pantalla Principal</button>
</body>
</html>

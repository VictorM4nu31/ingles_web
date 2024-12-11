<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lección C</title>
</head>
<body>
    <h1>Lección C</h1>
    <form action="procesar_leccion_c.php" method="post">
        <div>
            <p>1. ¿Cuál es el continente más grande?</p>
            <label>
                <input type="radio" name="pregunta1" value="a" required>
                a) África
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="b">
                b) Asia
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="c">
                c) América
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="d">
                d) Europa
            </label>
        </div>
        
        <div>
            <p>2. ¿Qué planeta es conocido como el planeta rojo?</p>
            <label>
                <input type="radio" name="pregunta2" value="a" required>
                a) Venus
            </label><br>
            <label>
                <input type="radio" name="pregunta2" value="b">
                b) Marte
            </label><br>
            <label>
                <input type="radio" name="pregunta2" value="c">
                c) Júpiter
            </label><br>
            <label>
                <input type="radio" name="pregunta2" value="d">
                d) Saturno
            </label>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <button onclick="window.location.href='index.php'">Regresar a la Pantalla Principal</button>
</body>
</html>
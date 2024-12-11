<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lección A</title>
</head>
<body>
    <h1>Lección A</h1>
    <form action="procesar_leccion_a.php" method="post">
        <div>
            <p>1. ¿Cuál es la capital de Francia?</p>
            <label>
                <input type="radio" name="pregunta1" value="a" required>
                a) Berlín
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="b">
                b) Madrid
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="c">
                c) París
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="d">
                d) Roma
            </label>
        </div>
        
        <div>
            <p>2. ¿Qué idioma se habla en Brasil?</p>
            <label>
                <input type="radio" name="pregunta2" value="a" required>
                a) Español
            </label><br>
            <label>
                <input type="radio" name="pregunta2" value="b">
                b) Portugués
            </label><br>
            <label>
                <input type="radio" name="pregunta2" value="c">
                c) Inglés
            </label><br>
            <label>
                <input type="radio" name="pregunta2" value="d">
                d) Francés
            </label>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <button onclick="window.location.href='index.php'">Regresar a la Pantalla Principal</button>
</body>
</html>
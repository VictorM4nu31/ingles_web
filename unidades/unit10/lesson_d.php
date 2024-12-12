<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lección D</title>
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
    <button onclick="window.location.href='index.php'">Regresar a la Pantalla Principal</button>
</body>
</html>
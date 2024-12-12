<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lección D - Unidad 11</title>
</head>
<body>
    <h1>Lección D - Unidad 11</h1>
    <form action="procesar_leccion_d.php" method="post">
        <div>
            <p>1. ¿Cuál es el plural de "lápiz"?</p>
            <label>
                <input type="radio" name="pregunta1" value="a" required>
                a) Lápices
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="b">
                b) Lápizs
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="c">
                c) Lápiz
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="d">
                d) Lápizs
            </label>
        </div>
        
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <button onclick="window.location.href='index.php'">Regresar a la Pantalla Principal</button>
</body>
</html>

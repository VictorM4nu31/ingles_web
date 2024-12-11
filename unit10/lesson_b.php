<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lección B</title>
</head>
<body>
    <h1>Lección B</h1>
    <form action="procesar_leccion_b.php" method="post">
        <div>
            <p>1. ¿Cuál es el océano más grande del mundo?</p>
            <label>
                <input type="radio" name="pregunta1" value="a" required>
                a) Atlántico
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="b">
                b) Índico
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="c">
                c) Pacífico
            </label><br>
            <label>
                <input type="radio" name="pregunta1" value="d">
                d) Ártico
            </label>
        </div>
        
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <button onclick="window.location.href='index.php'">Regresar a la Pantalla Principal</button>
</body>
</html>
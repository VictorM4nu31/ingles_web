<?php
session_start();
if (!empty($_SESSION['test_completed'])) {
    session_unset();
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit 11 - Lesson B</title>
    <style>
        :root {
            --fondo: #333333;
            --fondo-formulario: rgb(218, 217, 217);
            --color-texto: #333333;
            --color-boton: #32cd32;
            --color-boton-hover: #28a745;
            --color-titulo: rgb(68, 165, 112);
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

        .test {
            color: rgb(15, 71, 28);
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

        ul {
            list-style-type: none;
            /* Elimina los puntos */
            padding: 0;
        }

        li {
            margin-bottom: 10px;
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

        section img {
            display: block;
            margin: 0 auto;
            width: 100%;
            max-width: 300px;
            /* Ajusta el tamaño máximo */
            height: 200px;
            /* Ajusta la altura fija */
            object-fit: cover;
            /* Asegura proporciones */
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        section p,
        section h2 {
            color: white;
            text-align: center;
        }

        section {
            text-align: center;
            margin-bottom: 20px;
        }

        .special-section {
            background-color: #e0f7e0;
            /* Verde claro */
            border: 2px solid #a2d5a2;
            /* Borde verde */
            border-radius: 10px;
            /* Esquinas redondeadas */
            padding: 20px;
            /* Espaciado interno */
            margin: 20px 0;
            /* Espaciado externo */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Sombra */
            font-family: Arial, sans-serif;
            /* Tipografía */
        }

        .special-section h2 {
            color: #2f5d2f;
            /* Verde oscuro */
            text-align: center;
            /* Centrar título */
        }

        .special-section h3 {
            color: #4a8a4a;
            /* Verde medio */
        }

        .special-section p {
            color: #333;
            /* Texto oscuro */
            line-height: 1.6;
            /* Espaciado entre líneas */
        }
    </style>
</head>

<body>
    <div>
        <h1>Unit 11: Giving Instructions</h1>

        <section class="special-section">
            <h2>Explanation on Giving Instructions</h2>
            <p>Giving instructions involves providing clear, step-by-step guidance to someone on how to complete a task or achieve a goal. The grammar and structure of giving instructions typically follows a few key patterns:</p>
            <h3>1. Using imperative verbs:</h3>
            <p>Instructions often start with action verbs in the imperative form, such as "Click", "Type", "Select", "Choose", etc. This gives direct, concise guidance on the steps to take.</p>
            <h3>2. Sequencing with transitions:</h3>
            <p>Words and phrases like "First", "Next", "Then", "After that", "Finally" are used to clearly indicate the order and flow of the steps.</p>
            <h3>3. Using simple, concise language:</h3>
            <p>Instructions aim to be direct and easy to understand, avoiding overly complex sentence structures or jargon.</p>
            <h3>4. Providing context:</h3>
            <p>Instructions may include some background information or explanation to help the reader understand the purpose or context of the steps.</p>
            <h3>5. Checking for understanding:</h3>
            <p>Frequently instructions will prompt the reader to confirm they've completed a step or understand what to do next, using phrases like "Did you get that?", "Now what?", etc.</p>
            <div style="text-align: center; margin-top: 20px;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/j_lLJSO7q2M" title="Giving Instructions" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>


        <form action="" method="post">
            <section>
                <h2 class="test">Test Questions</h2>

                <?php
                $questions = [
                    "Which verb form is most commonly used to begin each step in a set of instructions?" => [
                        "a" => "Past tense",
                        "b" => "Present progressive",
                        "c" => "Future tense",
                        "d" => "Imperative"
                    ],
                    "Which of these transition words is NOT typically used when giving step-by-step instructions?" => [
                        "a" => "First",
                        "b" => "Then",
                        "c" => "Afterwards",
                        "d" => "However"
                    ],
                    "Why is it important to use simple, clear language when writing instructions?" => [
                        "a" => "To sound more formal",
                        "b" => "To show off your vocabulary",
                        "c" => "To make the steps easy to understand and follow",
                        "d" => "To confuse the reader"
                    ],
                    "What is the purpose of prompting the reader to confirm their understanding during instructions?" => [
                        "a" => "To test their memory",
                        "b" => "To make the instructions longer",
                        "c" => "To ensure they are keeping up with the steps",
                        "d" => "To make the instructions more conversational"
                    ],
                    "Which of these sample instructions uses the best grammar and structure?" => [
                        "a" => "You are going to need to click the button now.",
                        "b" => "First click the button. Afterwards, type in your information.",
                        "c" => "Click button. Type info.",
                        "d" => "Clickity click the button, then type stuff in the box over there."
                    ]
                ];

                $correct_answers = [
                    "Which verb form is most commonly used to begin each step in a set of instructions?" => "d",
                    "Which of these transition words is NOT typically used when giving step-by-step instructions?" => "d",
                    "Why is it important to use simple, clear language when writing instructions?" => "c",
                    "What is the purpose of prompting the reader to confirm their understanding during instructions?" => "c",
                    "Which of these sample instructions uses the best grammar and structure?" => "b"
                ];

                foreach ($questions as $question => $options): ?>
                    <div>
                        <h3><?php echo $question; ?></h3>
                        <ul>
                            <?php foreach ($options as $key => $option): ?>
                                <li>
                                    <label>
                                        <input type="radio" name="answers[<?php echo $question; ?>]" value="<?php echo $key; ?>">
                                        <?php echo $option; ?>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>

                <button type="submit">Submit Test</button>
            </section>
        </form>

        <!--Inicio -->
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $answers = $_POST['answers'] ?? [];
            $score = 0;
            $total = count($correct_answers);
            $message = "this is the message";
        ?>

            <section>
                <h2 style="color: #00ff00; text-align: center;"> Results</h2>
            </section>

            <ul style="background-color: #333333; padding: 20px; border-radius: 8px; list-style: none;">
                <?php
                foreach ($correct_answers as $question => $correct) {
                    $user_answer = $answers[$question] ?? 'No answer';
                    $is_correct = $user_answer === $correct;
                    if ($is_correct) {
                        $score++;
                    }

                ?>
                    <li style="margin-bottom: 20px; border-bottom: 1px solid #555; padding-bottom: 10px;">
                        <strong style="color: #ffffff; font-size: 18px;"><?php echo $question; ?></strong>
                        <br>
                        <span style="color: #cccccc;">Your answer: <strong style="color: <?php echo $is_correct ? '#00ff00' : '#ff0000'; ?>;">
                                <?php echo $questions[$question][$user_answer] ?? "No answer selected"; ?>
                            </strong></span>
                        <br>
                        <span style="color: #cccccc;">Correct answer: <strong style="color: #00ff00;">
                                <?php echo $questions[$question][$correct]; ?>
                            </strong></span>
                        <br>
                        <span style="color: #cccccc;">Result: <strong style="color: <?php echo $is_correct ? '#00ff00' : '#ff0000'; ?>;">
                                <?php echo $is_correct ? "Correct" : "Incorrect"; ?>
                            </strong></span>

                    </li>
                <?php
                }
                ?>
            </ul>
            <h2 style="color: #00ff00; text-align: center; margin-top: 20px;">
                Your score: <?php echo $score; ?> out of <?php echo $total; ?>
            </h2>
        <?php
        }
        ?>

        <!--final -->
    </div>
</body>

</html>
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
    <title>Unit 10 - Lesson C</title>
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
            margin: 20px;
        }

        .special-section .content-box {
            background-color: #a8d5a5;
            /* Verde claro */
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .special-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .special-section .content-box {
            flex: 1 1 calc(50% - 20px);
            /* Dos columnas con espacio */
        }

        /* Para pantallas más pequeñas */
        @media (max-width: 768px) {
            .special-section .content-box {
                flex: 1 1 100%;
                /* Una columna */
            }
        }
    </style>
</head>

<body>
    <div>
        <h1>Unit 10: Separable Phrasal Verbs and Second Conditional</h1>

        <section class="special-section">
            <h2>Separable Phrasal Verbs</h2>
            <p>Separable phrasal verbs are dynamic linguistic tools that add color and flexibility to English communication...</p>
            <div class="content-box">
                <h3>Key Characteristics:</h3>
                <ul>
                    <li>Flexibility in sentence structure</li>
                    <li>Ability to change meaning dramatically</li>
                    <li>Common in informal and conversational English</li>
                </ul>
            </div>
            <div class="content-box">
                <h3>Interesting Facts:</h3>
                <ul>
                    <li>Native speakers use these verbs unconsciously</li>
                    <li>They can completely transform the meaning of a base verb</li>
                    <li>Mastering them makes your English sound more natural</li>
                </ul>
            </div>
            <div style="text-align: center; margin-top: 20px;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/wH9HrDOPT9U" title="Separable Phrasal Verbs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>

        <section class="special-section">
            <h2>Second Conditional</h2>
            <p>The Second Conditional is a powerful grammatical structure that allows speakers to explore hypothetical situations...</p>
            <div class="content-box">
                <h3>Key Characteristics:</h3>
                <ul>
                    <li>Expresses unreal or improbable situations</li>
                    <li>Uses past simple in the "if" clause</li>
                    <li>Uses "would" + base verb in the result clause</li>
                    <li>Demonstrates linguistic creativity</li>
                </ul>
            </div>
            <div class="content-box">
                <h3>Interesting Facts:</h3>
                <ul>
                    <li>Helps develop speaking fluency</li>
                    <li>Encourages creative thinking</li>
                    <li>Useful in storytelling and hypothetical discussions</li>
                </ul>
            </div>
            <div style="text-align: center; margin-top: 20px;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/WiWLGCfY7t0" title="Second Conditional" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>



        <form action="" method="post">
            <section>
                <h2 class="test">Test Questions</h2>

                <?php
                $questions = [
                    "Which of the following is a correct use of a separable phrasal verb?" => [
                        "a" => "I will look up the dictionary",
                        "b" => "I will look dictionary up",
                        "c" => "I will up look the dictionary",
                        "d" => "I will lookup dictionary"
                    ],
                    "In the phrasal verb 'turn off', where can the object be placed?" => [
                        "a" => "Only before the particle",
                        "b" => "Only after the particle",
                        "c" => "Both before and after the particle",
                        "d" => "Never between the verb and particle"
                    ],
                    "What does 'give away' mean?" => [
                        "a" => "To provide something for free",
                        "b" => "To reveal a secret",
                        "c" => "To donate",
                        "d" => "Both b and c are correct"
                    ],
                    "Choose the correct sentence with a separable phrasal verb:" => [
                        "a" => "I will put away my books",
                        "b" => "I will put my books away",
                        "c" => "Both a and b are correct",
                        "d" => "Neither a nor b is correct"
                    ],
                    "Which of these is NOT a separable phrasal verb?" => [
                        "a" => "Take off",
                        "b" => "Look after",
                        "c" => "Run into",
                        "d" => "Call up"
                    ],
                    "What is the correct structure of a Second Conditional sentence?" => [
                        "a" => "If + Present Simple, will + base verb",
                        "b" => "If + Past Simple, would + base verb",
                        "c" => "If + Future Simple, will + past verb",
                        "d" => "If + Present Perfect, would + verb"
                    ],
                    "Which sentence is grammatically correct in Second Conditional?" => [
                        "a" => "If I am rich, I would buy a mansion",
                        "b" => "If I was rich, I would buy a mansion",
                        "c" => "If I were rich, I would buy a mansion",
                        "d" => "If I will be rich, I buy a mansion"
                    ],
                    "What does the Second Conditional typically express?" => [
                        "a" => "Past actions",
                        "b" => "Future certainties",
                        "c" => "Hypothetical or imaginary situations",
                        "d" => "Current repeated actions"
                    ],
                    "In the sentence 'If I ____ (know) the answer, I would tell you', which verb form completes the conditional?" => [
                        "a" => "knows",
                        "b" => "knew",
                        "c" => "know",
                        "d" => "knowing"
                    ],
                    "Choose the most appropriate use of Second Conditional:" => [
                        "a" => "If it rains tomorrow, I stay at home",
                        "b" => "If I were you, I would study harder",
                        "c" => "If I will have money, I travel",
                        "d" => "If he has time, he goes to the gym"
                    ]
                ];

                $correct_answers = [
                    "Which of the following is a correct use of a separable phrasal verb?" => "a",
                    "In the phrasal verb 'turn off', where can the object be placed?" => "c",
                    "What does 'give away' mean?" => "d",
                    "Choose the correct sentence with a separable phrasal verb:" => "c",
                    "Which of these is NOT a separable phrasal verb?" => "b",
                    "What is the correct structure of a Second Conditional sentence?" => "b",
                    "Which sentence is grammatically correct in Second Conditional?" => "c",
                    "What does the Second Conditional typically express?" => "c",
                    "In the sentence 'If I ____ (know) the answer, I would tell you', which verb form completes the conditional?" => "b",
                    "Choose the most appropriate use of Second Conditional:" => "b"
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
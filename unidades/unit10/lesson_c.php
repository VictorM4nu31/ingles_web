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
<<<<<<< HEAD
    <title>Unit 10 - Lesson C</title>
=======
    <title>Lección C</title>
    <style>
        /* Paleta de colores */
        :root {
            --fondo: #333333; /* Color de fondo */
            --fondo-formulario:rgb(218, 217, 217); /* Color de fondo de formulario */
            --color-texto: #333333; /* Color del texto */
            --color-boton: #32cd32; /* Color del botón */
            --color-boton-hover: #28a745; /* Color del botón al pasar el ratón */
            --color-titulo:rgb(68, 165, 112); /* Color de título */
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

        button {
            background-color: #1e4d33;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }

        button:hover {
            background-color:rgb(26, 61, 42);
        }

        /* Nuevo estilo para el botón de regresar */
        .boton-regresar {
            width: 100%;
            background-color: #1e4d33; /* Color similar al botón de formulario */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .boton-regresar:hover {
            background-color: rgb(26, 61, 42);
        }
    </style>
>>>>>>> d76ff69935bd344039c6bcd81f1884854ba329a9
</head>
<body>
    <div>
        <h1>Unit 10: Separable Phrasal Verbs and Second Conditional</h1>

<<<<<<< HEAD
        <section>
            <h2>Separable Phrasal Verbs</h2>
            <p>Separable phrasal verbs are dynamic linguistic tools that add color and flexibility to English communication. They consist of a verb and a particle that can be separated by an object, creating multiple ways to express the same idea.</p>
            <h3>Key Characteristics:</h3>
            <ul>
                <li>Flexibility in sentence structure</li>
                <li>Ability to change meaning dramatically</li>
                <li>Common in informal and conversational English</li>
            </ul>
            <h3>Interesting Facts:</h3>
            <ul>
                <li>Native speakers use these verbs unconsciously</li>
                <li>They can completely transform the meaning of a base verb</li>
                <li>Mastering them makes your English sound more natural</li>
            </ul>
        </section>

        <section>
            <h2>Second Conditional</h2>
            <p>The Second Conditional is a powerful grammatical structure that allows speakers to explore hypothetical situations, imagination, and alternative realities. It's a window into potential futures that may never happen but are fun to contemplate.</p>
            <h3>Key Characteristics:</h3>
            <ul>
                <li>Expresses unreal or improbable situations</li>
                <li>Uses past simple in the "if" clause</li>
                <li>Uses "would" + base verb in the result clause</li>
                <li>Demonstrates linguistic creativity</li>
            </ul>
            <h3>Interesting Facts:</h3>
            <ul>
                <li>Helps develop speaking fluency</li>
                <li>Encourages creative thinking</li>
                <li>Useful in storytelling and hypothetical discussions</li>
            </ul>
        </section>

        <form action="" method="post">
            <section>
                <h2>Test Questions</h2>

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

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $answers = $_POST['answers'] ?? [];
            $score = 0;
            $total = count($correct_answers);

            echo "<section><h2>Results</h2><ul>";
            foreach ($correct_answers as $question => $correct) {
                $user_answer = $answers[$question] ?? 'No answer';
                $is_correct = $user_answer === $correct;
                if ($is_correct) {
                    $score++;
                }
                echo "<li><strong>Question:</strong> $question";
                echo "<br><strong>Your answer:</strong> " . ($questions[$question][$user_answer] ?? 'No answer selected');
                echo "<br><strong>Correct answer:</strong> " . $questions[$question][$correct];
                echo "<br><strong>Result:</strong> " . ($is_correct ? 'Correct' : 'Incorrect') . "</li><br>";
            }
            echo "</ul><p>Your score: $score out of $total</p></section>";
        }
        ?>
    </div>
=======
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <button onclick="window.location.href='../index.php'">Regresar a la Pantalla Principal</button>
>>>>>>> d76ff69935bd344039c6bcd81f1884854ba329a9
</body>
</html>

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
    <title>Unit 11 - Lesson A</title>
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
            color:rgb(15, 71, 28);
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
            list-style-type: none; /* Elimina los puntos */
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
            max-width: 300px; /* Ajusta el tamaño máximo */
            height: 200px; /* Ajusta la altura fija */
            object-fit: cover; /* Asegura proporciones */
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        section p, section h2 {
            color: white;
            text-align: center;
        }

        section {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Unit 11 - Lesson A</h1>

        <section>
    <h2>Compound Adjectives</h2>
    <p>Compound adjectives are words formed by combining two or more words to describe a noun in a more specific and detailed way. For example, in the phrase "It's a high-quality science fiction book," "high-quality" is a compound adjective that describes the noun "book."</p>
    <div style="text-align: center; margin-top: 20px;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/xkH9dA7hu-g" title="Compound Adjectives" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>

<section>
    <h2>Past Passive</h2>
    <p>The past passive is used to emphasize the object that receives an action, rather than the person or thing that performs the action. It's formed with the past tense of the verb "to be" (was/were) followed by the past participle of the main verb.</p>
    <div style="text-align: center; margin-top: 20px;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/j_lLJSO7q2M" title="Past Passive" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>


        <form action="" method="post">
            <section>
                <h2 class="test">Test Questions</h2>

                <?php 
                $questions = [
                    // Compound Adjectives
                    "Which compound adjective best describes a person who talks a lot?" => [
                        "a" => "Tight-lipped",
                        "b" => "Wide-mouthed",
                        "c" => "Sandwich",
                        "d" => "Sealed-lip"
                    ],
                    "If something is 'easy to understand,' what compound adjective could we use to describe it?" => [
                        "a" => "Hard-to-reach",
                        "b" => "Open-minded",
                        "c" => "Easy-to-digest",
                        "d" => "Far-reaching"
                    ],
                    "Imagine a very tall cake. What compound adjective could you use to describe its size?" => [
                        "a" => "Short-height",
                        "b" => "Big-sized",
                        "c" => "Shallow-depth",
                        "d" => "Short-lived"
                    ],
                    "If a movie is very exciting, what compound adjective could we use to describe it?" => [
                        "a" => "Uninteresting",
                        "b" => "Short-lived",
                        "c" => "High-impact",
                        "d" => "Low-quality"
                    ],
                    "A very old book could be described with the compound adjective:" => [
                        "a" => "State-of-the-art",
                        "b" => "Recently-published",
                        "c" => "Large-format",
                        "d" => "Old-school"
                    ],

                    // Past Passive
                    "Which of these options correctly completes the following sentence in the past passive? The song _____ by thousands of fans. (attend)" => [
                        "a" => "was attended",
                        "b" => "attended",
                        "c" => "were attended",
                        "d" => "has attended"
                    ],
                    "If I want to say 'The movie was directed by a famous director,' how would I say it in English using the past passive?" => [
                        "a" => "The movie directed by a famous director.",
                        "b" => "The movie was directed by a famous director.",
                        "c" => "A famous director directed the movie.",
                        "d" => "The movie has directed by a famous director."
                    ],
                    "Which of these sentences is NOT in the passive past?" => [
                        "a" => "The book was written by a famous author.",
                        "b" => "The cake was eaten too quickly.",
                        "c" => "She wrote a letter.",
                        "d" => "The game was postponed."
                    ],
                    "Imagine that you found a treasure. How would you say 'The treasure was found on a desert island' in the past passive?" => [
                        "a" => "The treasure found on a desert island.",
                        "b" => "The treasure was found on a desert island.",
                        "c" => "On a desert island found the treasure.",
                        "d" => "Found was the treasure on a desert island."
                    ],
                    "What is the key word that always appears in a sentence in the past passive?" => [
                        "a" => "By",
                        "b" => "Was/Were",
                        "c" => "Been",
                        "d" => "Had"
                    ]
                ];

                $correct_answers = [
                    "Which compound adjective best describes a person who talks a lot?" => "b",
                    "If something is 'easy to understand,' what compound adjective could we use to describe it?" => "c",
                    "Imagine a very tall cake. What compound adjective could you use to describe its size?" => "b",
                    "If a movie is very exciting, what compound adjective could we use to describe it?" => "c",
                    "A very old book could be described with the compound adjective:" => "d",
                    "Which of these options correctly completes the following sentence in the past passive? The song _____ by thousands of fans. (attend)" => "a",
                    "If I want to say 'The movie was directed by a famous director,' how would I say it in English using the past passive?" => "b",
                    "Which of these sentences is NOT in the passive past?" => "c",
                    "Imagine that you found a treasure. How would you say 'The treasure was found on a desert island' in the past passive?" => "b",
                    "What is the key word that always appears in a sentence in the past passive?" => "b"
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

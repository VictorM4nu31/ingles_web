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
    <title>Unit 10 - Lesson B</title>
    <style>
        :root {
            --fondo: #333333;
            --fondo-formulario: rgb(231, 229, 229);
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
        <h1>Unit 10 - Lesson B</h1>

        <section>
            <h2>Advising against something</h2>
            <p>It focuses on how to express recommendations so that someone avoids taking an action or making a decision that may be harmful or not beneficial. This type of advice usually has a preventive tone and is designed to warn of possible risks, inconveniences or negative consequences.</p>
            <img src="path/to/image.jpg" alt="Advising Image">
        </section>

        <section>
            <h2>Considering advice</h2>
            <p>It focuses on how to listen, reflect and respond to the advice someone gives us. This process involves not only understanding the advice, but also evaluating its relevance and usefulness before making a decision.</p>
        </section>

        <form action="" method="post">
            <section>
                <h2 class="test">Test Questions</h2>

                <?php 
                $questions = [
                    "What does the phrase 'You shouldn't eat too much sugar' mean?" => [
                        "a" => "It is mandatory to eat a lot of sugar.",
                        "b" => "It is not advisable to eat a lot of sugar.",
                        "c" => "It is a good idea to eat more sugar.",
                        "d" => "It is necessary to avoid sugar completely."
                    ],
                    "Which of the following is an appropriate way to advise someone not to swim in deep water?" => [
                        "a" => "You should not swim in deep water.",
                        "b" => "You must swim in deep water.",
                        "c" => "It is fun to swim in deep water.",
                        "d" => "You have to swim in deep water."
                    ],
                    "Which phrase expresses negative advice?" => [
                        "a" => "It's a great idea to try.",
                        "b" => "You shouldn't go alone.",
                        "c" => "You must do it immediately.",
                        "d" => "Why don't you try it?"
                    ],
                    "How could you advise someone not to go out without a coat?" => [
                        "a" => "It is not a good idea to go out without a coat.",
                        "b" => "You should definitely go out without a coat.",
                        "c" => "You must go out without a coat.",
                        "d" => "Going out without a coat is a good idea."
                    ],
                    "Which phrase does NO correspond to warning against something?" => [
                        "a" => "You should not eat junk food every day.",
                        "b" => "I would not recommend missing your classes.",
                        "c" => "It is a good idea to exercise daily.",
                        "d" => "It is not a good idea to spend too much time on the phone."
                    ],
                    "Which of these phrases shows that someone is thinking about advice received?" => [
                        "a" => "I'll think about it.",
                        "b" => "I'm not interested.",
                        "c" => "I already know that.",
                        "d" => "That's your problem."
                    ],
                    "If someone says 'That's a good point,' what are they doing?" => [
                        "a" => "Accept that the advice makes sense.",
                        "b" => "Completely reject the advice.",
                        "c" => "Ignore the comment.",
                        "d" => "Discuss the advice."
                    ],
                    "Which statement shows that a person is not considering advice?" => [
                        "a" => "That's an interesting idea.",
                        "b" => "I'll think about it.",
                        "c" => "I don't care.",
                        "d" => "I understand what you mean."
                    ],
                    "If someone answers 'Thanks, I'll try,' what does it mean?" => [
                        "a" => "You agree to follow the advice.",
                        "b" => "Reject the advice.",
                        "c" => "He did not understand the advice.",
                        "d" => "You believe that the advice is not useful."
                    ],
                    "What expression is used to show that someone understands advice, but does not decide immediately?" => [
                        "a" => "I'll think about it.",
                        "b" => "I'm sure I'll do it now.",
                        "c" => "I don't agree with you.",
                        "d" => "That is not possible."
                    ]
                ];

                $correct_answers = [
                    "What does the phrase 'You shouldn't eat too much sugar' mean?" => "b",
                    "Which of the following is an appropriate way to advise someone not to swim in deep water?" => "a",
                    "Which phrase expresses negative advice?" => "b",
                    "How could you advise someone not to go out without a coat?" => "a",
                    "Which phrase does NO correspond to warning against something?" => "c",
                    "Which of these phrases shows that someone is thinking about advice received?" => "a",
                    "If someone says 'That's a good point,' what are they doing?" => "a",
                    "Which statement shows that a person is not considering advice?" => "c",
                    "If someone answers 'Thanks, I'll try,' what does it mean?" => "a",
                    "What expression is used to show that someone understands advice, but does not decide immediately?" => "a",
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
</body>
</html>

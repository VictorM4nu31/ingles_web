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
</head>
<body>
    <div>
        <h1>Unit 11 - Lesson A</h1>

        <section>
            <h2>Compound Adjectives</h2>
            <p>Compound adjectives are words formed by combining two or more words to describe a noun in a more specific and detailed way. For example, in the phrase "It's a high-quality science fiction book," "high-quality" is a compound adjective that describes the noun "book."</p>
            <img src="path/to/image.jpg" alt="Compound Adjectives Example">
        </section>

        <section>
            <h2>Past Passive</h2>
            <p>The past passive is used to emphasize the object that receives an action, rather than the person or thing that performs the action. It's formed with the past tense of the verb "to be" (was/were) followed by the past participle of the main verb.</p>
            <img src="path/to/image.jpg" alt="Past Passive Example">
        </section>

        <form action="" method="post">
            <section>
                <h2>Test Questions</h2>

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

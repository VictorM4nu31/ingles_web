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
    <title>Unit 10 - Lesson A</title>
</head>
<body>
    <div>
        <h1>Unit 10: Living your life</h1>

        <section>
            <h2>Qualities for Success</h2>
            <p>The qualities for success are personal characteristics and skills that a person needs to achieve their goals and succeed in their personal and professional life. These qualities include motivation, discipline, creativity, flexibility, and responsibility, among others.</p>
            <img src="path/to/image.jpg" alt="Qualities for Success Example">
        </section>

        <section>
            <h2>Reflexive Pronouns</h2>
            <p>Reflexive pronouns are words that are used to refer to the same person or thing that performs the action described in the sentence. These pronouns include myself, yourself, himself, herself, itself, ourselves, yourselves, and themselves.</p>
            <img src="path/to/image.jpg" alt="Reflexive Pronouns Example">
        </section>

        <form action="" method="post">
            <section>
                <h2>Test Questions</h2>

                <?php 
                $questions = [
                    // Qualities for Success
                    "What quality refers to the ability to adapt to new situations?" => [
                        "a" => "Creativity",
                        "b" => "Motivation",
                        "c" => "Discipline",
                        "d" => "Flexibility"
                    ],
                    "Which quality is important for achieving long-term goals?" => [
                        "a" => "Motivation",
                        "b" => "Discipline",
                        "c" => "Creativity",
                        "d" => "Flexibility"
                    ],
                    "What quality refers to the ability to generate new ideas and solutions?" => [
                        "a" => "Motivation",
                        "b" => "Discipline",
                        "c" => "Creativity",
                        "d" => "Flexibility"
                    ],
                    "Which quality is important for taking responsibility for your actions?" => [
                        "a" => "Motivation",
                        "b" => "Discipline",
                        "c" => "Creativity",
                        "d" => "Responsibility"
                    ],
                    "What quality refers to the ability to maintain motivation and enthusiasm for achieving goals?" => [
                        "a" => "Discipline",
                        "b" => "Creativity",
                        "c" => "Flexibility",
                        "d" => "Motivation"
                    ],

                    // Reflexive Pronouns
                    "What is the correct reflexive pronoun for the first person singular?" => [
                        "a" => "Yourself",
                        "b" => "Himself",
                        "c" => "Herself",
                        "d" => "Myself"
                    ],
                    "Which reflexive pronoun is used for the second person singular?" => [
                        "a" => "Myself",
                        "b" => "Yourself",
                        "c" => "Himself",
                        "d" => "Herself"
                    ],
                    "What is the correct reflexive pronoun for the third person singular masculine?" => [
                        "a" => "Myself",
                        "b" => "Yourself",
                        "c" => "Himself",
                        "d" => "Herself"
                    ],
                    "Which reflexive pronoun is used for the third person plural?" => [
                        "a" => "Myself",
                        "b" => "Yourself",
                        "c" => "Himself",
                        "d" => "Themselves"
                    ],
                    "What is the correct reflexive pronoun for the first person plural?" => [
                        "a" => "Yourself",
                        "b" => "Himself",
                        "c" => "Herself",
                        "d" => "Ourselves"
                    ]
                ];

                $correct_answers = [
                    "What quality refers to the ability to adapt to new situations?" => "d",
                    "Which quality is important for achieving long-term goals?" => "b",
                    "What quality refers to the ability to generate new ideas and solutions?" => "c",
                    "Which quality is important for taking responsibility for your actions?" => "d",
                    "What quality refers to the ability to maintain motivation and enthusiasm for achieving goals?" => "d",
                    "What is the correct reflexive pronoun for the first person singular?" => "d",
                    "Which reflexive pronoun is used for the second person singular?" => "b",
                    "What is the correct reflexive pronoun for the third person singular masculine?" => "c",
                    "Which reflexive pronoun is used for the third person plural?" => "d",
                    "What is the correct reflexive pronoun for the first person plural?" => "d"
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
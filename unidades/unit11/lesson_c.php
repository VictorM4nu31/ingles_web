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
    <title>Unit 11 - Lesson C</title>
</head>
<body>
    <div>
        <h1>Unit 11: Verb and Noun Formation & Present Perfect with Yet and Already</h1>

        <section>
            <h2>Verb and Noun Formation</h2>
            <p>Certain words can function as both verbs and nouns, like "announce" and "composition". This is known as verb-noun word pairs or conversion. Key points include:</p>
            <h3>Key Points:</h3>
            <ul>
                <li>The noun and verb forms of these words have the same spelling but different pronunciations. The stress usually shifts to the first syllable when the word is used as a noun.</li>
                <li>Examples include: announce/announcement, entertain/entertainment, perform/performance, produce/production, record/recording, and release/release.</li>
                <li>The task is to identify the noun forms of the verbs listed in the table.</li>
            </ul>
        </section>

        <section>
            <h2>Present Perfect with Yet and Already</h2>
            <p>Using the present perfect tense with the adverbs "yet" and "already" helps to discuss actions that have or have not happened up to the present time.</p>
            <h3>Key Points:</h3>
            <ul>
                <li><strong>"Yet":</strong> Used in negative sentences to indicate an action has not happened by the present moment.</li>
                <li><strong>"Already":</strong> Used in affirmative sentences to indicate an action has happened before the present moment.</li>
                <li>The present perfect tense is formed with "have/has + past participle".</li>
            </ul>
        </section>

        <form action="" method="post">
            <section>
                <h2>Test Questions</h2>

                <?php 
                $questions = [
                    // Verb and Noun Formation
                    "What is the noun form of the verb 'appreciate'?" => [
                        "a" => "Appreciation",
                        "b" => "Appreciate",
                        "c" => "Appreciative",
                        "d" => "Appreciated"
                    ],
                    "Which of these word pairs has the same stress pattern when used as a noun vs a verb?" => [
                        "a" => "Compose - Composition",
                        "b" => "Record - Recording",
                        "c" => "Produce - Production",
                        "d" => "All of the above"
                    ],
                    "What is the noun form of the verb 'perform'?" => [
                        "a" => "Performative",
                        "b" => "Performed",
                        "c" => "Performer",
                        "d" => "Performance"
                    ],
                    "Which of the following is NOT a verb-noun pair from the image?" => [
                        "a" => "Announce - Announcement",
                        "b" => "Entertain - Entertainment",
                        "c" => "Compose - Composition",
                        "d" => "Release - Releasing"
                    ],
                    "In the image, which verb-noun pair has the stress on the first syllable when used as a noun?" => [
                        "a" => "Announce - Announcement",
                        "b" => "Entertain - Entertainment",
                        "c" => "Perform - Performance",
                        "d" => "Produce - Production"
                    ],

                    // Present Perfect with Yet and Already
                    "Which sentence uses the present perfect with 'yet' correctly?" => [
                        "a" => "He has already released his new album.",
                        "b" => "No, he hasn't released it yet.",
                        "c" => "Yes, I've already gotten a ticket.",
                        "d" => "No, I haven't gotten a ticket yet."
                    ],
                    "In the sentence 'He has already released it,' what tense is used?" => [
                        "a" => "Past simple",
                        "b" => "Present continuous",
                        "c" => "Future",
                        "d" => "Present perfect"
                    ],
                    "Which of these sentences does NOT use 'yet' or 'already' appropriately with the present perfect?" => [
                        "a" => "No, he hasn't released it yet.",
                        "b" => "Yes, I've already gotten a ticket.",
                        "c" => "No, I haven't gotten a ticket yet.",
                        "d" => "He has already wrote four new songs."
                    ],
                    "What does the use of 'yet' in a present perfect sentence indicate?" => [
                        "a" => "The action has already happened.",
                        "b" => "The action has not happened so far.",
                        "c" => "The action will happen in the future.",
                        "d" => "The action is happening right now."
                    ],
                    "Which sentence correctly demonstrates the use of the present perfect with 'already'?" => [
                        "a" => "Yes, he's already released his album.",
                        "b" => "No, he hasn't released it already.",
                        "c" => "He has already released it yet.",
                        "d" => "I've already gotten a ticket yet."
                    ]
                ];

                $correct_answers = [
                    "What is the noun form of the verb 'appreciate'?" => "a",
                    "Which of these word pairs has the same stress pattern when used as a noun vs a verb?" => "d",
                    "What is the noun form of the verb 'perform'?" => "d",
                    "Which of the following is NOT a verb-noun pair from the image?" => "d",
                    "In the image, which verb-noun pair has the stress on the first syllable when used as a noun?" => "a",
                    "Which sentence uses the present perfect with 'yet' correctly?" => "d",
                    "In the sentence 'He has already released it,' what tense is used?" => "d",
                    "Which of these sentences does NOT use 'yet' or 'already' appropriately with the present perfect?" => "d",
                    "What does the use of 'yet' in a present perfect sentence indicate?" => "b",
                    "Which sentence correctly demonstrates the use of the present perfect with 'already'?" => "a"
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
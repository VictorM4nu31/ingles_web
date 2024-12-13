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
</head>
<body>
    <div>
        <h1>Unit 11: Giving Instructions</h1>

        <section>
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
        </section>

        <form action="" method="post">
            <section>
                <h2>Test Questions</h2>

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
